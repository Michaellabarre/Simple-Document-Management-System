<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DocumentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_document', function (Blueprint $table) {

            $table->increments('id');

            $table->integer('doctype_id')->nullable();

            $table->string('reference_number')->nullable();
            
            $table->dateTime('doc_date')->nullable();

            $table->dateTime('doc_received')->nullable();  

            $table->string('Subject')->nullable();  
            
            $table->string('doc_status')->nullable(); 


            $table->string('from_to')->nullable(); 

            $table->string('designation')->nullable();  

            $table->string('office')->nullable();  

            $table->string('office_address')->nullable();  

            $table->dateTime('deadline')->nullable();

            $table->string('remarks')->nullable();  

            $table->integer('isactive')->default(1);

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
        Schema::dropIfExists('tbl_document');
    }
}
