<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizeChartFieldsTable extends Migration
{
    public function up()
    {
        Schema::create('size_chart_fields', function (Blueprint $table) {
            $table->id();
            $table->foreignId('size_chart_id')->constrained()->onDelete('cascade');
            // $table->string('field_name');
            $table->json('field_value')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('size_chart_fields');
    }
}
