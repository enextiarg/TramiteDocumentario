<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFilesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('procedure_id')->unsigned();
            $table->string('file_number', 50);
            $table->string('document_number', 50);
            $table->string('subject');
            $table->timestamp('received_date');
            $table->integer('folio')->unsigned();
            $table->integer('customer_id')->unsigned();
            $table->boolean('file_status');
            $table->integer('document_type_id')->unsigned();
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('procedure_id')->references('id')->on('procedures');
            $table->foreign('customer_id')->references('id')->on('customers');
            $table->foreign('document_type_id')->references('id')->on('document_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('files');
    }
}
