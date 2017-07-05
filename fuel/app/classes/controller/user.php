<?php
use \Model\Patients;
class Controller_User extends Controller_Template
{

	public function action_index()
	{
		if (Auth::check()) {
		
		$view = View::forge('layout2');

		$view->head = View::forge('user/head');
		$view->header = View::forge('template');
		$view->content = View::forge('user/accueil');
		//$view->aside = View::forge('user/connect');
		$view->footer = View::forge('user/footer');

		return $view;
		} 
		else {
			$view = View::forge('layout2', array('signup_form' => Session::get_flash('signup_form')),false);

			$view->head = View::forge('user/head');
			$view->header = View::forge('template');
			$view->content = View::forge('user/accueil');
			//$view->aside = View::forge('user/connect');
			$view->footer = View::forge('user/footer');
		
			return $view;
		}
	}

	public function action_usercode()
	{
		//$usercode = Input::post('usercode');
		$patient = Patients::check_usercode();

		if($patient == null){

			Session::set_flash(
				'error',
				e('Le code de clinique existe déjà ou est invalide.'));
				Response::redirect('/toubibapp/public/accueil');
		}
		else{

			//var_dump($patient);
			$patients = Patients::insert_usercode();
		
			$view = View::forge('layout2');

			$view->head = View::forge('user/head');
			$view->header = View::forge('template2');
			$view->content = View::forge('user/formulaire');
			$view->footer = View::forge('user/footer');

			return $view;
			//Response::redirect('/toubibapp/public/formulaire');
			}
	}

	/*public function action_signup()
	{
		$val = Validation::forge('signup_validation');
		$val->add_field(
			'username',
			'Username',
			'required|valid_string[alpha,lowercase,numeric]'
			);
		$val->add_field(
			'password',
			'Password',
			'required|min_length[6]'
			);
		$val->add('email', 'Email')
			->add_rule('required')
			->add_rule('valid_email');

			if($val->run()){

				try{
					$user_id = Auth::create_user(
						Input::post('username'),
						Input::post('password'),
						Input::post('email')
						);

					Session::set_flash(
					'Success',
					e('Welcome '.Input::post('username').'!')
					);
					//Response::redirect('/toubibapp/public');
				}
				catch (\SimpleUserUpdateException $e)
				{
					Session::set_flash('error', e($e->getMessage()));
				}
			}
			else
			{
				Session::set_flash('error', e($val->error()));
			}

			Session::set_flash('signup_form', Input::post());
			Response::redirect('/toubibapp/public');
			
	}*/

	public function action_signin()
	{
		if(Auth::check()){
			Session::set_flash(
				'error',
				e('Your are already logged in, '.
					Auth::get_screen_name().'.')
				);
				Response::redirect('/toubibapp/public/accueil'); /* Done */
		}

		$val = Validation::forge();
		$val->add('username', 'Email or Username')
			->add_rule('required');
		$val->add('password', 'Password')
			->add_rule('required');

			if($val->run())
			{
				$auth = Auth::instance();

				if(Auth::check() or
					$auth->login(
						Input::post('username'),
						Input::post('password')
						)
					)
				{
					Session::set_flash('succes',
						e('Welcome, '.Auth::get_screen_name().'!')
						);
				}
				Response::redirect('/toubibapp/public/rendez_vous');
			}
			else
			{
				Session::set_flash(
					'error',
					'Wrong username or password.'
				);
				Response::redirect('/toubibapp/public/accueil');
			}
	}

	public function action_signout() /* Done */
	{
		Auth::logout();
		Response::redirect('toubibapp/public/accueil');
	}

	// Contrôlleur pour les onglets

	/*public function action_accueil()
	{
       $view = View::forge('layout');

		$view->head = View::forge('user/head');
		$view->header = View::forge('template');
		$view->content1 = View::forge('user/accueil');
		$view->content2 = View::forge('user/connect');
		$view->footer = View::forge('user/footer');
		return $view;
	}*/

	public function action_propos()
	{
		$view = View::forge('layout2');

		$view->head = View::forge('user/head');
		$view->header = View::forge('template');
		$view->content = View::forge('user/propos');
		$view->footer = View::forge('user/footer');
		return $view;
	}

	public function action_assistance()
	{
        $view = View::forge('layout2');

		$view->head = View::forge('user/head');
		$view->header = View::forge('template');
		$view->content = View::forge('user/assistance');
		$view->footer = View::forge('user/footer');
		return $view;
	}

	public function action_rendez_vous()
	{
        $view = View::forge('layout2');

		$view->head = View::forge('user/head');
		$view->header = View::forge('template2');
		$view->content = View::forge('user/rdv');
		$view->footer = View::forge('user/footer');

		return $view;
	}

	public function action_contact()
	{
        $view = View::forge('layout2');

		$view->head = View::forge('user/head');
		$view->header = View::forge('template');
		$view->content = View::forge('user/contact');
		$view->footer = View::forge('user/footer');
		return $view;
	}

	public function action_toubibConnexion()
	{
        $view = View::forge('layout2');

		$view->head = View::forge('user/head');
		$view->header = View::forge('template');
		$view->content = View::forge('user/toubibConnexion');
		$view->footer = View::forge('user/footer');
		return $view;
	}

	/*public function action_formulaire()
	{
        $view = View::forge('layout2');

		$view->head = View::forge('user/head');
		$view->header = View::forge('template2');
		$view->content = View::forge('user/formulaire');
		$view->footer = View::forge('user/footer');
		return $view;
	}*/

	//public function action_medecin()
	//{
    //   	$this->template->title = 'Page Médecin';
    //   	$this->template->content = View::forge('/medecin');
	//}
}