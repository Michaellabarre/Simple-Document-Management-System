<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocumentActionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_act_document', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('action_id')->nullable();

            $table->integer('unit_id')->nullable();

            $table->string('unit')->nullable();
            
            $table->string('person')->nullable();

            $table->string('position')->nullable()
            ;
            $table->dateTime('act_doc_date')->nullable();

            $table->string('remarks')->nullable();  
            
            $table->string('doc_status')->nullable(); 

            $table->integer('isactive')->default(1);

            $table->integer('created_by')->nullable();

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
        Schema::dropIfExists('tbl_act_document');
    }
}
