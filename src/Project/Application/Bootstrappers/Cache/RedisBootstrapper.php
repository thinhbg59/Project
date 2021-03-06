<?php
namespace Project\Application\Bootstrappers\Cache;

use Opulence\Bootstrappers\Bootstrapper;
use Opulence\Bootstrappers\ILazyBootstrapper;
use Opulence\Ioc\IContainer;
use Opulence\Redis\Redis;
use Opulence\Redis\Types\TypeMapper;
use Redis as Client;

/**
 * Defines the Redis bootstrapper
 */
class RedisBootstrapper extends Bootstrapper implements ILazyBootstrapper
{
    /**
     * @inheritdoc
     */
    public function getBindings() : array
    {
        return [Redis::class, TypeMapper::class];
    }

    /**
     * @inheritdoc
     */
    public function registerBindings(IContainer $container)
    {
        $client = new Client();
        $client->connect(
            $this->environment->getVar("REDIS_HOST"),
            $this->environment->getVar("REDIS_PORT")
        );
        $client->select($this->environment->getVar("REDIS_DATABASE"));
        $redis = new Redis($client);
        $container->bindInstance(Redis::class, $redis);
        $container->bindInstance(TypeMapper::class, new TypeMapper());
    }
}