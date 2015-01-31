<?php

class NewAccountController extends BaseController {
    
    public function getCreate(){
       return View::make('account.newAccount');
    }
    
    public function postCreate(){

        $validator = Validator::make(Input::all(),
            array(
                'first_name'            => 'required|max:30',
                'middle_name'           => 'max:30',
                'last_name'             => 'required|max:30',
                'email'                 => 'max:60|email|unique:users',
                'mobile_number'         => 'max:10',
                'dd'                    => 'max:2',
                'mm'                    => 'max:2',
                'yyyy'                  => 'max:4',
                'gender'                => 'required|max:2',
                'marriage_status'       => 'required|max:2',
                'relative_id'           => 'required|max:15',
                'relation_with_person'  => 'required|max:2',
                'house_number'          => 'required|max:6',
                'street_number'         => 'required|max:4',
                'area'                  => 'required|max:30',
                'town'                  => 'required|max:30',
                'city'                  => 'required|max:30',
                'zipcode'               => 'required|max:10',
                'state'                 => 'required|max:30',
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
            $gender                     = Input::get('gender');
            $marriage_status            = Input::get('marriage_status');
            $relative_id                = Input::get('relative_id');
            $relation_with_person       = Input::get('relation_with_person');
            $house_number               = Input::get('house_number');
            $street_number              = Input::get('street_number');
            $area                       = Input::get('area');
            $town                       = Input::get('town');
            $city                       = Input::get('city');
            $zipcode                    = Input::get('zipcode');
            $state                      = Input::get('state');
            $country                    = Input::get('country');
            $pic                        = Input::get('pic');
            $newsletter                 = Input::get('newsletter');

            $now                        = date("Y-m-d H-m-i");
            $mobile_updated_on          = $now;
            $address_updated_on         = $now;
            $pic_updated_on             = $now;

            $moobile_verified           = 0;

        }
    }
    
    public function getSignIn(){
       return View::make('account.login');
    }
    
}