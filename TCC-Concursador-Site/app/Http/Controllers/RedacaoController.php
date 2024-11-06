<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\OpenAIService;

class RedacaoController extends Controller
{
    protected $openAIService;

    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
    }

    public function submitEssay(Request $request)
    {
        $request->validate([
            'essay' => 'required|string',
        ]);

        try {
            $correctedEssay = $this->openAIService->correctEssay($request->input('essay'));
            return response()->json(['correctedEssay' => $correctedEssay]);
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}