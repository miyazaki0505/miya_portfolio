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

    public function searchInput(Request $request)
    {
        $search_work_location = $request->input('work_location');
        $search_occupation = $request->input('occupation');
        $search_language = $request->input('language');
        $search_unit_price = $request->input('unit_price');
        $search_keyword = $request->input('keyword');

        $old_work_location = $request->session()->get("old_work_location");
        $old_occupation = $request->session()->get("old_occupation");
        $old_language = $request->session()->get("old_language");
        $old_unit_price = $request->session()->get("old_unit_price");
        $old_keyword = $request->session()->get("old_keyword");

        $request->session()->flush();

        $languages = config('language');
        $occupations = config('occupation');
        $work_locations = config('work_location');

        $data = [
            "search_keyword" => $search_keyword,
            "languages" => $languages,
            "occupations" => $occupations,
            "work_locations" => $work_locations,
            "old_work_location" => $old_work_location,
            "old_occupation" => $old_occupation,
            "old_language" => $old_language,
            "old_unit_price" => $old_unit_price,
            "old_keyword" => $old_keyword,
        ];

        return view('projects.search_input', $data);
    }

    public function search(Request $request)
    {
        $search_work_location = $request->input('work_location');
        $search_occupation = $request->input('occupation');
        $search_language = $request->input('language');
        $search_unit_price = $request->input('unit_price');
        $search_keyword = $request->input('keyword');

        $query = Project::query();
        
        if (!is_null($search_work_location) && $search_work_location != 0) {
            $query->where('work_location', $search_work_location)->get();
        }

        if (!is_null($search_occupation) && $search_occupation != 0) {
            $query->where('occupation', $search_occupation)->get();
        }

        if (!is_null($search_language) && $search_language != 0) {
            $query->where('language', $search_language)->get();
        }

        if (!is_null($search_unit_price)) {
            $query->where('unit_price', '>=', $search_unit_price)->get();
        }

        if (!is_null($search_keyword)) {
            $query->where(function ($query) use ($search_keyword) {
                $query->where('project_name', 'like', '%' . self::escapeLike($search_keyword) . '%')
                    ->orWhere('work_content', 'like', '%' . self::escapeLike($search_keyword) . '%');
            });
        }

        $projects = $query->orderBy('id', 'asc')->paginate(5);

        $languages = config('language');
        $occupations = config('occupation');
        $work_locations = config('work_location');

        $request->session()->put("old_work_location", $search_work_location);
        $request->session()->put("old_occupation", $search_occupation);
        $request->session()->put("old_language", $search_language);
        $request->session()->put("old_unit_price", $search_unit_price);
        $request->session()->put("old_keyword", $search_keyword);
        
        $old_work_location = $request->session()->get("old_work_location");
        $old_occupation = $request->session()->get("old_occupation");
        $old_language = $request->session()->get("old_language");
        $old_unit_price = $request->session()->get("old_unit_price");
        $old_keyword = $request->session()->get("old_keyword");
        
        if ($request->get('back')){
            return redirect('/searchInput')->withInput([
                $old_work_location, 
                $old_occupation, 
                $old_language, 
                $old_unit_price, 
                $old_keyword,
            ]);
        }

        $data = [
            "search_work_location" => $search_work_location,
            "search_occupation" => $search_occupation,
            "search_language" => $search_language,
            "search_unit_price" => $search_unit_price,
            "search_keyword" => $search_keyword,
            "projects" => $projects,
            "search_keyword" => $search_keyword,
            "languages" => $languages,
            "occupations" => $occupations,
            "work_locations" => $work_locations,
            "old_work_location" => $old_work_location,
            "old_occupation" => $old_occupation,
            "old_language" => $old_language,
            "old_unit_price" => $old_unit_price,
            "old_keyword" => $old_keyword,
        ];

        return view('projects.search', $data);
    }

    public static function escapeLike($str)
    {
        return str_replace(['\\', '%', '_'], ['\\\\', '\%', '\_'], $str);
    }

}
