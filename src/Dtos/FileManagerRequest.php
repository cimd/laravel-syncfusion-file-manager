<?php

namespace Konnec\FileManager\Dtos;

use Illuminate\Http\Request;
use Spatie\LaravelData\Data;

class FileManagerRequest extends Data
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
            data: $request->has('data') ? self::dataDto($request->input('data')) : [],
            action: $request->input('action', 'read'),
            showHiddenItems: $request->input('showHiddenItems', false)
        );
    }

    private static function dataDto(array $data): array
    {
        return array_map(fn ($item) => DataDto::fromArray($item), $data);
    }
}
