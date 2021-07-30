<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exams', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('CourseName');
            $table->text('CourseID');
            $table->text('ExamName');
            $table->text('ExamID');
            $table->text('Description');

            $table->text('qn1');
            $table->text('qn1op1');
            $table->text('qn1op2');
            $table->text('qn1op3');
            $table->text('qn1op4');
            $table->text('qn1ans');

            $table->text('qn2');
            $table->text('qn2op1');
            $table->text('qn2op2');
            $table->text('qn2op3');
            $table->text('qn2op4');
            $table->text('qn2ans');



            $table->text('qn3');
            $table->text('qn3op1');
            $table->text('qn3op2');
            $table->text('qn3op3');
            $table->text('qn3op4');
            $table->text('qn3ans');


            $table->text('qn4');
            $table->text('qn4op1');
            $table->text('qn4op2');
            $table->text('qn4op3');
            $table->text('qn4op4');
            $table->text('qn4ans');


            $table->text('qn5');
            $table->text('qn5op1');
            $table->text('qn5op2');
            $table->text('qn5op3');
            $table->text('qn5op4');
            $table->text('qn5ans');


            $table->text('qn6');
            $table->text('qn6op1');
            $table->text('qn6op2');
            $table->text('qn6op3');
            $table->text('qn6op4');
            $table->text('qn6ans');


            $table->text('qn7');
            $table->text('qn7op1');
            $table->text('qn7op2');
            $table->text('qn7op3');
            $table->text('qn7op4');
            $table->text('qn7ans');


            $table->text('qn8');
            $table->text('qn8op1');
            $table->text('qn8op2');
            $table->text('qn8op3');
            $table->text('qn8op4');
            $table->text('qn8ans');



            $table->text('qn9');
            $table->text('qn9op1');
            $table->text('qn9op2');
            $table->text('qn9op3');
            $table->text('qn9op4');
            $table->text('qn9ans');



            $table->text('qn10');
            $table->text('qn10op1');
            $table->text('qn10op2');
            $table->text('qn10op3');
            $table->text('qn10op4');
            $table->text('qn10ans');
           
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
        Schema::dropIfExists('exams');
    }
}
