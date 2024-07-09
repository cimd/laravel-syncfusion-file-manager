<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Konnec\FileManager\Actions\Read;
use Konnec\FileManager\Models\KonnecFile;

it('reads files', function () {
    KonnecFile::factory()->create();

    $file = KonnecFile::first();
    dump($file);

    $request = [
        'path' => $file->path,
    ];

    $response = $this->postJson('/read', $request);
    dump($response->json());

    $response->assertStatus(200);
});

it('reads files from filesystem', function () {
    Storage::fake('photos');
    $file = UploadedFile::fake()->image('photo1.jpg');
    Storage::disk('photos')->put('photo1.jpg', $file);

    $files = Read::handle('', 'photos');
    dump($files); // ['photo1.jpg']

    Storage::disk('photos')->assertExists('photo1.jpg');
})->skip();
