<?php

namespace App\Listeners;

use App\Events\UserReferred;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class RewardUser
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  UserReferred  $event
     * @return void
     */
    public function handle(UserReferred $event)
    {
        //
		$referral = \App\Models\User::find($event->referralId);
		//dd($referral);
		/* if (!is_null($referral)) {
			\App\ReferralRelationship::create(['referral_link_id' => $referral->id, 'user_id' => $event->user->id]);

			// Example...
			if ($referral->program->name === 'Sign-up Bonus') {
				// User who was sharing link
				$provider = $referral->user;
				$provider->addCredits(15);
				// User who used the link
				$user = $event->user;
				$user->addCredits(20);
			}

		} */
    }
}
