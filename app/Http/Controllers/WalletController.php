<?php

namespace App\Http\Controllers;

use App\Models\Wallet;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class WalletController extends Controller
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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nft = $this->getNFTPrice();
		$sell = number_format($nft->RAW->NFT->IDR->PRICE-($nft->RAW->NFT->IDR->PRICE*5/100),8);
		$buy = number_format($nft->RAW->NFT->IDR->PRICE+($nft->RAW->NFT->IDR->PRICE*5/100),8);
		//dd($sell);
		return view('wallet', compact(['nft', 'sell', 'buy']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function show(Wallet $wallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function edit(Wallet $wallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wallet $wallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wallet  $wallet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wallet $wallet)
    {
        //
    }
	
	public function getNFTPrice() {
		$client = new Client(['timeout'  => 10,'connect_timeout' => 10]);
        $url = "https://min-api.cryptocompare.com/data/pricemultifull?fsyms=NFT&tsyms=IDR";
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
