<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    
	//lock untuk table dalam database
	protected $table = "mahasiswa";

	//lock untuk fill yang bisa diisi dalam table yang dipilih
	protected $fillable = ['nama','nim','alamat','id_admin'];

	public function getRouteKeyName()
	{
    	return 'id';
	}

	public  function scopeLike($query, $field, $value){
        return $query->where($field, 'LIKE', "%$value%");
	}

}
