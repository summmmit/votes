<?php

class NewAccountController extends BaseController {
    
    public function getCreate(){
       return View::make('account.newAccount');
    }
    
    public function postCreate(){

        $validator = Validator::make(Input::all(),
            array(
                'first_name'            => 'required|max:30',
                'last_name'             => 'required|max:30',
                'email'                 => 'max:60|email|unique:users',
                'mobile_number'         => 'max:10',
                'dd'                    => 'max:2',
                'mm'                    => 'max:2',
                'yyyy'                  => 'max:4',
                'sex'                   => 'required',
                'marriage_status'       => 'required',
                'relative_id'           => 'required|max:15',
                'relation_with_person'  => 'required',
                'add_1'                 => 'required|max:6',
                'city'                  => 'required|max:30',
                'state'                 => 'required|max:30',
                'pin_code'              => 'required|max:10',
                'country'               => 'required|max:30',
                //'pic'                   => 'required',
                'newsletter'            => 'required'
            )
        );
        if($validator->fails()){
            return Redirect::route('account-create')
                ->withErrors($validator)
                ->withInput();
        }else{
            $first_name                 = Input::get('first_name');
            $middle_name                = Input::get('middle_name');
            $last_name                  = Input::get('last_name');
            $email                      = Input::get('email');
            $mobile_number              = Input::get('mobile_number');
            $dob                        = Input::get('dd')."-".Input::get('mm')."-".Input::get('yyyy');
            $sex                        = Input::get('sex');
            $marriage_status            = Input::get('marriage_status');
            $relative_id                = Input::get('relative_id');
            $relation_with_person       = Input::get('relation_with_person');
            $add_1                      = Input::get('add_1');
            $add_2                      = Input::get('add_2');
            $city                       = Input::get('city');
            $state                      = Input::get('state');
            $pin_code                   = Input::get('pin_code');
            $country                    = Input::get('country');
            $pic                        = Input::get('pic');
            $newsletter                 = Input::get('newsletter');

            $now                        = date("Y-m-d H-m-i");
            $mobile_updated_at          = $now;
            $address_updated_at         = $now;
            $pic_updated_at             = $now;

            // To verify Mobiles
            $moobile_verified           = 0;
            
            //Activation COde
            $code = str_random(60);

            $User = User::create(array(
                'first_name'                => $first_name,
                'middle_name'               => $middle_name,
                'last_name'                 => $last_name,
                
                'email'                     => $email,
                
                'mobile_number'             => $mobile_number,
                'mobile_updated_at '        => $mobile_updated_at ,
                
                'dob'                       => $dob,
                'sex'                       => $sex,
                'marriage_status'           => $marriage_status,
                
                'relative_id'               => $relative_id,
                'relation_with_person'      => $relation_with_person,
                
                'add_1'                     => $add_1,
                'add_2'                     => $add_2,
                'city'                      => $city,
                'state'                     => $state,
                'country'                   => $country,
                'pin_code'                  => $pin_code,
                'address_updated_at'        => $address_updated_at,
                
                'pic'                       => "asdgasdg",
                'pic_updated_at'            => $pic_updated_at,
                
                'newsletter'                => $newsletter,
                
                'code'                      => $code,
                'active'                    => 0
            ));

            if($User){

                //send email
                
//                       Mail::send('emails.auth.activate', array('link' => URL::route('account-activate', $code), 'username' => $username), function($message) use ($create){
//                       $message->to($create->email, $create->username)->subject('Activate Your Account');
//                        });
                return Redirect::route('thank-you', array('message' => 'Your account has been createde u can activate now'));
            }else{
                return Redirect::route('thank-you', array('message' => 'Your account has not been created. Try again Later.'));
            }

        }
    }
    
    public function getSignIn(){
       return View::make('account.login');
    }

    public function postSignIn(){

        echo "asgasg";

        //return View::make('account.login');
    }
    
    public function getUserProfile(){
       return View::make('account.UserProfile'); 
    }
    
    public function getThankYou(){
       return View::make('user.message');        
    }
    
}