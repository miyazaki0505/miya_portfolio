<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\User;
use App\Company;
use App\Skill;
use App\OtherRequirement;


class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'asc')->paginate(5);

        $languages = config('language');
        $work_locations = config('work_location');

        return view('users.top', [
            "projects" => $projects,
            "languages" => $languages,
            "work_locations" => $work_locations,
        ]);
    }

    public function show($id)
    {
        $project = Project::findOrFail($id);
        $skills = $project->skills()->get();
        $other_requirements = $project->otherRequirements()->get();
        $company = $project->company()->first();

        $languages = config('language');
        $occupations = config('occupation');
        $work_locations = config('work_location');

        $data = [
            "project" => $project,
            "languages" => $languages,
            "occupations" => $occupations,
            "work_locations" => $work_locations,
            "skills" => $skills,
            "other_requirements" => $other_requirements,
            "company" => $company,
        ];
    
        return view('projects.project_detail', $data);
    }

    public function match()
    {
        $users = \Auth::user();
        $user_last_name = $users->last_name;
        $user_work_location = $users->work_location;
        $user_occupation = $users->occupation;
        $user_language = $users->language;

        $query = Project::query();
        $query->where('work_location', $user_work_location); 
        $query->where('occupation', $user_occupation);
        $query->where('language', $user_language);
        $projects = $query->get();

        $languages = config('language');
        $work_locations = config('work_location');

        $data = [
            "users" => $users,
            "projects" => $projects,
            "user_last_name" => $user_last_name,
            "user_work_location" => $user_work_location,
            "user_occupation" => $user_occupation,
            "user_language" => $user_language,
            "languages" => $languages,
            "work_locations" => $work_locations,
        ];
    
        return view('users.match', $data);
    }
}
