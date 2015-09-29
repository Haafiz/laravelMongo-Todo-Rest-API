<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Input;
use App\Models\Category;
use App\Models\Task;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class TaskController extends Controller
{

    public function __construct(Task $task, Category $category)
    {
        $this->task = $task;
        $this->category = $category;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $collection = $this->task->all();
        return $collection;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $category_id = Input::get('category_id');
        $category = $this->category->find($category_id);

        $this->task->fill(Input::all());
        
        $saved = $category->tasks()->save($this->task);

        if ($saved) {
            return $this->task;
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        return $this->task->find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $category_id = Input::get('category_id');
        $category = $this->category->find($category_id);

        $task = $this->task->find($id);
        $task->fill(Input::all());
        
        $task->category()->associate($category);
        
        if ($task->save()) {
            return $task;
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $deleted = $this->task->destroy($id);
        
        if($deleted){
            return ['message' => 'Deleted Successfully'];
        }
    }

}
