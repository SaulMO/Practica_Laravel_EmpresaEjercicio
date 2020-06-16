<?php

namespace App\Http\Controllers;

use App\Aboutus;
use App\Contacto;
use App\Portafolio;
use App\Services;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index(){
        $aboutus = Aboutus::all();
        $contacto = Contacto::all();
        $portafolio = Portafolio::all();
        $services = Services::all();
        $data = array('aboutus'=>$aboutus,
                        'contacto'=>$contacto,
                        'portafolio'=>$portafolio,
                        'services'=>$services);
        return view('home',['data'=>$data]);
    }
}
