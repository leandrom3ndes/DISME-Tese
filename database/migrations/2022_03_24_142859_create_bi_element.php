<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBiElement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bi_element', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title',255);
            $table->string('description',512);
            $table->enum('engine', ['linceBI','Knowage', 'Metabase', 'Superset']);
            $table->enum('type', ['Map','Chart']);
            $table->string('embed_code',512);
            $table->longText('preview',512);
            $table->integer('width')->nullable()->unsigned();
            $table->integer('height')->nullable()->unsigned();
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
        Schema::dropIfExists('bi_element');
    }
}
