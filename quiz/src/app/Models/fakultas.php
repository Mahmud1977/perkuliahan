<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Fakultas;

class fakultas extends Model
{
    protected $connection = "mysql"
    protected $fillable = ["nama_fakultas","created_at","updated_at"]
}
