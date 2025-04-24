<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\projek;

class TemplateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function master()
    {
       return view('templating.master');
    }

    public function template_login()
    {
       return view('templating.template_login');
    }

    public function section_project()
    {
      $projek = projek::all(); 
      return view('landingPage', compact('projek'));
    }
}
