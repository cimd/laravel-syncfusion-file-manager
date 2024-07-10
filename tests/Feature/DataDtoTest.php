<?php

use Konnec\FileManager\Dtos\DataDto;

it('creates dto', function () {
    $array = loadFixture('./Fixtures/file-manager-api/read-folder.json', 'request');
    $data = $array['data'][0];

    $dto = DataDto::fromArray($data);

    expect($dto)->toBeInstanceOf(DataDto::class);
});
