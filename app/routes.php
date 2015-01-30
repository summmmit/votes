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

    /*
     * Login Account (get)
     */
    Route::get('/account/sign-in', array(
        'as'  => 'account-sign-in',
        'uses' => 'NewAccountController@getSignIn'
    ));
    /*
     * Activate Account (get)
     */
    Route::get('/account/activate/{code}', array(
        'as'  => 'account-activate',
        'uses' => 'FormalController@getActivate'
    ));

    /*
     *  User Profile (get)
     */
    Route::get('/account/user/profile', array(
        'as'  => 'account-user-profile',
        'uses' => 'NewAccountController@getUserProfile'
    ));

});