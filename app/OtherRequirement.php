<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OtherRequirement extends Model
{
    protected $fillable = ['other_requirement', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    } 
}
