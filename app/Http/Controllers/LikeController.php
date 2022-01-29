<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;

class LikeController extends Controller
{
    public function store(Request $request, $id)
    {
        $user = \Auth::user();
        $user_last_name = $user->last_name;

        $user->like($id);

        return redirect(config('app.url'). '/showLike');
    }

    public function destroy($id)
    {
        $user = \Auth::user();
        $user_last_name = $user->last_name;

        $user->unlike($id);

        return redirect(config('app.url'). '/showLike');
    }

    public function showLike()
    {
        $user = \Auth::user();
        $user_last_name = $user->last_name;

        $projects = $user->likeProjects()->paginate(5);

        $languages = config('language');
        $work_locations = config('work_location');

        return view('users.show_like', [
            "user_last_name" => $user_last_name,
            "projects" => $projects,
            "languages" => $languages,
            "work_locations" => $work_locations,
        ]);
    }
}
