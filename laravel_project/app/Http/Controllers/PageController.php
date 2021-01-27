<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        Project::query()->create([
            'title'=> 'project one',
            'description'=> 'Description about project one'
        ]);
        Project::query()->create([
            'title'=> 'project two',
            'description'=> 'Description about project two'
        ]);
        Project::query()->create([
            'title'=> 'project three',
            'description'=> 'Description about project three'
        ]);
        Project::where('description','Description about project two')->update([
            'description'=>'Description after updating'
        ]);
        Project::where('title','project three')-> delete();

        dd(Project::all());
       return "Home from Controller";
    }
}
