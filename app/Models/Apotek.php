<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apotek extends Model
{
    use HasFactory;

    protected $fillable = ['namaApotek', 'alamatApotek', 'linkgmaps'];

    protected $primaryKey = 'idApotek';

    public $timestamps = false;
}
