<?php
/**
 * Created by PhpStorm.
 * User: summmmit
 * Date: 1/28/2015
 * Time: 3:04 PM
 */

class FormalController extends BaseController {
    
    public function getCreate(){
       return View::make('account.account');
    }

    public function postCreate(){
        $validator = Validator::make(Input::all(),
            array(
                'email' => 'required|max:50|email|unique:users',
                'username' => 'required|max:20|min:3|unique:users'
            )
        );
        if($validator->fails()){
            return Redirect::route('account-create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $email            = Input::get('email');
            $username         = Input::get('username');

            //Activation COde
            $code = str_random(60);

            $create = User::create(array(
                'email'    => $email,
                'username' => $username,
                'code'     => $code,
                'active'   => 0
            ));

            if($create){

                //send email
//                Mail::send('emails.auth.activate', array('link' => URL::route('account-activate', $code), 'username' => $username), function($message) use ($create){
//                    $message->to($create->email, $create->username)->subject('Activate Your Account');
//                });
                return Redirect::route('home')
                    ->with('global' , 'Your account has been createde u can activate now');
            }else{

                return Redirect::route('home')
                    ->with('global', 'Cant create your Account. Try Later');
            }
        }
    }
} 