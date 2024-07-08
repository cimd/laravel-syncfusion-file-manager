<?php

namespace Konnec\FileManager\Actions;

use Illuminate\Support\Facades\Storage;
use Konnec\FileManager\Traits\Actionable;

class Read
{
    use Actionable;

    public function run(string $path, string $disk): array
    {
        $files = Storage::disk($disk)->files($path);
        $directory = Storage::disk($disk)->directories($path);

        return array_merge($files, $directory);

    }
}
