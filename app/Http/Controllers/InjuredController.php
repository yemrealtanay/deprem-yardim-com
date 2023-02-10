<?php

namespace App\Http\Controllers;

use App\Models\Injured;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class InjuredController extends Controller
{
    public function edit(int $injured_id): JsonResponse
    {
        try {
            $injured_data = Injured::findOrFail($injured_id);
            return response()->json($injured_data);
        }catch (\Exception $e){
            return response()->json(['error' => $e->getMessage()]);
        }
    }
}
