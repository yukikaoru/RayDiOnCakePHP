<?php
namespace RayDiOnCake\Di;

use Doctrine\Common\Cache\Cache;
use Doctrine\Common\Cache\PhpFileCache;
use Ray\Di\Injector;

/**
 * Injectorの設定
 */
trait InjectorConfiguration
{
    /**
     * DiCの生成
     *
     * @return Injector
     */
    protected function createInjector()
    {
        return Injector::create(
            [
                // listing to install modules
            ],
            $this->createDiCache()
        );
    }

    /**
     * キャッシュの生成
     * 好きなキャッシュタイプに変更する
     *
     * @return Cache
     */
    protected function createDiCache()
    {
        $config = \Cache::settings('_cake_model_');
        $cache = new PhpFileCache($config['path']);
        return $cache;
    }

}
