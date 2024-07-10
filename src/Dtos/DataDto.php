<?php

namespace Konnec\FileManager\Dtos;

use Illuminate\Http\Request;
use Spatie\LaravelData\Data;

class DataDto extends Data
{
    public function __construct(
        public ?string $action,
        public ?string $newName,
        public ?string $names,
        public ?string $name,
        public int $size,
        public ?string $previousName,
        public string $dateModified,
        public string $dateCreated,
        public bool $hasChild,
        public bool $isFile,
        public ?string $type,
        public string|int|null $id,
        public string $filterPath,
        public ?string $filterId,
        public string|int|null $parentId,
        public ?string $targetPath,
        public ?string $renameFiles,
        public ?string $uploadFiles,
        public bool $caseSensitive,
        public ?string $searchString,
        public bool $showHiddenItems,
        public bool $showFileExtension,
        public ?string $data,
        public ?string $targetData,
        public ?string $permission,
        //        public string $_fm_created,
        //        public string $_fm_modified,
        //        public string $_fm_iconClass = 'e-fe-folder',
        //        public string $_fm_id = 'fe_tree_0',
        //        public string $_fm_icon = 'e-fe-folder',
        //        public mixed $_fm_htmlAttr = [],
        //        public string $_fm_pId = 'fe_tree',
        //        public bool $_fm_selected = true
    ) {}

    public static function fromArray(array $data): self
    {
        return new self(
            action: $data['action'],
            newName: $data['newName'],
            names: $data['names'],
            name: $data['name'],
            size: $data['size'],
            previousName: $data['previousName'],
            dateModified: $data['dateModified'],
            dateCreated: $data['dateCreated'],
            hasChild: $data['hasChild'],
            isFile: $data['isFile'],
            type: $data['type'],
            id: $data['id'],
            filterPath: $data['filterPath'],
            filterId: $data['filterId'],
            parentId: $data['parentId'],
            targetPath: $data['targetPath'],
            renameFiles: $data['renameFiles'],
            uploadFiles: $data['uploadFiles'],
            caseSensitive: $data['caseSensitive'],
            searchString: $data['searchString'],
            showHiddenItems: $data['showHiddenItems'],
            showFileExtension: $data['showFileExtension'],
            data: $data['data'],
            targetData: $data['targetData'],
            permission: $data['permission'],
        );
    }
}
