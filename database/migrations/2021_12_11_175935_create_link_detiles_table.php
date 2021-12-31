<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinkDetilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link_detiles', function (Blueprint $table) {
            $table->id();
            $table->integer('Link_id');
            $table->string('linkdetileName');
            $table->string('linkPageNmae');
            $table->string('linkRoutName');
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
        Schema::dropIfExists('link_detiles');
    }
}
