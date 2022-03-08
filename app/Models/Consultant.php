<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classification extends Model
{
    use HasFactory;

    protected $table = 'lojavali';
    protected $primaryKey = 'codavali';
    public $timestamps=false;

}