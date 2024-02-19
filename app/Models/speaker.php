<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class speaker extends Model
{
    use HasFactory;
    protected $table = 'speakers';
}

class photo extends Model{
    protected $table = 'speaker_photo';
}






