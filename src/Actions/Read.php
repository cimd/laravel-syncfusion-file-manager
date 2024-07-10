<?php

namespace Konnec\FileManager\Actions;

use Illuminate\Database\Eloquent\Collection;
use Konnec\FileManager\Dtos\FileManagerRequest;
use Konnec\FileManager\Models\KonnecFile;
use Konnec\FileManager\Traits\Actionable;

class Read
{
    use Actionable;

    public function run(FileManagerRequest $request): array
    {
        return [
            'cwd' => $this->currentWorkingDirectory($request),
            'files' => $this->files($request),
        ];
    }

    protected function currentWorkingDirectory(FileManagerRequest $request): KonnecFile
    {
        return KonnecFile::where('path', $request->path)->first();
    }

    protected function files(FileManagerRequest $request): Collection
    {
        $query = KonnecFile::query()
            ->where('path', $request->path);

        return $query->get();
    }
}
