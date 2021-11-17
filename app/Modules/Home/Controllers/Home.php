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

    public function index(Request $request)
    {
        //total data terkonfirmasi penyebaran covid-19
        $terkonfirmasi = App\Models\covid19_case::sum('terkonfirmasi');
        //total data dirawat penyebaran covid-19
        $dirawat = App\Models\covid19_case::sum('dirawat');
        //total data sembuh penyebaran covid-19
        $sembuh = App\Models\covid19_case::sum('sembuh');
        //total data meninggal penyebaran covid-19
        $meninggal = App\Models\covid19_case::sum('meninggal');

        $with['active'] = 1; //menu navbar atas
        $with['terkonfirmasi'] = $terkonfirmasi;
        $with['dirawat'] = $dirawat;
        $with['sembuh'] = $sembuh;
        $with['meninggal'] = $meninggal;
        return view('Home::index',$with);
    }

    //list data penyebaran
    public function covid19_case(Request $request)
    {
        //list data penyebaran covid-19
        $datas = App\Models\covid19_case::get();

        //total data terkonfirmasi penyebaran covid-19
        $terkonfirmasi = App\Models\covid19_case::sum('terkonfirmasi');
        //total data dirawat penyebaran covid-19
        $dirawat = App\Models\covid19_case::sum('dirawat');
        //total data sembuh penyebaran covid-19
        $sembuh = App\Models\covid19_case::sum('sembuh');
        //total data meninggal penyebaran covid-19
        $meninggal = App\Models\covid19_case::sum('meninggal');

        $with['active'] = 2;
        $with['datas'] = $datas;
        $with['terkonfirmasi'] = $terkonfirmasi;
        $with['dirawat'] = $dirawat;
        $with['sembuh'] = $sembuh;
        $with['meninggal'] = $meninggal;
        return view('Home::covid19_case',$with);
    }

    //kehalaman form tambah data penyebaran
    public function covid19_case_create(Request $request)
    {
        $with['active'] = 2;
        return view('Home::covid19_case_create',$with);
    }

    public function covid19_case_save(Request $request)
    {
        //mengambil semua data inputan
        $input = $request->all();

        //set default dirawat 0 kalau kosong
        $input['dirawat'] = $request->input('dirawat') != ''? $request->input('dirawat') : 0;
        //set default terkonfirmasi 0 kalau kosong
        $input['terkonfirmasi'] = $request->input('terkonfirmasi') != ''? $request->input('terkonfirmasi') : 0;
        //set default sembuh 0 kalau kosong
        $input['sembuh'] = $request->input('sembuh') != ''? $request->input('sembuh') : 0;
        //set default meninggal 0 kalau kosong
        $input['meninggal'] = $request->input('meninggal') != ''? $request->input('meninggal') : 0;

        //get model database covid19_case
        $models = new App\Models\covid19_case();
        $validation = $models->validate($input);

        //kalau validasi sukses
        if ($validation->passes()) {
            $models->create($input); // simpan data
            return Redirect::route('home.covid19_case'); //redirect ke halaman penyebaran covid
        }

        //redirect ke halaman tambah data penyebaran covid saat validasi gagal
        return Redirect::route('home.covid19_case_create')
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    //kehalaman form edit data penyebaran
    public function covid19_case_edit($id, Request $request)
    {
        $data = App\Models\covid19_case::find($id);
        $with['data'] = $data;
        $with['active'] = 2;
        return view('Home::covid19_case_edit',$with);
    }

    public function covid19_case_update($id, Request $request)
    {
        //mengambil semua data inputan
        $input = $request->all();

        //set default dirawat 0 kalau kosong
        $input['dirawat'] = $request->input('dirawat') != ''? $request->input('dirawat') : 0;
        //set default terkonfirmasi 0 kalau kosong
        $input['terkonfirmasi'] = $request->input('terkonfirmasi') != ''? $request->input('terkonfirmasi') : 0;
        //set default sembuh 0 kalau kosong
        $input['sembuh'] = $request->input('sembuh') != ''? $request->input('sembuh') : 0;
        //set default meninggal 0 kalau kosong
        $input['meninggal'] = $request->input('meninggal') != ''? $request->input('meninggal') : 0;

        //get model database covid19_case
        $models = new App\Models\covid19_case();
        $validation = $models->validate($input);

        //kalau validasi sukses
        if ($validation->passes()) {
            $data = $models->find($id); // get data berdasarkan id
            $data->update($input); // update data
            return Redirect::route('home.covid19_case'); //redirect ke halaman penyebaran covid
        }

        //redirect ke halaman edit data penyebaran covid saat validasi gagal
        $with['id'] = $id;
        return Redirect::route('home.covid19_case_edit',$with)
            ->withInput()
            ->withErrors($validation)
            ->with('message', 'There were validation errors.');
    }

    //fungsi hapus data penyebaran berdasarkan id
    public function covid19_case_delete($id, Request $request)
    {
        $data = App\Models\covid19_case::find($id);
        if($data){
            $data->delete();
        }
        return Redirect::route('home.covid19_case');
    }

    // list data variasi vaksin
    public function vaccine_variant(Request $request)
    {
        $datas = App\Models\vaccine_variant::get(); //get data jenis vaksin covid-19

        $with['datas'] = $datas;
        $with['active'] = 3;
        return view('Home::vaccine_variant',$with);
    }

    // list data variasi covid-19
    public function covid19_variant(Request $request)
    {
        $datas = App\Models\covid19_variant::get(); //get data varian covid-19

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