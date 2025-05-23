<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    public function up()
    {
        // staff table migration
        Schema::create('staff', function (Blueprint $table) {
    $table->id(); 
    $table->string('staff_id')->unique();
    $table->string('name');
    $table->string('email')->unique();
    $table->string('password');
    $table->timestamps();
});
    }

    public function down()
    {
        Schema::dropIfExists('staff');
    }
}
