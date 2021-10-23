<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->id();            
            $table->string("nombre",50)->unique(); 
            $table->text("descripcion")->nullable(); 
            $table->float("precio",8,2);
            $table->integer("cantidad");  
            $table->unsignedBigInteger("categoria_id");         
            $table->foreign("categoria_id")
                ->references("id")
                ->on("categorias")
                ->onDelete("cascade");                  
                  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('productos');
    }
}
