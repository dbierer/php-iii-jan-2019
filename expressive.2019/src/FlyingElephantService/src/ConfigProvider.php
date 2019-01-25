<?php
namespace FlyingElephantService;

use FlyingElephantService\Model as FSM;
use FlyingElephantService\Handler as FSH;
use FlyingElephantService\PropulsionSystems as PPS;


/**
 * The configuration provider for the App module
 *
 * @see https://docs.zendframework.com/zend-component-installer/
 */
class ConfigProvider
{
    /**
     * Returns the configuration array
     *
     * To add a bit of a structure, each section is defined in a separate
     * method which returns an array with its configuration.
     *
     */
    public function __invoke() : array
    {
        $config = $this->getDependencies();
        return [
            'dependencies' => $config,
        ];
    }

    /**
     * Returns the container dependencies
     */
    public function getDependencies() : array
    {
        return [
			'aliases' => [
				'Propulsion\\Mapper' => FSM\ArrayMapper::class,
			],
            'factories'  => [
				FSM\ArrayMapper::class => FSM\ArrayMapperFactory::class,
				FSM\TableGateway::class => FSM\TableGatewayFactory::class,
				FSM\TableGatewayMapper::class => FSM\TableGatewayMapperFactory::class,
				FSH\FlyingElephantHandler::class => FSH\FlyingElephantHandlerFactory::class,
				PPS\PropulsionSystemsResource::class => PPS\PropulsionSystemsResourceFactory::class,
            ],
			'services' => require __DIR__ . '/../config/flying-elephant-service.config.php',
        ];
    }

}
