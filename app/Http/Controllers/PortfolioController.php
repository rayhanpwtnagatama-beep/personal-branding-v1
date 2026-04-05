<?php
namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\Experience;

class PortfolioController extends Controller {
    public function index() {
        $projects = Project::all();
        $experiences = Experience::all();
        return view('welcome', compact('projects', 'experiences'));
    }
}