<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class History extends Model
{
    use SoftDeletes;

    protected $fillable = ['organisasi', 'jabatan', 'tahun'];
    protected $table = 'histories';
}
