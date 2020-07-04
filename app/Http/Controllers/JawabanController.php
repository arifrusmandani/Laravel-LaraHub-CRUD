<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;
use App\Pertanyaan;

class JawabanController extends Controller
{
    public function index($pertanyaan_id)
    {
    	$pertanyaan = Pertanyaan::find_id($pertanyaan_id);
    	$list_jawaban = Jawaban::jawaban($pertanyaan_id);

    	return view('pertanyaan.jawaban',compact('pertanyaan','list_jawaban'));
    }

    public function store(Request $request, $pertanyaan_id)
    {
    	$data = array(
    		'isi' => $request->isi_jawaban,
    		'pertanyaan_id' => $pertanyaan_id,
    		'created_at' => \Carbon\Carbon::now()
    	);

    	Jawaban::simpan($data);

    	return back();
    }

    public function edit($id)
    {
    	$jawaban = Jawaban::find_id($id); 
    	return view('jawaban.edit',compact('jawaban'));
    }

    public function update($id, Request $request)
    {
    	$data = array(
    		'isi' => $request->isi_jawaban,
    		'updated_at' => \Carbon\Carbon::now()
    	);
    	Jawaban::update_id($id,$data);
    	return back();
    }

    public function destroy($id)
    {
    	$deleted = Jawaban::hapus($id);
    	return back();
    }
}
