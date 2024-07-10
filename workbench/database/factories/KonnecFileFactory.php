<?php

namespace Workbench\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Konnec\FileManager\Models\KonnecFile;

class KonnecFileFactory extends Factory
{
    protected $model = KonnecFile::class;

    public function definition(): array
    {
        return [
            'disk' => 'local',
            'path' => '/photos/',
            'extension' => fake()->fileExtension(),
            'name' => fake()->name(),
            'hasChild' => false,
            'isFile' => true,
            'size' => 123,
        ];
    }

    public function file(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'isFile' => true,
                'size' => fake()->numberBetween(1, 1024 * 4),
            ];
        });
    }

    public function folder(): Factory
    {
        return $this->state(function (array $attributes) {
            return [
                'isFile' => false,
                'size' => 0,
            ];
        });
    }
}
