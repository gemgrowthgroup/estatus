<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('reference');
            $table->string('requested_by');
            $table->integer('user_id')->unsigned();
            $table->string('client');
            $table->date('from');
            $table->string('project');
            $table->string('origin');
            $table->integer('vehicle_type_id')->unsigned();
            $table->integer('vehicle_id')->unsigned()->nullable();
            $table->string('status')->default('Pending Approval');
            $table->date('return_date')->nullable();
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
        Schema::dropIfExists('transactions');
    }
}
