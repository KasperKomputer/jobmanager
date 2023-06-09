<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->dateTime('start')->nullable();
            $table->dateTime('end')->nullable();
            $table->string('description')->nullable();
            $table->string('category_color')->nullable();
            $table->boolean('recurring')->default(false);
            $table->string('recurring_id')->nullable();
            $table->string('taskFrequency')->nullable();
            $table->date('taskEndDate')->nullable();
            $table->boolean('calendar_task')->default(false);

            $table->unsignedInteger('fk_company')->unsigned()->nullable();
            $table->string('fk_contract')->nullable();
            $table->unsignedInteger('fk_user')->unsigned()->nullable();
            $table->boolean('completed')->default(false);
            $table->date('execution_date')->nullable();
            $table->unsignedInteger('execution_user')->unsigned()->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tasks');
    }
}
