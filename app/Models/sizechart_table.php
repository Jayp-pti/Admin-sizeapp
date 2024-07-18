<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sizechart_table extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'category_id',
        'image',
        'image_position',
        'field_value',
        'icon'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
