<?php

namespace Konnec\Examples\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Routing\Controller;
use Konnec\FileManager\Actions\Read;
use Konnec\FileManager\Dtos\ReadRequest;
use Konnec\FileManager\Dtos\ReadResponse;

class FileManagerController extends Controller
{
    public function read(ReadRequest $request): JsonResponse
    {
        $result = Read::handle($request);

        return response()->json(ReadResponse::from($result));
    }
}
