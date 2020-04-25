<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index()
    {
        $data = array(
            'todos' => Todo::all()
        );
        return view('todos.index', $data);
    }

    public function create()
    {
        $data = array(
            'todos' => new Todo()
        );
        return view('todos.create', $data);
    }

    public function store(Request $request)
    {
        dd($request->all());
    }

    public function show(Todo $todo)
    {
        //
    }

    public function edit(Todo $todo)
    {
        $data = array(
            'todos' => $todo
        );
        return view('todos.edit', $data);
    }

    public function update(Request $request, Todo $todo)
    {
        //
    }

    public function destroy(Todo $todo)
    {
        //
    }
}