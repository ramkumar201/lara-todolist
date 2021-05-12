<?php

namespace App\Http\Controllers;

use App\Http\Requests\TodoCreateRequest;
// use Illuminate\Support\Facades\Request; //useing Vali:: Raw Query
use Illuminate\Http\Request; 
use App\Models\Todo;
use App\Models\step;

class TodoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $todo = auth()->user()->todos;
        return view('todo.index')->with(['todos' => $todo]);
    }
    public function view(Todo $todo)
    {
        return view('todo.view',compact('todo'));
    }
    public function create()
    {
        return view('todo.create');
    }

    public function store(TodoCreateRequest $request)
    {
        // dd($request->all());
        $todo = auth()->user()->todos()->create($request->all());
        if($request->step){
            foreach($request->step as $step)
            {
                $todo->steps()->create(['name' => $step,]);
            }
        }
        return redirect()->back()->with('success','Todo created successfully');
    }

    public function edit(Todo $todo)
    {
        return view('todo.edit',compact('todo'));
    }

    public function update(TodoCreateRequest $request, Todo $todo)
    {
        $todo->update([
            'title' => $request->title,
            'decr' => $request->decr,
            'completed' => $request->completed,
        ]);
        if($request->stepName){
            foreach($request->stepName as $key => $value)
            {
                $id = $request->stepId[$key];
                if(!$id) {
                    $todo->steps()->create(['name' => $value]);
                }else{
                    $step = Step::find($id);
                    $step->update(['name' => $value]);
                }
                
            }
        }
        return redirect(route('todo.index'))->with('success','Todo Updated successfully');
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        $todo->steps->each->delete();
        return redirect()->back()->with('success','Todo Task Delete successfully');
    }
}
