<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('father_name',60);
            $table->string('mother_name',60);
            $table->string('parent_address');
            $table->unsignedInteger('age');
            $table->string('passport_number');
            $table->string('issuing_country');
            $table->string('issuing_office');
            $table->string('issuing_place');
            $table->date('passport_issue_date');
            $table->date('valid_period');
            $table->string('attached_file');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
