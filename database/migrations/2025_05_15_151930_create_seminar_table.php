<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeminarTable extends Migration
{
    public function up()
    {
        Schema::create('seminar', function (Blueprint $table) {
            $table->id();
            $table->string('staff_id');
            $table->string('topic');
            $table->string('department');
            $table->date('date');
            $table->time('time');
            $table->string('venue');
            $table->string('conductedby'); // 'staff' or 'student'

            // Optional details based on conductedby
            $table->string('staff_name')->nullable();
            $table->string('student_name')->nullable();
            $table->string('reg_no')->nullable();

            $table->string('image');
            $table->string('pdf');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('staff_id')
                  ->references('staff_id')
                  ->on('staff')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('seminar');
    }
}
