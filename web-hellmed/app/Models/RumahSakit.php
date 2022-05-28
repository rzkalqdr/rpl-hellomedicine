<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;

    // protected $table = 'rumahsakit';

    // protected $guarded = ['idRS'];

    protected $fillable = ['namaRS', 'alamatRS'];

    protected $primaryKey = 'idRS';

    public $timestamps = false;
}