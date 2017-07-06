<?php

namespace Mrobles\Core;

use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class GenericoController extends Controller
{

    public function index($timezone = null)
    {
        $time = ( $timezone ) ? Carbon::now(str_replace('-', '/', $timezone)) : Carbon::now();

        return view('vistas::test', compact('time'));
    }
}
