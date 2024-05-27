<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('form', function (Blueprint $table) {
            $table->id();
            $table->string('name', 60);
            $table->string('father_name',60);
            $table->string('mother_name',60);
            $table->string('parent_address');
            $table->integer('age');
            $table->string('passport_number');
            $table->string('issuing_country');
            $table->string('issuing_office');
            $table->string('issuing_place');
            $table->date('passport_issue_date');
            $table->date('valid_period');
            $table->string('attached_file');  
            
            $table->string('renounced_citizenship_number')->nullable();
            $table->string('renounced_citizenship_district')->nullable();
            $table->string('renounced_date')->nullable();
            $table->string('relative_name',60)->nullable();
            $table->text('relative_address')->nullable();
            $table->string('relationship',60)->nullable();
            $table->string('nepali_citizen_name',60)->nullable();
            $table->text('nepali_citizen_address')->nullable();
            $table->string('nepali_citizen_number')->nullable();
            $table->text('residing_country_name')->nullable();
            $table->string('residing_start_date')->nullable();
            $table->text('occupation_details')->nullable();
            $table->string('existing_occupation')->nullable();
            $table->decimal('annual_income',8,2)->nullable();
            $table->text('acquired_knowledge')->nullable();
            $table->string('investment_sector')->nullable();
            $table->integer('investment_value')->nullable();

            $table->timestamps();
            
        });

        DB::statement('ALTER TABLE form AUTO_INCREMENT = 1');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form');
    }
};
