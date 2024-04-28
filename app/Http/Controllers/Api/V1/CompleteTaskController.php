<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\TasksResource;
use App\Models\Tasks;
use Illuminate\Http\Request;

class CompleteTaskController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Tasks $task)
    {
        $task->is_completed = $request->is_completed;
        $task->save();

        return $this->sendResponse(TasksResource::make($task)->response()->getData(true),'Is complete toggled successfully');

    }
}
