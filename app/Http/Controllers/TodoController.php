<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTodoRequest;
use App\Http\Requests\UpdateTodoRequest;
use App\Models\Todo;

class TodoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('home');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTodoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTodoRequest $request){
        $this->validate($request,[
            'title'=>'string|required',
            'done'=>'boolean|integer',
        ]);

        $data = $request->all();

        $todo = Todo::Create($data);
        if($todo){
            return redirect()->back()->with('success','todo Successfully added');
        }
        else{
            return redirect()->back()->with('error','todo added unSuccessfully');
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
    public function edit(Request $request, $id)
    {
        //
        $todo = Todo::findOrFail($id);
        $this->validate($request,[
            'title'=>'string|required',
            'done'=>'boolean|integer',
        ]);

        $data = $request->all();
        $updateBlog = $todo->fill($data)->save();
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
