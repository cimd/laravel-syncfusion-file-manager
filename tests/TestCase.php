<?php

namespace Tests;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Konnec\Examples\Controllers\FileManagerController;
use Orchestra\Testbench\Concerns\WithWorkbench;
use Orchestra\Testbench\TestCase as BaseTestCase;

use function Orchestra\Testbench\workbench_path;

abstract class TestCase extends BaseTestCase
{
    use WithWorkbench;

    protected function setUp(): void
    {
        $this->setFactoriesNamespacing();
        parent::setUp();
    }

    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array<int, class-string<\Illuminate\Support\ServiceProvider>>
     */
    protected function getPackageProviders($app): array
    {
        return [
            'Konnec\FileManager\Providers\ServiceProvider',
        ];
    }

    protected function defineDatabaseMigrations(): void
    {
        $this->loadMigrationsFrom(workbench_path('database/migrations'));
    }

    /**
     * Define routes setup.
     *
     * @param  \Illuminate\Routing\Router  $router
     */
    protected function defineRoutes($router): void
    {
        $router->post('copy', [FileManagerController::class, 'copy']);
        $router->post('create', [FileManagerController::class, 'create']);
        $router->post('move', [FileManagerController::class, 'move']);
        $router->post('delete', [FileManagerController::class, 'delete']);
        $router->post('details', [FileManagerController::class, 'details']);
        $router->post('read', [FileManagerController::class, 'read']);
        $router->post('rename', [FileManagerController::class, 'rename']);
        $router->post('search', [FileManagerController::class, 'search']);
        $router->post('upload', [FileManagerController::class, 'upload']);
    }

    protected function setFactoriesNamespacing(): void
    {
        Factory::guessFactoryNamesUsing(function (string $modelFullClass) {
            // Here we are getting the model name from the class namespace
            $modelName = Str::afterLast($modelFullClass, '\\');

            // We can also customise where our factories live too if we want:
            $namespace = 'Workbench\\Database\\Factories\\';

            // Finally we'll build up the full class path where
            // Laravel will find our model factory
            return $namespace.$modelName.'Factory';
        });
    }
}
