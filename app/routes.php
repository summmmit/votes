<?php

Route::get('/', array(
    'as'  => 'home',
    'uses' => 'HomeController@showWelcome'
));


/*
 * Unauthenticated Group
 */
Route::group(array('before' => 'guest'), function(){

    /*
     * CSRF protection
     */
    Route::group(array('before' => 'csrf'), function(){
        /*
         * Create Account (post)
         */
        Route::Post('/account/create', array(
            'as'  => 'account-create-post',
            'uses' => 'NewAccountController@postCreate'
        ));

    });

    /*
     * Create Account (get)
     */
    Route::get('/account/create', array(
        'as'  => 'account-create',
        'uses' => 'NewAccountController@getCreate'
    ));

});