<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tempatVaksin extends Model
{
    protected $guarded = ['id'];

    protected $primaryKey = 'idVaksin';

    public $timestamps = false;
}
