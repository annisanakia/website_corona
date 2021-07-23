<?php

namespace App\Modules\Home\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Validator;
use App;
use Carbon\Carbon;
use LRedis;
use Illuminate\Support\Facades\Redirect;

class Home extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function comingSoon()
    {
        return view('Home::coming_soon');
    }

    public function index(Request $request)
    {
        $with['active'] = 1;
        return view('Home::index',$with);
    }

    public function covid19_case(Request $request)
    {
        $with['active'] = 2;
        return view('Home::covid19_case',$with);
    }

    public function vaccine_variant(Request $request)
    {
        $with['active'] = 3;
        return view('Home::vaccine_variant',$with);
    }

    public function covid19_variant(Request $request)
    {
        $with['active'] = 4;
        return view('Home::covid19_variant',$with);
    }

    public function founder(Request $request)
    {
        $with['active'] = 5;
        return view('Home::founder',$with);
    }
    
}