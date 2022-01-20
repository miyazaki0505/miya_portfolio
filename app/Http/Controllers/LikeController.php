<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;

class LikeController extends Controller
{
    public function store(Request $request, $id)
    {
        $users = \Auth::user();
        $user_last_name = $users->last_name;

        $users->like($id);

        $projects = $users->likes()->get();
        $projects_count = count($projects);

        if($projects_count > 5) {
            $projects = $users->likes()->orderBy('id', 'asc')->paginate(5);
        }

        $languages = config('language');
        $work_locations = config('work_location');

        return view('users.show_like', [
            "user_last_name" => $user_last_name,
            "projects" => $projects,
            "projects_count" => $projects_count,
            "languages" => $languages,
            "work_locations" => $work_locations,
        ]);
    }

    public function destroy($id)
    {
        $users = \Auth::user();
        $user_last_name = $users->last_name;

        $users->unlike($id);

        $projects = $users->likes()->get();
        $projects_count = count($projects);

        if($projects_count > 5) {
            $projects = $users->likes()->orderBy('id', 'asc')->paginate(5);
        }

        $languages = config('language');
        $work_locations = config('work_location');

        return view('users.show_like', [
            "user_last_name" => $user_last_name,
            "projects" => $projects,
            "projects_count" => $projects_count,
            "languages" => $languages,
            "work_locations" => $work_locations,
        ]);
    }

    public function showLike()
    {
        $users = \Auth::user();
        $user_last_name = $users->last_name;

        $projects = $users->likes()->get();
        $projects_count = count($projects);

        if($projects_count > 5) {
            $projects = $users->likes()->orderBy('id', 'asc')->paginate(5);
        }

        $languages = config('language');
        $work_locations = config('work_location');

        return view('users.show_like', [
            "user_last_name" => $user_last_name,
            "projects" => $projects,
            "projects_count" => $projects_count,
            "languages" => $languages,
            "work_locations" => $work_locations,
        ]);
    }
}
