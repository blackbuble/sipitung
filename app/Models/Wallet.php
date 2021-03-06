<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;
	protected $fillable = [
        'user_id',
        'bank_name',
		'bank_account',
		'bank_account_holder',
		'crypto_wallet',
		'actual_fund_hold',
		'actual_crypto_hold',
    ];
}
