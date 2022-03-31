<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBiElementTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bi_elements', function (Blueprint $table) {
            $table->id();
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
        Schema::dropIfExists('bi_elements');
    }
}
