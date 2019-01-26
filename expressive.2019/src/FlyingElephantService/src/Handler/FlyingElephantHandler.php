<?php

declare(strict_types=1);

namespace FlyingElephantService\Handler;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Diactoros\Response\JsonResponse;
use FlyingElephantService\PropulsionSystems\PropulsionSystemsResource;

use function time;

class FlyingElephantHandler implements RequestHandlerInterface
{
	protected $resource;
	public function __construct(PropulsionSystemsResource $resource)
	{
		$this->resource = $resource;
	}
    public function handle(ServerRequestInterface $request) : ResponseInterface
    {
        return $this->resource->__invoke($request);
    }
}
