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
        
         /*
         * Give Your Choice (post)
         */
        Route::Post('/account/user/ballot', array(
            'as'  => 'account-user-ballot-post',
            'uses' => 'VoteController@postMyBallot'
        ));
        
         /*
         * Give Your Choice (post)
         */
        Route::Post('/account/test/pic/upload', array(
            'as'  => 'account-test-pic-upload-post',
            'uses' => 'TestController@postPicUpload'
        ));

    });

    /*
     * Create Account (get)
     */
    Route::get('/thankyou', array(
        'as'  => 'thank-you',
        'uses' => 'NewAccountController@getThankYou'
    ));

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
    
    /*
     *  User Ballot (get)
     */
    Route::get('/account/user/myballot', array(
        'as'  => 'account-user-myballot',
        'uses' => 'VoteController@getMyBallot'
    ));
    
    /*
     *  Picture Upload (test)
     */
    Route::get('/account/test/pic/upload', array(
        'as'  => 'account-test-pic-upload',
        'uses' => 'TestController@getPicUpload'
    ));
});