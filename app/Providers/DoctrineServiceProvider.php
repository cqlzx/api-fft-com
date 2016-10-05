<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 10/2/16
 * Time: 12:51 PM
 */

namespace App\Providers;

use Doctrine\Common\Annotations\AnnotationReader;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Mapping\Driver\AnnotationDriver;
use Doctrine\ORM\Tools\Setup;
use Illuminate\Support\ServiceProvider;

class DoctrineServiceProvider extends ServiceProvider
{
    /**
     * Register the service provider
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(EntityManager::class, function ($app) {
            $paths = array(base_path('models'));
            $isDevMode = env('APP_DEBUG', false);
            $dbParams = array(
                'driver' => 'pdo_' . env('DB_CONNECTION'),
                'host' => env('DB_HOST'),
                'port' => env('DB_PORT'),
                'dbname' => env('DB_DATABASE'),
                'user' => env('DB_USERNAME'),
                'password' => env('DB_PASSWORD'),
                'charset' => env('DB_CHARSET', 'utf8mb4')
            );

            $config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);

            $driver = new AnnotationDriver(new AnnotationReader(), $paths);
            $config->setMetadataDriverImpl($driver);

            $entityManager = EntityManager::create($dbParams, $config);

            return $entityManager;
        });
    }
}