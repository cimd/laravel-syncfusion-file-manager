<?php

namespace Workbench\Database\Seeders;

use Illuminate\Database\Seeder;
use Konnec\Examples\Models\Comment;
use Konnec\Examples\Models\Post;
use Konnec\Examples\Models\User;
use Konnec\FileManager\Models\KonnecFile;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        KonnecFile::factory()->count(4)->create();
    }
}
