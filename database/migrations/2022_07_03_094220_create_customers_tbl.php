<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_customers', function (Blueprint $table) {
            $table->id();
            $table->string('cus_title');
            $table->string('fname');
            $table->string('lname');
            $table->date('dob');
            $table->string('nic');
            $table->string('add_line01');
            $table->string('add_line02');
            $table->string('district');
            $table->string('zipcode');
            $table->string('cus_phone_number');
            $table->string('cus_email');
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
        Schema::dropIfExists('tbl_customers');
    }
};
