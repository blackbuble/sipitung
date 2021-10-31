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
		$eth = $this->getETHPrice();
		$xrp = $this->getXRPPrice();
		$nft = $this->getNFTPrice();
		
		//dd($nft);
		
        return view('home', compact('total_comission','join_comission','bonus_comission','btc','eth','xrp','nft'));
    }
	
	public function getBTCPrice() {
		$client = new Client();
        $url = "https://min-api.cryptocompare.com/data/pricemultifull?fsyms=BTC&tsyms=USD";
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
	
	public function getETHPrice() {
		$client = new Client();
        $url = "https://min-api.cryptocompare.com/data/pricemultifull?fsyms=ETH&tsyms=USD";
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
	
	public function getXRPPrice() {
		$client = new Client();
        $url = "https://min-api.cryptocompare.com/data/pricemultifull?fsyms=XRP&tsyms=USD";
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
	
	public function getNFTPrice() {
		$client = new Client();
        $url = "https://min-api.cryptocompare.com/data/pricemultifull?fsyms=NFT&tsyms=USD";
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
