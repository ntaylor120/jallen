<?php
class UserController extends BaseController {


	/**
	*
	*/
	public function __construct() {
		# Make sure BaseController construct gets called
		parent::__construct();


	}


	
	/**
	* Process the new user signup
	* @return Redirect
	*/
	public function postSignup() {

		# rules

		$rules = array(
			'before' => 'csrf', 
			'email' => 'required|email|unique:users,email',
			'password' => 'required|min:6'
		);

		# validator

		$validator = Validator::make(Input::all(), $rules);
		
		# handle failures

		if($validator->fails()) {
			return Redirect::to('/signup')
				->with('flash_message', 'Sign up failed; please fix the errors listed below.')
				->withInput()
				->withErrors($validator);
		}

		$user = new User;
	        $user->email    = Input::get('email');
	        $user->password = Hash::make(Input::get('password'));
	        try {
	            $user->save();
	        }
	        catch (Exception $e) {
	            return Redirect::to('/signup')
	                ->with('flash_message', 'Sign up failed; please try again.')
	                ->withInput();
	        }
	        # Log in
	        Auth::login($user);
	        #$user->sendWelcomeEmail();
	        return Redirect::to('/')->with('flash_message', 'Welcome to J Allen Imports!');
	    }


	    












}