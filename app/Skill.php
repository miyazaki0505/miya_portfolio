<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
    protected $fillable = ['skill', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
