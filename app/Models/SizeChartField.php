<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SizeChartField extends Model
{
    use HasFactory;

    protected $fillable = ['size_chart_id', 'field_value'];

    public function sizeChart()
    {
        return $this->belongsTo(SizeChart::class);
    }
}
