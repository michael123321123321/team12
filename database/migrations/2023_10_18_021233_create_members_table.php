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
        Schema::create('members', function (Blueprint $table) {
            $table->id()->comment('編號');
            $table->string("name")->comment('人員名稱');
            $table->integer("oid")->unsigned()->comment('團體');
            $table->string("position")->comment('位置');
            $table->float("height")->unsigned()->comment('身高');
            $table->float("weight")->unsigned()->comment('體重');
            $table->integer("year")->unsigned()->comment('年資');
            $table->integer("age")->unsigned()->comment('年齡');
            $table->string("nationality")->comment('國籍');
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
        Schema::dropIfExists('members');
    }
};
