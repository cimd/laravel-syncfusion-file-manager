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

    public static function fromRequest(Request $request): self
    {
        return new self(
            action: $request->input('action', null),
            newName: $request->input('newName', null),
            names: $request->input('names', null),
            name: $request->input('name', null),
            size: $request->input('size', 0),
            previousName: $request->input('previousName', null),
            dateModified: $request->input('dateModified', date('Y-m-d H:i:s')),
            dateCreated: $request->input('dateCreated', date('Y-m-d H:i:s')),
            hasChild: $request->input('hasChild', false),
            isFile: $request->input('isFile', false),
            type: $request->input('type', null),
            id: $request->input('id', null),
            filterPath: $request->input('filterPath', ''),
            filterId: $request->input('filterId', null),
            parentId: $request->input('parentId', null),
            targetPath: $request->input('targetPath', null),
            renameFiles: $request->input('renameFiles', null),
            uploadFiles: $request->input('uploadFiles', null),
            caseSensitive: $request->input('caseSensitive', false),
            searchString: $request->input('searchString', null),
            showHiddenItems: $request->input('showHiddenItems', false),
            showFileExtension: $request->input('showFileExtension', false),
            data: $request->input('data', null),
            targetData: $request->input('targetData', null),
            permission: $request->input('permission', null),
            //            _fm_created: $request->input('_fm_created', null),
            //            _fm_modified: $request->input('_fm_modified', null),
            //            _fm_iconClass: $request->input('_fm_iconClass', 'e-fe-folder'),
            //            _fm_id: $request->input('_fm_id', 'fe_tree_0'),
            //            _fm_icon: $request->input('_fm_icon', 'e-fe-folder'),
            //            _fm_htmlAttr: $request->input('_fm_htmlAttr')
        );
    }
}
