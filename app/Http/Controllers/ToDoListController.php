<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\ToDoList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            $to_dos = ToDoList::all();
            return view('to_do_list.index', compact('to_dos'));
        }else{
            return redirect('/to_do/login');
        }
        
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('to_do_list.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $to_do = new ToDoList();
        $to_do->content = $request->content;
        $to_do->status = 1;
        // $to_do->user_id = Auth::user();
        $to_do->user_id = 1;
        $to_do->save();
        return redirect('to_do_list');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ToDoList  $toDoList
     * @return \Illuminate\Http\Response
     */
    public function show(ToDoList $toDoList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ToDoList  $toDoList
     * @return \Illuminate\Http\Response
     */
    public function edit(ToDoList $toDoList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ToDoList  $toDoList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ToDoList $toDoList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ToDoList  $toDoList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ToDoList $toDoList)
    {
        //
    }

    public function login()
    {
        if(Auth::check()) {
            return redirect('/to_do_list');
        }else{
            return view('to_do_list.login');
        }
    }

    public function toDoLogin(LoginRequest $request) 
    {
        Auth::attempt($request->validated());
        if(Auth::check()) {
            return redirect('/to_do_list');
        } else {
            return "Login Fail";
        }
    }
}
