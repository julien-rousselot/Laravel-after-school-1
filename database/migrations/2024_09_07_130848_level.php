<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Level extends Migration
{
    public function up()
    {
        Schema::create('levels', function (Blueprint $table) {
            $table->id();
            $table->integer('level');
            $table->integer('xp_required');
        });
    }

    public function down()
    {
        Schema::dropIfExists('levels');
    }
}
