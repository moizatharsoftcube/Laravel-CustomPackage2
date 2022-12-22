<?php

namespace moizatharsoftcube\laravelcustompackage2;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomPackageController extends Controller
{
    public function add($a, $b)
    {
        $result =  $a + $b;
        return view('laravelcustompackage2::add',compact('result'));
        /**here you need to specify your package folder name and :: with your view name */
    }
    public function sub($a, $b)
    {
        $result =  $a - $b;
        return view('laravelcustompackage2::add',compact('result'));
    }
}
