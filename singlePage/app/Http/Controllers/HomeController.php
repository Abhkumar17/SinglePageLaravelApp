<?php

namespace App\Http\Controllers;
use App\Http\Models\Home;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $data = Contact::simplePaginate(5);
        return view('home',['data'=>$data]);
    }
    
}
