<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Validator;
use App\Models\User;

class UserController extends Controller
{
    public function uploadFile(Request $request): JsonResponse
    {
        Log::info("Request for Upload File method is being handled by worker: " . gethostname());
        $validator = validator::make($request->all(), [
            'name' => 'required|string',
            'file' => 'required|mimes:jpg,png|max:2048',
        ]);

        if($validator->fails()){
            return response()->json($validator->errors(), 400);
        }

        $user = User::find(auth()->user()->getAuthIdentifier());

        $file = $request->file('file');
        $filename = $user->username . '_' . time() . '_' . $request->get('name');
        $file->move(public_path('uploads'), $filename);
        
        return response()->json([
            'message' => 'File uploaded successfully',
            'filename' => $filename,
        ], 201);
    }
}
