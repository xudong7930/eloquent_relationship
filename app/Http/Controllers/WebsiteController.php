<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Website;

class WebsiteController extends Controller
{
    public function list()
    {
        $websites = Website::all();
        return view('website.list')->with([
            'websites' => $websites
        ]);
    }
}
