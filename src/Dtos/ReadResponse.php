<?php

namespace Konnec\FileManager\Dtos;

use Spatie\LaravelData\Data;

class ReadResponse extends Data
{
    public function __construct(
        public DataDto $cwd,
        public array $files,
        public mixed $error = null,
        public mixed $details = null
    ) {}

    public static function fromResponse(array $data): self
    {
        return new self(
            cwd: DataDto::from($data['cwd']),
            files: array_map(fn ($file) => DataDto::from($file), $data['files']),
            error: $data['error'] ?? null,
            details: $data['details'] ?? null
        );
    }
}
