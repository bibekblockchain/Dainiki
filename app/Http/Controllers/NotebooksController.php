<?php

namespace App\Http\Controllers;

use App\Notebook;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
class NotebooksController extends Controller
{
    public function index(){

    	$user=Auth::user();
    	$notebooks=$user->notebooks;

    	return view('notebooks.index',compact('notebooks'));
    }

    public function create(){
    	return view('notebooks.create');
    }

    public function store(Request $request){
    	$dataInput=$request->all();
    	$user=Auth::user();
    	$user->notebooks()->create($dataInput);

    	return redirect('/notebooks.html');
    }

    public function edit($id){
    	//$notebook=Notebook::where('id',$id)->first();
  		$user=Auth::user();
  		$notebook=$user->notebooks()->find($id);
  		return view('notebooks.edit')->with('notebook',$notebook);
    }

     public function update(Request $request,$id)
    {
    	//$notebook=Notebook::where('id',$id)->first();
    	$user=Auth::user();
  		$notebook=$user->notebooks()->find($id);
    	$notebook->update($request->all());

    	return redirect('/notebooks.html');
    }

    public function destroy($id){
    	//$notebook=Notebook::where('id',$id)->first();
    	$user=Auth::user();
  		$notebook=$user->notebooks()->find($id);
    	$notebook->delete();
    	return redirect('/notebooks.html');
    }

    public function show($id){
        $notebook=Notebook::find($id);
        $notes=$notebook->notes;
        return view('notes.index',compact('notes','notebook'));
    }
}
