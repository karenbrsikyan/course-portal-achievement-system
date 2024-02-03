<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\JsonResponse;

class LessonsController extends Controller
{
    public function view(Lesson $lesson): JsonResponse
    {
        $user = auth()->user();

        $lesson->markAsWatchedBy($user);

        return response()->json([
            'message' => 'Lesson watched'
        ]);
    }
}
