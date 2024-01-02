<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkincareTable extends Migration
{
    public function up()
    {
        Schema::create('kesimpulan', function (Blueprint $table) {
            $table->id();
            $table->string('moisturizer');
            $table->string('serum');
            $table->string('sunscreen');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('kesimpulan');
    }
}
