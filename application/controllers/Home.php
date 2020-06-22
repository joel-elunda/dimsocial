<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Home extends CI_Controller {

	/**
	 * data()
	 * 
	 * @return array
	 */
	private function data() : array 
	{
		$data['articles'] = $this->ActivityModel->get_desc_articles();
		$data['activities'] = $this->ActivityModel->get_desc_activities();
		$data['domains'] = $this->ActivityModel->get_domains();
		$data['users'] = $this->arr_users();
		// $data['user'] = $this->user();
		$data['user'] = $this->UserModel->get_user_where_id($this->session->id);
		// $data['likes'] = $this->ActivityModel->count_likes();
		// $data['comments'] = $this->ActivityModel->count_comments();
		// $data['views'] = $this->ActivityModel->count_views();
		
		return $data;
	}

	public function index() {
		// print_r($this->arr_users()[2][0]->name);
		// print_r($this->data()['articles']->result());
		$this->load->view('index', $this->data());
	}

	public function list_activities() 
	{ 
		$this->load->view('list_activities', $this->data());
	}

	public function login()
	{
		$art_count = $this->ActivityModel->count_articles();
		$rand = mt_rand(1, $art_count);
		$data['article'] = $this->ActivityModel->get_where_article($rand); 
		$data['user'] = $this->UserModel->get_user_where_id($data['article']->result()[0]->id_user); 
		$this->load->view('login', $data);
	}

	public function desc_blog()
	{
		$this->load->view('desc_blog');
	}

	public function publish_activity() 	
	{ 
		if(isset($this->sesion->id) || isset($this->session->name)) {
			$data['domains'] = $this->ActivityModel->get_domains();
		 	$this->load->view('publish_activity', $this->data());
		} else {
			redirect(base_url() .'home/login');
		}
	}

	public function publish_article() 
	{ 
		if(isset($this->sesion->id) || isset($this->session->name)) {
			$this->load->view('publish_article', $this->data());
		} else {
			redirect(base_url() .'home/login');
		}
		
	}

	public function activity() 
	{
		$this->data()['activity'] = $this->ActivityModel->get_where_activity($this->session->id);
		$this->load->view('activity', $this->data());
	}

	public function sign_in()
	{ 
		$this->load->view('sign_in', $this->data());
	}

	public function politic()
	{
		$this->load->view('politic');
	}


	/**
	 * arr_users()
	 *
	 * @return array
	 */
	private function arr_users() : array 
	{
		$users = array();
		$users_id = array(); 
		$arr = $this->ActivityModel->get_articles();

		$length = count($arr);

		if(! empty($arr) || $arr != NULL)
		{
			for ($i=0; $i < $length; $i++)
			{ 
				array_push($users_id, $arr[$i]->id_user);
				array_push($users, $this->UserModel->get_user_where_id($users_id[$i]));
			}
			return $users;
		} 
		else 
		{
			echo 'Nothing to show from Database. ';
			return array();
		}
		

		return $users_id;
	}

}