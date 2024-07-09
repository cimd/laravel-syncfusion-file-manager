<?php

namespace Konnec\Examples\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Konnec\FileManager\Actions\Read;
use Konnec\FileManager\Dtos\ReadRequest;
use Konnec\FileManager\Dtos\ReadResponse;

class FileManagerController extends Controller
{
    public function read(Request $request): JsonResponse
    {
        dump($request);
        $readRequest = ReadRequest::from($request);
        dump($request);
        $result = Read::handle($request);
//        dump($result);

        return response()->json(ReadResponse::from($result));
    }
}
