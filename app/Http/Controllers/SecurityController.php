<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurityController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function security_center()
    {
        return view('security_center', [
          'page' => 'Security Center'
        ]);
    }
}
