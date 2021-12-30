<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Company;
use App\Skill;
use App\OtherRequirement;


class ProjectsController extends Controller
{
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
}
