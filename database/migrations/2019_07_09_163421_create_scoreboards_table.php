<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateScoreboardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('scoreboards', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('CourseName');
            $table->string('UserEmail');
            $table->text('Courserating');
            $table->text('CourseComment');
            $table->string('UserID');
            $table->string('UserName');
            $table->string('Score');
            $table->string('Mark');
            $table->string('CourseID');
            $table->string('ExamName');
            $table->string('ExamID');
           

            

            $table->timestamp('created_at')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('scoreboards');
    }
}
