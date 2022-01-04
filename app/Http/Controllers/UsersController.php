<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;
use App\User;

class UsersController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->paginate(5);
        $languages = config('language');
        $work_locations = config('work_location');

        return view('users.top', [
            "projects" => $projects,
            "languages" => $languages,
            "work_locations" => $work_locations,
        ]);
    }

    public function match()
    {
        $projects = Project::orderBy('id', 'desc')->paginate(5);
        $users = User::all();
        $languages = config('language');
        $work_locations = config('work_location');

        return view('users.match', [
            "projects" => $projects,
            "users" => $users,
            "languages" => $languages,
            "work_locations" => $work_locations,
        ]);
    }
}
