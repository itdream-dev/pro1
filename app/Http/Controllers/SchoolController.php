<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\School;
use App\User;
use App\Generalsetting;
use Auth;
use App\Http\Controllers\Rpc\jsonRPCClient;
use Log;

class SchoolController extends Controller
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
    public function index()
    {

        return view('index', [
          'page' => 'Index'
        ]);
    }

    public function schools(Request $request)
    {
        $query = $request->input('query');
        if ($query == "") return '';
        $schools = School::where('name', 'like', '%'.$query.'%')->limit(20)->get();
        $res = '';
        if(!empty($schools)) {
        $res = '<ul id="country-list">';
        foreach($schools as $school) {
          $res = $res.'<li onClick="selectSchool('.$school->name.');">'.$school->name.'</li>';
        }
        $res = $res.'</ul>';
        }
        return $res;
    }
}
