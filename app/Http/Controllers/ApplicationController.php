<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Project;

class ApplicationController extends Controller
{
    public function confirm($id)
    {
        $user = \Auth::user();
        $project = Project::findOrFail($id);

        $user_last_name = $user->last_name;
        $user_first_name = $user->first_name;
        $user_last_name_ruby = $user->last_name_ruby;
        $user_first_name_ruby = $user->first_name_ruby;
        $user_birth_year = $user->birth_year;
        $user_birth_month = $user->birth_month;
        $user_birth_day = $user->birth_day;
        $user_email = $user->email;
        $user_about_myself = $user->about_myself;

        $choice_languages = config('language');
        $choice_occupations = config('occupation');
        $choice_work_locations = config('work_location');

        foreach($choice_languages as $key => $value) {
            if($key == $user->language) {
                $language = $choice_languages[$key];
                break;
            }
        }

        foreach($choice_occupations as $key => $value) {
            if($key == $user->occupation) {
                $occupation = $choice_occupations[$key];
                break;
            }
        }

        foreach($choice_work_locations as $key => $value) {
            if($key == $user->work_location) {
                $work_location = $choice_work_locations[$key];
                break;
            }
        }

        return view('projects.confirm_application', [
            'user' => $user,
            'project' => $project,
            'user_last_name' => $user_last_name,
            'user_first_name' => $user_first_name,
            'user_last_name_ruby' => $user_last_name_ruby,
            'user_first_name_ruby' => $user_first_name_ruby,
            'user_birth_year' => $user_birth_year,
            'user_birth_month' => $user_birth_month,
            'user_birth_day' => $user_birth_day,
            'user_email' => $user_email,
            'user_about_myself' => $user_about_myself,
            "language" => $language,
            "occupation" => $occupation,
            "work_location" => $work_location,
        ]);
    }

    public function store($id)
    {
        $project = Project::findOrFail($id);
        $user = \Auth::user();

        $user->apply($id);

        return redirect(config('app.url'). '/completed');
    }

    public function alreadyApply($id)
    {
        $project = Project::findOrFail($id);
        $user = \Auth::user();

        $user->alreadyApply($id);

        return redirect(config('app.url'). '/alreadyApply');
    }

    public function showApplication()
    {
        $user = \Auth::user();
        $user_last_name = $user->last_name;

        $projects = $user->applyProjects()->paginate(5);

        $choice_languages = config('language');
        $choice_work_locations = config('work_location');

        return view('projects.application_history', [
            "user_last_name" => $user_last_name,
            "projects" => $projects,
            "choice_languages" => $choice_languages,
            "choice_work_locations" => $choice_work_locations,
        ]);
    }
}
