<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function create(){
    	return view('pertanyaans.create');
    }

    public function store(Request $request){
    	//dd($request->all());

    	$request->validate([
    		"judul" => "required|unique:pertanyaans",
    		"isi" => "required"
    	]);

    	$query = DB::table('pertanyaans')->insert([
    		"judul" => $request["judul"],
    		"isi" => $request["isi"] 
    	]);

    	return redirect('/pertanyaans')->with('success','Berhasil disimpan!');
    }

    public function index(){
    	$pertanyaans = DB::table('pertanyaans')->get(); // select * from pertanyaans
    	//	dd($pertanyaans);
    	return view('pertanyaans.index', compact('pertanyaans'));
    }

    public function show($id){
    	$pertanyaan = DB::table('pertanyaans')->where('id',$id)->first();
    	//dd($pertanyaan);
    	return view('pertanyaans.show', compact('pertanyaan'));
    }

    public function edit($id){
    	$pertanyaan = DB::table('pertanyaans')->where('id',$id)->first();

    	return view('pertanyaans.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request){

    	$request->validate([
    		"judul" => "required|unique:pertanyaans",
    		"isi" => "required"
    	]);

    	$query = DB::table('pertanyaans')
    				->where('id',$id)
    				->update([
    					'judul' => $request['judul'],
    					'isi' => $request['isi']
    				]);
    	return redirect('/pertanyaans')->with('success','Berhasil ubah data!');
    }

    public function destroy($id){
    	$query = DB::table('pertanyaans')->where('id', $id)->delete();

    	return redirect('/pertanyaans')->with('success', 'Berhasil di hapus!');
    }
}
