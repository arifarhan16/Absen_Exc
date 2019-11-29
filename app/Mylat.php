<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mylat extends Model
{
    //
    protected $table = "absen";
    protected $fillable = ['nama','kelas','tanggal','bulan','tahun','kehadiran'];

}
