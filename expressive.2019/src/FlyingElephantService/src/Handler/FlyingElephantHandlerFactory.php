<?php

declare(strict_types=1);

namespace FlyingElephantService\Handler;

use Psr\Container\ContainerInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Zend\Expressive\Router\RouterInterface;
use Zend\Expressive\Template\TemplateRendererInterface;
use FlyingElephantService\Rest\PropulsionSystems\PropulsionSystemsResource;

use function get_class;

class FlyingElephantHandlerFactory
{
    public function __invoke(ContainerInterface $container) : RequestHandlerInterface
    {
        //$router   = $container->get(RouterInterface::class);
		$resource = $container->get(PropulsionSystemsResource::class);
        return new FlyingElephantHandler($resource);
    }
}
