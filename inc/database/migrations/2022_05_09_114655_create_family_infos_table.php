<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFamilyInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('family_infos', function (Blueprint $table) {
            $table->id();
            $table->string('number');
            $table->string('father_name');
            $table->string('father_occupation');
            $table->string('father_nid')->nullable();
            $table->string('father_mobile');
            $table->string('father_email')->nullable();
            $table->string('mother_name');
            $table->string('mother_occupation');
            $table->string('mother_nid')->nullable();
            $table->string('mother_mobile');
            $table->string('mother_email')->nullable();
            $table->string('brothers');
            $table->string('sisters');
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
        Schema::dropIfExists('family_infos');
    }
}
