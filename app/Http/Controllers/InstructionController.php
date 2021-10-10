<?php

namespace App\Http\Controllers;

use App\Models\Instruction;
use App\Models\User;
use Illuminate\Http\Request;

class InstructionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructions = Instruction::all();
        // $instructions = Instruction::query()->where('verified', true)->get();
        $users = User::pluck('login', 'id');
        return view('instruction.index', ['instructions'=>$instructions, 'users'=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instruction = new Instruction();

        return view('instruction.create', ['instruction'=>$instruction]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instruction = new Instruction();
        $instruction->name = $request->name;
        $instruction->description = $request->description;
        $request->validate(['name'=>'required']);
        $request->validate(['filePath'=>'required']);
        $requestFile = $request->file('filePath');
        if($requestFile != null){
            $request->validate(['filePath'=>'mimes:txt']);
            $originalName = time() . '-'. $requestFile->getClientOriginalName();
            $requestFile->move(public_path() . '/storage', $originalName);
            $instruction->filePath = '/storage/' . $originalName;
        }
        $instruction->userId = 1;
        $instruction->save();
        return view('instruction.store', ['instruction'=>$instruction]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $instruction = Instruction::query()->where('id', $id)->first();
        $user = $instruction->user;
        return view('instruction.show', ['instruction'=>$instruction, 'user'=>$user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function search(Request $request)
    {
        $search = $request->searchText;
        $instructions = Instruction::query()->where('name', 'like', '%'.$search.'%')->get();
        // $instructions = $instructions->reject(function($instruction) {
        //     return $instruction->cancelled;
        // });
        // foreach($instructions as $instruction)
        //     echo $instruction->name;
        $users = User::pluck('login', 'id');
        return view('instruction.search', ['instructions'=>$instructions, 'users'=>$users, 'search'=>$search]);
    }
}
