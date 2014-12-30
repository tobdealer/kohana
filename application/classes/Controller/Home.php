<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template {

	public function action_index()
	{
		$this->template->content = View::factory('home/index');
	}
	
	public function action_login()
	{
		$user = ORM::factory('User')->where('username','=',$this->request->post('username'))->where('password','=',$this->request->post('password'))->count_all();
		print_r($user);
		if($user == 1)
		{
			session_start();
			$_SESSION['logged_in'] = true;
			$_SESSION['username'] = $this->request->post('username');
		}
		$this->redirect('home/texts');
	}
	
	public function action_texts()
	{
		session_start();
		if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'])
		{
			$user = ORM::factory('User')->where('username','=',$_SESSION['username'])->find();
			$texts = $user->texts->find_all();
			$this->template->content = View::factory('home/texts')->bind('text',$texts);
		}
		else 
		{
			$this->redirect('home/index');
		}
	}
	
	public function action_create_text()
	{
		session_start();
		if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'])
		{
			$user = ORM::factory('User')->where('username','=',$_SESSION['username'])->find();
			if($this->request->post('text'))
			{
				ORM::factory('Text')->values(array('text' => $this->request->post('text'), 'user_id' => $user->id),array('text','user_id'))->create();
			}
			$this->redirect('home/texts');
		}
		else
		{
			$this->redirect('home/index');
		}
	}

} // End Welcome
