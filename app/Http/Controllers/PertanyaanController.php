<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Pertanyaan;

class PertanyaanController extends Controller
{
    public function index()
    {
    	$pertanyaan =  Pertanyaan::get_all();
    	return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
    	return view('pertanyaan.create');
    }

    public function store(Request $request)
    {
    	$data = array(
    		'judul' => $request->judul,
    		'isi' => $request->isi,
    		'created_at' => \Carbon\Carbon::now(),
    		'updated_at' => \Carbon\Carbon::now()
    	);

    	Pertanyaan::simpan($data);
    	return back();
    }

    public function edit($id)
    {
    	$pertanyaan = Pertanyaan::find_id($id);
    	return view('pertanyaan.edit',compact('pertanyaan'));
    }

    public function update($id, Request $request)
    {
    	$data = array(
    		'judul' => $request->judul,
    		'isi' => $request->isi,
    		'updated_at' => \Carbon\Carbon::now()
    	);
    	Pertanyaan::update_id($id,$data);
    	return back();
    }

    public function destroy($id)
    {
    	$deleted = Pertanyaan::hapus($id);
    	return back();
    }
}
