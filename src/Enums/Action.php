<?php

declare(strict_types=1);

namespace Konnec\FileManager\Enums;

enum Action: string
{
    case READ = 'read';
    case COPY = 'copy';
    case CREATE = 'create';
    case MOVE = 'move';
    case DELETE = 'delete';
    case DETAILS = 'details';
    case RENAME = 'rename';
    case UPLOAD = 'upload';
}
