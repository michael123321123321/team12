<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orchestra', function (Blueprint $table) {
            $table->id();
            $table->string("name")->comment('團體名稱');
            $table->string("company")->comment('公司名稱');
            $table->string("city")->comment('公司位置');
            $table->string("style")->comment('曲風類別');
            $table->timestamps();
        });
    } 

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orchestra');
    }
};
