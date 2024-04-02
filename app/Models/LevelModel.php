<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory; 

    protected $table = 'm_level'; //Mendefinisikan nama tabel yang digunakan
    protected $primaryKey = 'level_id'; //definisikan primary key dari tabel yang digunakan

    protected $fillable = ['level_id', 'level_kode', 'level_nama'];
}
