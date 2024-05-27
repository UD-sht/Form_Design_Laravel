<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CreateFormModel extends Model
{
    use HasFactory;
    protected $table = "form";
    protected $primaryKey = "id";
    protected $fillable = [
        'name',
        'father_name',
        'mother_name',
        'parent_address',
        'age',
        'passport_number',
        'issuing_country',
        'issuing_office',
        'issuing_place',
        'passport_issue_date',
        'valid_period',
        'attached_file',
        
        'renounced_citizenship_number',
        'renounced_citizenship_district',
        'renounced_date',
        'relative_name',
        'relative_address',
        'relationship',
        'nepali_citizen_name',
        'nepali_citizen_address',
        'nepali_citizen_number',
        'residing_country_name',
        'residing_start_date',
        'occupation_details',
        'existing_occupation',
        'annual_income',
        'acquired_knowledge',
        'investment_sector',
        'investment_value',
        // Add other fields as needed
    ];
}
