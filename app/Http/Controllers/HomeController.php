<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserComission;
Use Auth;
use GuzzleHttp\Client;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
		$userId = Auth::id();
		$total_comission = UserComission::where(['user_id' => $userId])->sum('amount');
		$join_comission = UserComission::where(['user_id' => $userId, 'note' => 'Join Bonus'])->sum('amount');
		$bonus_comission = UserComission::where(['user_id' => $userId, 'note' => 'Bonus Level'])->sum('amount');
		$btc = $this->getBTCPrice();
			
        return view('home', compact('total_comission','join_comission','bonus_comission','btc'));
    }
	
	public function getBTCPrice() {
		$client = new Client(['timeout'  => 10,'connect_timeout' => 10]);
        $url = "https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC,ETH,XRP,NFT&tsyms=USD";
		$headers = [
            'Apikey' => '00c8eb7d8575ef283ffc2baf2d0d7e9e78f89b1aba7001359bd7d22a8397650c'
        ];

        $response = $client->request('GET', $url, [
            // 'json' => $params,
            'headers' => $headers,
            //'verify'  => false,
        ]);

        $responseBody = json_decode($response->getBody());
		return $responseBody;
		//dd($responseBody);
	}
	
	
}
