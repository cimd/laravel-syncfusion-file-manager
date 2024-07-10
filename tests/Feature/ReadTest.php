<?php

use Konnec\FileManager\Actions\Read;
use Konnec\FileManager\Dtos\FileManagerRequest;
use Konnec\FileManager\Models\KonnecFile;

beforeEach(function () {
    KonnecFile::truncate();
});

it('reads database', function () {
    KonnecFile::factory()->create();

    $array = loadFixture('./Fixtures/file-manager-api/read-folder.json', 'request');
    $request = new Illuminate\Http\Request($array);

    $requestDto = FileManagerRequest::fromRequest($request);

    $result = Read::handle($requestDto);

    expect($result)->toHaveCount(1);
});
