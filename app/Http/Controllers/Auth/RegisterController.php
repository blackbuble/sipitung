<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Auth\Events\Registered;

use App\Notifications\ReferrerBonus;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Str;
use App\Models\UserComission;
use App\Mail\RegistrationMail;
use Illuminate\Support\Facades\Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;
	const REGISTER = 1500000;
	const PER_BONUS = 10;
	const PER_LEVEL = 2;
	const LEVEL = 0;
    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Show the application registration form.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm(Request $request)
    {
        if ($request->has('ref')) {
            session(['referrer' => $request->query('ref')]);
        }

        return view('auth.register');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            //'username' => ['required', 'string', 'unique:users', 'alpha_dash', 'min:3', 'max:30'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $referrer = User::whereUsername(session()->pull('referrer'))->first();
		
		if($referrer != null){
			$join = self::REGISTER*(self::PER_BONUS/100);	
			$bonus = self::REGISTER*(self::PER_LEVEL/100);	
			$level = $referrer->level+1;
			//join array
			$user_sponsor = User::where(['id' => $referrer->id])->first();
					//dd($user_sponsor);
			if ($user_sponsor->level <1){
				$sponsor = $referrer->id;	
				$total_sponsor = count([$sponsor]);
			}else{
				
				$sponsor = ltrim($user_sponsor->sponsor .','. $referrer->id,',');
				$total_sponsor = count([$sponsor]);
				
			}
			
			//$sponsor =  $user;
		}else{
			$level = 0;
			$join = 0;
			$sponsor = null;
		}
		
         $user = User::create([
			'name'        => $data['name'],
            //'username'    => $data['username'],
            'username'    => Str::random(6),
            'email'       => $data['email'],
            'referrer_id' => $referrer ? $referrer->id : null,
            'password'    => Hash::make($data['password']),
			'level'		  => $level,	
			'sponsor'	  => $sponsor,
        ]);
		
		if($join != 0){
		$bonus_level = UserComission::create([
				'user_id' 	=> $referrer->id,	
				'from_id' 	=> $user->id,	
				'note' 		=> 'Join Bonus',
				'amount' 	=> $join,
		]);
		//dd($total_sponsor);
		if($user->level > 1 ){
		
		
			$my_sponsor = preg_replace ( '/,[0-9\.]*$/' , '' , $sponsor);
			$elements = explode(",", $my_sponsor);
			//dd($elements);
				foreach($elements as $element) {
					$join_level = new UserComission();
					$join_level->user_id 	= $element;
					$join_level->from_id 	= $user->id;
					$join_level->note 		= 'Bonus Level';
					$join_level->amount 	= $bonus;
					$join_level->save();	
				}  
		}
		
		
		}
		
		$valid = self::REGISTER+rand(1000,10000);
		
		$title = "Selamat Bergabung dengan komunitas SiPitung";
		$maildata =  ['name' => $user->name, 'email' => $user->email, 'valid' => $valid];
		
		//event(new \App\Events\UserReferred(request()->cookie('ref'), $user));
		Mail::to($user->email)->send(new RegistrationMail($title,$maildata));
		return $user;
    }

    /**
     * The user has been registered.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  mixed  $user
     * @return mixed
     */
    protected function registered(Request $request, $user)
    {
        if ($user->referrer !== null) {
            Notification::send($user->referrer, new ReferrerBonus($user));
        }

        return redirect($this->redirectPath());
    }
	
	public function register(Request $request)
    {
        $this->validator($request->all())->validate();
 
        event(new Registered($user = $this->create($request->all())));
 
       /*  return $this->registered($request, $user)
            ?: redirect($this->redirectPath()); */
		$request->session()->flash('notification', 'Thank you for subscribing!');	
		//session()->flash('success', 'You have Successfully Registered'); 
		return redirect('/login');
	
    }
}
