<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Dosen;

class dosen extends Model
{
    protected $connection = "mysql"
    protected $fillable = ["nama_dosen","created_at","updated_at"]
}
