<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',20);
            $table->string('lastname',20);
            $table->string('email',150);
            $table->string('password',150);
        });
        // Schema::create('premiumMember', function (Blueprint $table) {
        //     $table->increments('id');
        //     $table->string('firstname',20);
        //     $table->string('lastname',20);
        //     $table->string('email',150);
        //     $table->string('password',20);
        // });
        Schema::create('transaction', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('cardNumber',16);
            $table->string('typeOfpayment');
            $table->year('expired');
            $table->unsignedInteger('CVV');

            $table->foreign('id')->references('id')->on('member')
                ->onDelete('restrict')->onUpdate('restrict');
        });
        Schema::create('telNumber', function (Blueprint $table) {
            $table->unsignedInteger('id');
            $table->string('telNumber',10);

            $table->foreign('id')->references('id')->on('member')
                ->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('member');
        Schema::dropIfExists('transaction');
        Schema::dropIfExists('telNumber');
    }
}
