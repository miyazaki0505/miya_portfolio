<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'last_name',
        'first_name',
        'last_name_ruby',
        'first_name_ruby',
        'birth_year',
        'birth_month',
        'birth_day',
        'email',
        'password',
        'work_location',
        'occupation',
        'language',
        'about_myself',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function likeProjects()
    {
        return $this
        ->belongsToMany(Project::class, 'likeProjects', 'user_id', 'project_id')->withTimestamps()
        ->withPivot('id')
        ->orderBy('likeProjects.id', 'desc');
    }

    public function isLiking($projectId)
    {
        return $this->likeProjects()->where('project_id', $projectId)->exists();
    }

    public function like($projectId)
    {
        $exist = $this->isLiking($projectId);

        if(!$exist) { 
            $this->likeProjects()->attach($projectId);
        }
    }

    public function unlike($projectId)
    {
        $exist = $this->isLiking($projectId);

        if ($exist) {
            $this->likeProjects()->detach($projectId);
        }
    }

    public function applyProjects()
    {
        return $this->belongsToMany(Project::class, 'applications', 'user_id', 'project_id')->withTimestamps()
        ->withPivot('id')
        ->orderBy('applications.id', 'desc');
    }

    public function isApplying($projectId)
    {
        return $this->applyProjects()->where('project_id', $projectId)->exists();
    }

    public function apply($projectId)
    {
        $exist = $this->isApplying($projectId);

        if(!$exist) { 
            $this->applyProjects()->attach($projectId);
        }
    }

    public function alreadyApply($projectId)
    {
        $exist = $this->isApplying($projectId);

        if($exist) {
            return view('projects.already_applied');
        }
    }
}
