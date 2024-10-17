<?php

namespace App\Http\Controllers;

use App\Models\Music;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Symfony\Component\HttpFoundation\Response;

class MusicController extends Controller
{
    public function index(): JsonResponse
    {
        try {
            Log::info("Request for Music index method is being handled by worker: " . gethostname());
            $music = Music::all();
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message'=> $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $music,
            'message' => 'succeed'
        ], Response::HTTP_OK);
    }

    public function show($id): JsonResponse
    {
        try {
            Log::info("Request for Music show method is being handled by worker: " . gethostname());
            $music = Music::find($id);
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $music,
            'message' => 'succeed'
        ], Response::HTTP_OK);
    }

    public function store(Request $request): JsonResponse
    {
        Log::info("Request for Music store method is being handled by worker: " . gethostname());
        try {
            $music = Music::create($request->all());
        } catch (Exception $e) {
            return response()->json([
                'data' => [],
                'message' => $e->getMessage()
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }

        return response()->json([
            'data' => $music,
            'message' => 'succeed'
        ], Response::HTTP_OK);
    }
}
