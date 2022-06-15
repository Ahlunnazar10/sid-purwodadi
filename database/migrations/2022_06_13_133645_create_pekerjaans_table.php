<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePekerjaansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('tidak_bekerja');
            $table->string('wiraswasta');
            $table->string('petani');
            $table->string('irt');
            $table->string('guru');
            $table->string('pedagang');
            $table->string('pelajar');
            $table->string('supir');
            $table->string('pensiunan');
            $table->string('pns');
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
        Schema::dropIfExists('pekerjaans');
    }
}
