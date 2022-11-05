<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CreateProductoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto', function (Blueprint $table) {
            $table->integer('id')->autoIncrement();
            $table->string('codigo_producto', 45);
            $table->string('nombre', 45);
            $table->string('descripcion', 45);
            $table->integer('id_marca');
            $table->date('fecha_vencimiento');
            $table->dateTime('hora_registro');

            $table->foreign('id_marca')->references('id')->on('marca');
        });

        Schema::table('producto', function (Blueprint $table) {
            DB::statement('alter table `producto` add column `imagen` blob after id_marca');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('producto');
    }
}
