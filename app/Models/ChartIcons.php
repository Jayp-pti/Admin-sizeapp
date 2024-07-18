<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartIcons extends Model
{
    protected  $fillable = ['name', 'status', 'icon'];
    use HasFactory;
}
