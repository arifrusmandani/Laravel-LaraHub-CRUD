<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Pertanyaan extends Model
{
    public static function get_all()
    {
    	$pertanyaan = DB::table('pertanyaan')->get();
    	return $pertanyaan;
    }

    public static function simpan($data)
    {
    	DB::table('pertanyaan')->insert($data);
    }

    public static function find_id($id)
    {
    	$pertanyaan = DB::table('pertanyaan')->find($id);
    	return $pertanyaan;
    }

    public static function update_id($id,$data)
    {
    	$pertanyaan = DB::table('pertanyaan')->where('id', $id)->update($data);
    	return $pertanyaan;
    }

    public static function hapus($id)
    {
    	$deleted = DB::table('pertanyaan')
    				->where('id', $id)
    				->delete();
    	return $deleted;
    }
}
