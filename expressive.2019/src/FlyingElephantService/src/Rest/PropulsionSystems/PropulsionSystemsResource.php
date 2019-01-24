<?php
/**
 * Propulsion Systems Resource Class
 * This is the class that handles input data
 */
namespace FlyingElephantService\Rest\PropulsionSystems;

use FlyingElephantService\V1\Model\MapperInterface;
use ZF\ApiProblem\ApiProblem;
use ZF\Rest\AbstractResourceListener;
use Zend\Diactoros\Response\JsonResponse;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class PropulsionSystemsResource extends AbstractResourceListener
{
    protected $mapper;
    protected $auth;
    protected $path;

    public function __construct(MapperInterface $mapper, $auth, $path = null)
    {
        $this->mapper = $mapper;
        $this->auth = $auth;
        $this->path = $path;
    }

    public function __invoke(ServerRequestInterface $request) 
    {

        $method = $request->getMethod();

        // Decode to a standard class object
        $data = $request->getBody()->__toString() 
			  ? json_decode($request->getBody()->__toString()) 
			  : null;

        $id = $request->getAttribute('id');
        $route = $request->getUri()->getPath();
        $auth = $this->auth['authorization'][__CLASS__];

        if($id){
            switch(true){
                case ($method === 'GET' && $auth['entity'][$method]) :
                    return new JsonResponse($this->fetch($id));
                case ($method === 'POST' && $auth['entity'][$method]) :
                    return new JsonResponse($this->create($id, $data));
                case ($method === 'PATCH' && $auth['entity'][$method]) :
                    return new JsonResponse($this->patch($id, $data));
                case ($method === 'PUT' && $auth['entity'][$method]) :
                    return new JsonResponse($this->patch($id, $data));
                case ($method === 'DELETE' && $auth['entity'][$method]) :
                    return new JsonResponse($this->delete($id));
            }
        } else {
            switch(true){
                case ($method === 'GET' && $auth['collection'][$method]) :
                    // Get the collection object and return the items.
                    return new JsonResponse($this->fetchAll()->getCurrentItems());
                case ($method === 'POST' && $auth['collection'][$method]):
                    return new JsonResponse($this->create($data));
                case ($method === 'PATCH' && $auth['collection'][$method]):
                    return new JsonResponse($this->patchList($data));
                case ($method === 'PUT' && $auth['collection'][$method]):
                    return new JsonResponse($this->replaceList($data));
                case ($method === 'DELETE' && $auth['collection'][$method]):
                    return new JsonResponse($this->deleteList($data));
            }
        }
        return new JsonResponse($method . ' method is not allowed');
    }

    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        return $this->mapper->create($data);
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        return $this->mapper->delete($id);
    }

    /**
     * Delete a collection, or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function deleteList($data)
    {
        return new ApiProblem(405, 'The DELETE method has not been defined for collections');
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
        return $this->mapper->fetch($id);
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = [])
    {
        return $this->mapper->fetchAll();
    }

    /**
     * Patch (partial in-place update) a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patch($id, $data)
    {
        return $this->mapper->update($id, $data);
    }

    /**
     * Patch (partial in-place update) a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function patchList($data)
    {
        return new ApiProblem(405, 'The PATCH method has not been defined for collections');
    }

    /**
     * Replace a collection or members of a collection
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function replaceList($data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for collections');
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        return $this->mapper->update($id, $data);
    }
}
