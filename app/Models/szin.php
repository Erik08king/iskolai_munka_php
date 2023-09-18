<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class szin extends Model
{
    use HasFactory;
    public $table = "szinek";
    public $primaryKey = "szin_id";
    public $timestamps = false;
}
