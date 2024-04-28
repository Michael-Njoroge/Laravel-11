<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Requests\StoreTasksRequest;
use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateTasksRequest;
use App\Http\Resources\TasksResource;
use App\Models\Tasks;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return TasksResource::collection(Tasks::with('priority')->paginate(10));

        // return $this->sendResponse(TasksResource::collection(Tasks::with('priority')->paginate(10))->response()->getData(true),'Tasks retrieved successfully.');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreTasksRequest $request)
    {
        $tasks = Tasks::create($request->validated());
        $tasks->load('priority');
        
        return $this->sendResponse(TasksResource::make($tasks)->response()->getData(true),'Task created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tasks $task)
    {
        $task->load('priority');
        return TasksResource::make($task);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTasksRequest $request, Tasks $task)
    {
        $task->update($request->validated());
        return TasksResource::make($task);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tasks $task)
    {
        $task->delete();

        return TasksResource::make($task);
    }
}
