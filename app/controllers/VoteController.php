<?php

class VoteController extends BaseController {

    public function getMyBallot() {

        //$options = Options::where('active', '=', 1)->get();
        //return View::make('ballot.newBallot')->withoptions($options);
        return View::make('ballot.newBallot');
    }

    public function postMyBallot() {

        $choice = Input::get('choice');

        $options = Options::where('id', '=', $choice);

        if ($options->count()) {
            $options = $options->first();
        }

        $options->counter = $options->counter + 1;

        if ($options->save()) {

            //send email
//            Mail::send('emails.auth.recover', array('link' => URL::route('account-recover', $code), 'username' => $user->username, 'password' => $password), function($message) use ($user) {
//                $message->to($user->email, $user->username)->subject('Change Password for Your Account');
//            });
            return Redirect::route('home')
                            ->with('global', 'Thank you For Voting.');
        }
    }

}
