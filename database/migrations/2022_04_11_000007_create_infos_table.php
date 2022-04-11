<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfosTable extends Migration
{
    public function up()
    {
        Schema::create('infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_of_tasks')->nullable();
            $table->string('description_of_tasks')->nullable();
            $table->string('name_created_by')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }
}
