<?php

use Konnec\FileManager\Dtos\FileManagerRequest;

it('read request', function () {
    $request = loadFixture('./Fixtures/file-manager-api/read-folder.json', 'request');

    $response = $this->postJson('/read', $request);
    dump($response->json());

    expect($response->status())->toBe(200);
});
