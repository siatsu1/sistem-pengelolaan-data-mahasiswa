<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id';

    function handleUploadFoto()
    {
      
        if (request()->hasFile('foto')) {
            $foto = request()->file('foto');
            $destination = "public/app/mahasiswa";
            $randomStr = Str::random(5);
            $filename = "mahasiswa-" . time() . "-"  . $randomStr . "."  . $foto->extension();
            $url = $foto->move($destination, $filename);
            $this->foto = $filename;
            $this->save();
        }

      
    }

    public function created_by()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
