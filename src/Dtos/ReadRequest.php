<?php

namespace Konnec\FileManager\Dtos;

use Illuminate\Http\Request;
use Spatie\LaravelData\Data;

class ReadRequest extends Data
{
    public function __construct(
        public string $path,
        public array $data,
        public string $action = 'read',
        public bool $showHiddenItems = false
    ) {}

    public static function fromRequest(Request $request): self
    {
        return new self(
            path: $request->input('path', ''),
            data: $request->input('data', []),
            action: $request->input('action', 'read'),
            showHiddenItems: $request->input('showHiddenItems', false)
        );
    }
}
