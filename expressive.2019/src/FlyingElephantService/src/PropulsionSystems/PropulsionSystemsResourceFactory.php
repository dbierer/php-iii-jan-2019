<?php
/**
 * Propulsion Systems Resource Factory
 * This is the class responsible for initializing the resource by injecting the mapper instance.
 */
namespace FlyingElephantService\PropulsionSystems;
use Interop\Container\ContainerInterface;

class PropulsionSystemsResourceFactory
{
    /**
     * @param ContainerInterface $container
     * @param $requestedName
     * @param array|null $options
     * @return PropulsionSystemsResource
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container)
    {
        // NOTE: Add some authentication mechanism here

        $path = null;
        $mapper = $container->get('Propulsion\Mapper');
        if($mapper instanceof ArrayMapper){
            $path = $container->get('propulsion')['array_mapper_path'] ?? null;
        }
        return new PropulsionSystemsResource(
			$mapper, $container->get('zf-mvc-auth'), $path);
    }
}
