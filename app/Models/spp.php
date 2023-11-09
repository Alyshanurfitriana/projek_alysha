<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class spp extends Model
{
    use HasFactory;

    protected $table = "spp";
    //set primary key

    protected $primarykey = "id_spp";
    //set auto increment
    public $incrementing = false;

    //set tipe data primary key
    protected $keyType = 'string';

    //setting kolom yang dapat diisi
    protected $guarded = [];
}
