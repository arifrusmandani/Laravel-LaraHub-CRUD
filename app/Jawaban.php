<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Jawaban extends Model
{
   public static function jawaban($pertanyaan_id)
   {
   		$list_jawaban = DB::table('jawaban')->where('pertanyaan_id', $pertanyaan_id)->get();
   		return $list_jawaban;
   }

   public static function simpan($data)
   {
   		DB::table('jawaban')->insert($data);
   }

   public static function find_id($id)
    {
    	$jawaban = DB::table('jawaban')->find($id);
    	return $jawaban;
    }

    public static function update_id($id,$data)
    {
    	$jawaban = DB::table('jawaban')->where('id', $id)->update($data);
    	return $jawaban;
    }

    public static function hapus($id)
    {
    	$deleted = DB::table('jawaban')
    				->where('id', $id)
    				->delete();
    	return $deleted;
    }
}
