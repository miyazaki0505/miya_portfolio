<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        'company_name',
        'business_content',
        'employee_number',
        'found_year',
        'capital',
        'representative_name',
    ];

    public function projects()
    {
        return $this->hasMany(Project::class);
    }
}
