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
        // 'father_name', 'mother_name', 
        // 'parent_address', 'age', 'passport_number',
        // 'issuing_country', 'issuing_office', 'issuing_place', 'passport_issue_date',
        // 'valid_period', 'attached_file',

        // Add other fields as needed
    ];
}
