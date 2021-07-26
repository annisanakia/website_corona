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

    public function covid19_case_create(Request $request)
    {
        $with['active'] = 2;
        return view('Home::covid19_case_create',$with);
    }

    public function covid19_case_save(Request $request)
    {
        $input = $request->all();
        $input['dirawat'] = $request->input('dirawat') != ''? $request->input('dirawat') : 0;
        $input['terkonfirmasi'] = $request->input('terkonfirmasi') != ''? $request->input('terkonfirmasi') : 0;
        $input['sembuh'] = $request->input('sembuh') != ''? $request->input('sembuh') : 0;
        $input['meninggal'] = $request->input('meninggal') != ''? $request->input('meninggal') : 0;

        $models = new App\Models\covid19_case();
        $validation = $models->validate($input);

        if ($validation->passes()) {
            $models->create($input);
            return Redirect::route('home.covid19_case');
        }
        return Redirect::route('home.covid19_case_create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    public function covid19_case_edit($id, Request $request)
    {
        $data = App\Models\covid19_case::find($id);
        $with['data'] = $data;
        $with['active'] = 2;
        return view('Home::covid19_case_edit',$with);
    }

    public function covid19_case_delete($id, Request $request)
    {
        $data = App\Models\covid19_case::find($id);
        if($data){
            $data->delete();
        }
        return Redirect::route('home.covid19_case');
    }

    public function vaccine_variant(Request $request)
    {
        $datas = App\Models\vaccine_variant::get();

        $with['datas'] = $datas;
        $with['active'] = 3;
        return view('Home::vaccine_variant',$with);
    }

    public function covid19_case_update($id, Request $request)
    {
        $input = $request->all();
        $input['dirawat'] = $request->input('dirawat') != ''? $request->input('dirawat') : 0;
        $input['terkonfirmasi'] = $request->input('terkonfirmasi') != ''? $request->input('terkonfirmasi') : 0;
        $input['sembuh'] = $request->input('sembuh') != ''? $request->input('sembuh') : 0;
        $input['meninggal'] = $request->input('meninggal') != ''? $request->input('meninggal') : 0;

        $models = new App\Models\covid19_case();
        $validation = $models->validate($input);

        if ($validation->passes()) {
            $data = $models->find($id);
            $data->update($input);
            return Redirect::route('home.covid19_case');
        }

        $with['id'] = $id;
        return Redirect::route('home.covid19_case_edit',$with)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
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