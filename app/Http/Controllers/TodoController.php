<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $todo = Todo::all();
        $todo = Todo::orderBy('created_at', 'DESC')->get();
        return view('home')->with('todos', $todo);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        $this->validate($request, [
            'title' => 'string|required',
        ]);
        $todo = new Todo;
        $todo->title = $request->input('title');
        $todo->save();
        if ($todo) {
            return redirect()->back()->with('success', 'todo Successfully added');
        } else {
            return redirect()->back()->with('error', 'todo added unSuccessfully');
        }
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function show(Todo $todo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id){
        //
        $todo = Todo::findOrFail($id);
        $todo->title = $request->input('title');
        $updateBlog = $todo->save();
        if($updateBlog){
            return redirect()->back()->with('success','todo Successfully added');
        }
        else{
            return redirect()->back()->with('error','todo added unSuccessfully');
        }
    }

    public function changeStatus(Request $request, $id){
        //
        $todo = Todo::findOrFail($id);
        $todo->status = $request->input('status');
        $updateBlog = $todo->save();
        if($updateBlog){
            return redirect()->back()->with('success','todo Successfully added');
        }
        else{
            return redirect()->back()->with('error','todo added unSuccessfully');
        }
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTodoRequest  $request
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTodoRequest $request, Todo $todo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Todo  $todo
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $todo = Todo::findOrFail($id);
        if($todo->delete()){
            return redirect()->back()->with('success','todo Successfully added');
        }else{
            return redirect()->back()->with('error','unable to delete todo');
        }


    }
}
