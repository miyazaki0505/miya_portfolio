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

    public function likes()
    {
        return $this->belongsToMany(Project::class, 'likes', 'user_id', 'project_id')->withTimestamps();
    }

    public function is_liking($projectId)
    {
        return $this->likes()->where('project_id', $projectId)->exists();
    }

    public function like($projectId)
    {
        $exist = $this->is_liking($projectId);

        if(!$exist) { 
            $this->likes()->attach($projectId);
        }
    }

    public function unlike($projectId)
    {
        $exist = $this->is_liking($projectId);

        if ($exist) {
            $this->likes()->detach($projectId);
        }
    }
}
