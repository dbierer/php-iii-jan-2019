<?php
/**
 * Array Mapper Factory Class
 */
namespace FlyingElephantService\Model;

use DomainException;
use Zend\Config\Writer\PhpArray as ConfigWriter;
use ZF\Configuration\ConfigResource;
use Interop\Container\ContainerInterface;

/**
 * Service factory for the ArrayMapper
 * 
 * Requires the Config service in the service locator, and a
 * model.array_mapper_path subkey within the configuration that points
 * to a valid filesystem path of a PHP file that will return an array.
 *
 * Passes the data from the file, the path to the file, and a PhpArray config
 * writer to a ZF\Configuration\ConfigResource instance, and passes the data
 * and the ConfigResource instance to the ArrayMapper.
 */
class ArrayMapperFactory
{
    const CONFIG_KEY = 'propulsion';
    const ARRAY_MAPPER_PATH_KEY = 'array_mapper_path';
    const EXCEPTION_MSG = 'Cannot create Propulsion\ArrayMapper; ';

    /**
     * @param ContainerInterface $container
     * @param $requestedName
     * @param array|null $options
     * @return ArrayMapper
     * @throws \Psr\Container\ContainerExceptionInterface
     * @throws \Psr\Container\NotFoundExceptionInterface
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
		//*** ServiceManager under Expressive creates the "config" service (i.e. *not* "Config"!)
        if (!$container->has('config')) {
            throw new DomainException(static::EXCEPTION_MSG . ' missing Config dependency');
        }

        $config = $container->get(static::CONFIG_KEY);
        if (!$config) {
            throw new DomainException(static::EXCEPTION_MSG . 'missing ' . static::ARRAY_MAPPER_PATH_KEY . ' configuration');
        }

        $path = $config[static::ARRAY_MAPPER_PATH_KEY];
        if (! file_exists($path)) {
            throw new DomainException(sprintf(
                static::EXCEPTION_MSG . 'path "%s" does not exist',
                $path
            ));
        }
        $data = include $path;

        if (! is_array($data)) {
            throw new DomainException(sprintf(
                static::EXCEPTION_MSG . 'file "%s" does not return an array',
                $path
            ));
        }

        $configResource = new ConfigResource($data, realpath($path), new ConfigWriter());
        return new ArrayMapper($data, $configResource);
    }
}
