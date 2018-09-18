<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallet;
use App\User;
use App\Generalsetting;
use Auth;
use App\Http\Controllers\Rpc\jsonRPCClient;
use Log;
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
      $user = Auth::user();
      $wallet = Wallet::where('user_id', $user->id)->first();
      $codeList = Generalsetting::all();
      $settings = [];
      for($i = 0; $i < count($codeList); $i++) {
        $settings[$codeList[$i]["name"]] = $codeList[$i]["value"];
      }

      $client = new jsonRPCClient('http://'.$settings['rpcuser'].':'.$settings['rpcpassword'].'@'.$settings['rpcip'].':'.$settings['rpcport'].'/');
      $addresses = $client->listaddressgroupings();
      $balance = 0;
      foreach ($addresses as $item) {
      foreach ($item as $address){
        if ( $address[0] == $wallet->address){
          $balance = $address[1];
        }
      }
      }
        return view('security_center', [
          'page' => 'Security Center',
          'balance' => $balance,
          'wallet' => $wallet
        ]);
    }
}
