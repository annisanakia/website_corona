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
        $terkonfirmasi = App\Models\covid19_case::sum('terkonfirmasi');
        $dirawat = App\Models\covid19_case::sum('dirawat');
        $sembuh = App\Models\covid19_case::sum('sembuh');
        $meninggal = App\Models\covid19_case::sum('meninggal');

        $with['active'] = 1;
        $with['terkonfirmasi'] = $terkonfirmasi;
        $with['dirawat'] = $dirawat;
        $with['sembuh'] = $sembuh;
        $with['meninggal'] = $meninggal;
        return view('Home::index',$with);
    }

    public function covid19_case(Request $request)
    {
        $datas = App\Models\covid19_case::get();

        $terkonfirmasi = App\Models\covid19_case::sum('terkonfirmasi');
        $dirawat = App\Models\covid19_case::sum('dirawat');
        $sembuh = App\Models\covid19_case::sum('sembuh');
        $meninggal = App\Models\covid19_case::sum('meninggal');

        $with['active'] = 2;
        $with['datas'] = $datas;
        $with['terkonfirmasi'] = $terkonfirmasi;
        $with['dirawat'] = $dirawat;
        $with['sembuh'] = $sembuh;
        $with['meninggal'] = $meninggal;
        return view('Home::covid19_case',$with);
    }

    public function vaccine_variant(Request $request)
    {
        $datas = App\Models\vaccine_variant::get();

        $with['datas'] = $datas;
        $with['active'] = 3;
        return view('Home::vaccine_variant',$with);
    }

    public function covid19_variant(Request $request)
    {
        $datas = App\Models\covid19_variant::get();

        $with['datas'] = $datas;
        $with['active'] = 4;
        return view('Home::covid19_variant',$with);
    }

    public function founder(Request $request)
    {
        $with['active'] = 5;
        return view('Home::founder',$with);
    }
    
}