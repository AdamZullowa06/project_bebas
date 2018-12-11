<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
    public function gudang()
    {
        return $this->belongsTo('App\Gudang','gudang_id');
    }

    protected $fillable = ['gudang_id', 'nama', 'berat', 'pic'];
}
