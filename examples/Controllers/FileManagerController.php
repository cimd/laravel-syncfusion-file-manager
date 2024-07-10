<?php

namespace Konnec\Examples\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Konnec\FileManager\Actions\Read;
use Konnec\FileManager\Dtos\FileManagerRequest;
use Konnec\FileManager\Dtos\ReadResponse;

class FileManagerController extends Controller
{
    public function read(Request $request): JsonResponse
    {
//                dump($request);
        $readRequest = FileManagerRequest::fromRequest($request);
//                dump($request);
        $result = Read::handle($readRequest);
        //        dump($result);

        return response()->json(ReadResponse::from($result));
    }
}
