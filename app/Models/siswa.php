<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class siswa extends Model
{
    use HasFactory;

    protected $table = "siswa";
    //set primary key

    protected $primarykey = "id_siswa";
    //set auto increment
    public $incrementing = false;

    //set tipe data primary key
    protected $keyType = 'string';

    //setting kolom yang dapat diisi
    protected $guarded = [];
}
