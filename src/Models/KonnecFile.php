<?php

namespace Konnec\FileManager\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KonnecFile extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'konnec_filemanager';

    protected $guarded = [
        'id',
        'created_at',
        'updated_at',
    ];

    protected $casts = [
        'size' => 'integer',
        'hasChild' => 'boolean',
        'isFile' => 'boolean',
    ];
}
