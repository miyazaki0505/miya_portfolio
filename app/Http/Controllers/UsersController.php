<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Project;

class UsersController extends Controller
{
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->paginate(5);

        $languages = config('language');
        $work_locations = config('work_location');

        return view('top', [
            "projects" => $projects,
            "languages" => $languages,
            "work_locations" => $work_locations,
        ]);
    }
}
