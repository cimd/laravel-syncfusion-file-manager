<?php

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Konnec\FileManager\Actions\Read;

it('reads files', function () {
    Storage::fake('photos');
    $file = UploadedFile::fake()->image('photo1.jpg');
    Storage::disk('photos')->put('photo1.jpg', $file);

    $files = Read::handle('', 'photos');
    dump($files); // ['photo1.jpg']

    Storage::disk('photos')->assertExists('photo1.jpg');
});
