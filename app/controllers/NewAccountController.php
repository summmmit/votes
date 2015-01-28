<?php

class NewAccountController extends BaseController {
    
    public function getCreate(){
       return View::make('account.newAccount');
    }
    
    public function postCreate(){
        
echo "<pre>";
print_r(Input::all());
echo "</pre>";
    }
    
}