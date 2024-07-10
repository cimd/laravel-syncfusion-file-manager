<?php

use Konnec\FileManager\Dtos\FileManagerRequest;

it('reads files', function () {
    $array = loadFixture('./Fixtures/file-manager-api/read-folder.json', 'request');
    $request = new Illuminate\Http\Request($array);

    $dto = FileManagerRequest::fromRequest($request);

    expect($dto)->toBeInstanceOf(FileManagerRequest::class);
});
