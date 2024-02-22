<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){
    
    $projects =  Project::with('technologies','type')->paginate(2); //with//paginazione per n elementi che io voglio
    
    return response()->json($projects);

    }


    public function show(Project $project){

        $projects = Project::all();
        
        return response()->json(
            [
                "success"=>true,
                "results"=> $project
            ]);
    
        }
}

