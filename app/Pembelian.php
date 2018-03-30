<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $table = 'pembelian';

    protected $fillable = array('nik', 'nama','tanggal');

    protected $fillable1 = array('nik', 'nama','tanggal','id_barang');


	
	public function barang() {
		return $this->belongsTo('App\Barang', 'id_barang');}

	
public function faktur() 
    {
        return $this->belongsToMany('App\Faktur', 'detailbeli', 'id_pembelian', 'id_faktur');
    }
}

