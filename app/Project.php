<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'project_name',
        'work_location',
        'unit_price',
        'occupation',
        'language',
        'work_content',
        'company_id',
    ];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function skills()
    {
        return $this->hasMany(Skill::class);
    }

    public function otherRequirements()
    {
        return $this->hasMany(OtherRequirement::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'likeProjects', 'project_id', 'user_id')->withTimestamps();
    }

    public function appliedUsers()
    {
        return $this->belongsToMany(User::class, 'applications', 'project_id', 'user_id')->withTimestamps();
    }
}
