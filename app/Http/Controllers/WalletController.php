<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Wallet;
use App\User;
use App\Generalsetting;
use Auth;
use App\Http\Controllers\Rpc\jsonRPCClient;
use Log;
class WalletController extends Controller
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
    public function wallet()
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
        return view('wallet', [
          'page' => 'My Wallet',
          'balance' => $balance,
          'wallet' => $wallet
        ]);
    }

    public function postSend(Request $request){
      $send_amount = $request->input('send_amount');
      $send_address = $request->input('send_address');

      $user = Auth::user();
      $codeList = Generalsetting::all();
      $settings = [];
      for($i = 0; $i < count($codeList); $i++) {
        $settings[$codeList[$i]["name"]] = $codeList[$i]["value"];
      }
      $client = new jsonRPCClient('http://'.$settings['rpcuser'].':'.$settings['rpcpassword'].'@'.$settings['rpcip'].':'.$settings['rpcport'].'/');
      Log::info($user->id);
      Log::info($send_address);
      Log::info($send_amount);
      $res = $client->sendfrom("7", "CNRS3mphFEKGPoMY4oRd6XnZRfP2AS551W", 10);
      Log::info($res);
      return $res;
    }
}
