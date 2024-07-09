<?php

namespace Konnec\FileManager\Actions;

use Illuminate\Database\Eloquent\Collection;
use Konnec\FileManager\Dtos\ReadRequest;
use Konnec\FileManager\Models\KonnecFile;
use Konnec\FileManager\Traits\Actionable;

class Read
{
    use Actionable;

    public function run(ReadRequest $request): Collection
    {
        $query = KonnecFile::query()
            ->where('path', $request->path);

        return $query->get();
    }
}
