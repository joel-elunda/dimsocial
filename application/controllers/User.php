<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

    /**
     * Views
     * ======
     * 1. login
     * 2. sign_in
     * 3. sign_out
     * 4. logout
     * 5. block_user
     */


     
    /**
     * user_data()
     *
     * @return array
     */
    private function user_data() : array 
    { 
        return array 
        (
            'name' => $this->input->post('name', TRUE),
            'email' => $this->input->post('email', TRUE),
            'address' => $this->input->post('address', TRUE),
            'phone' => $this->input->post('phone', TRUE),
            'site' => $this->input->post('site', TRUE),
            'type' => $this->input->post('type', TRUE),
            'bio' => $this->input->post('bio', TRUE),
            'imageUrl' => $this->input->post('imageUrl', TRUE),
            'password' => $this->input->post('password', TRUE)
        );
    }


     /**
      * data()
      *
      * @return array
      */
    private function data() : array 
    {
        $data['domains'] = $this->ActivityModel->get_domains();
        $data['articles'] = $this->ActivityModel->get_articles();

        return $data;
    }

    /**
     * user_login_data()
     *
     * @return array
     */
    function user_login_data() : array 
    {
        return array (
            'email' => $this->input->post('email', TRUE),
            'password' => $this->input->post('password', TRUE)
        );
    }

 
    /**
     * logout()
     *
     * @return void
     */
	public function logout() {
		$this->session->unset_userdata($this->user_login_data()); 
		$this->session->sess_destroy();
        redirect(base_url().'home');
    }


    /**
     * upload_image()
     *
     * @return void
     */
    public function upload_image() {

        if(isset($_FILES['imageUrl']['name']))
        {
            $config['upload_path'] = './upload/';
            $config['allowed_types'] = 'gif|png|jpg|jpeg';
            $this -> load -> library('upload', $config);
            $this -> upload -> initialize($config);

            if( ! $this -> upload -> do_upload('imageUrl'))  {
                echo $this->upload->display_errors();
            } else {
                $data = $this -> upload -> data();
                echo '<img src="'.base_url().'upload/'.$data["file_name"].'" class="img-responsive img-thumbnail"/>';
            }
		}
    }
    
    
 
    function login() 
    {

        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  %s champs doit contenir au plus 45 caractères.',
                'min_length' => 'Le %s champs doit contenir au mois 8 caractères.',
                'xss_clean' => 'Le  %s champs contient des caractères inappropriés.',
                'valid_email' => 'Entrez un e-mail valide.'
            )
        );

        $this->form_validation->set_rules('password', 'mot de passe', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  %s champs doit contenir au plus 45 caractères.',
                'min_length' => 'Le %s champs doit contenir au mois 8 caractères.',
                'xss_clean' => 'Le  %s champs contient des caractères inappropriés.'
            )
        );

        $art_count = $this->ActivityModel->count_articles();
        $rand = mt_rand(1, $art_count);
        $data['article'] = $this->ActivityModel->get_where_article($rand); 
        $data['user'] = $this->UserModel->get_user_where_id($data['article']->result()[0]->id_user);

        if($this->form_validation->run()) {
            $err = array();
            // print_r($this->user_login_data());
            $result = $this->UserModel->get_where_user($this->user_login_data());
            if( ! empty($result) ) { 
                // $cookie = array(
                //     'name' => '',
                //     'value' => '',
                //     'expire' => '86500',
                //     'domain' => '.dimsocial.com',
                //     'path' => '/',
                //     'prefix' => '',
                //     'secure' => TRUE
                // );
                // $this->input->set_cookie($cookie);
                $this->session->set_tempdata($this->cast_object_to_array($result[0]), NULL, 86500);  
                redirect(base_url() . 'home');
            } else { 
                $this->load->view('login', $data);
            }
        } else {
            
            $this->load->view('login', $data); 
        }
    }


    /**
     * cast_object_to_array($obj)
     *
     * @param [Object] $obj
     * @return array
     */
    private function cast_object_to_array($obj) : array {
        $arr = array();
        if (is_object($obj)) {
            foreach ($obj as $key => $value) {
                $arr[$key] = $value;
                // array_push($arr, $value);
            }
        } 
        return $arr;
    }

    
    function sign_in() 
    {


        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  champs %s doit contenir au plus 45 caractères.',
                'min_length' => 'Le champs %s doit contenir au mois 8 caractères.',
                'strip_tags' => 'Le  champs %s contient des caractères inapropriés.',
                'valid_email' => 'Entrez un e-mail valide.'
            )
        );
        
        $this->form_validation->set_rules('password', 'password', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le champs %s doit contenir au plus 45 caractères.',
                'min_length' => 'Le champs %s doit contenir au mois 8 caractères.',
                'strip_tags' => 'Le champs %s contient des caractères inapropriés.'
            )
        );
        
        $this->form_validation->set_rules('confirm', 'confirmation', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags|matches[password]', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le champs %s doit contenir au plus 45 caractères.',
                'min_length' => 'Le champs %s doit contenir au mois 8 caractères.',
                'strip_tags' => 'Le champs %s contient des caractères inapropriés.',
                'matches' => ''
            )
        );
 
        $this->form_validation->set_rules('name', 'nom', 'required|trim|max_length[45]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le champs %sdoit contenir au plus 45 caractères.',
                'strip_tags' => 'Le champs %scontient des caractères inapropriés.'
            )
        );

        $this->form_validation->set_rules('address', 'addresse', 'required|trim|max_length[255]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le champs %sdoit contenir au plus 45 caractères.',
                'strip_tags' => 'Le champs %scontient des caractères inapropriés.'
            )
        );

        $this->form_validation->set_rules('type', 'type', 'required', 
            array(
                'required' => 'Le champs %s est obligatoire.'
            )
        );

        $this->form_validation->set_rules('bio', 'bio', 'trim|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'strip_tags' => 'Le champs %s contient des caractères inapropriés.'
            )
        );       

        $this->form_validation->set_rules('imageUrl', 'image', 'required|trim|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'strip_tags' => 'Le champs %s contient des caractères inapropriés.'
            )
        );  

        $this->form_validation->set_rules('phone', 'phone', 'required|trim|max_length[15]|min_length[10]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  champs  %s doit contenir au plus 45 caractères.',
                'min_length' => 'Le champs  %s doit contenir au mois 8 caractères.',
                'strip_tags' => 'Le champs  %s contient des caractères inapropriés.'
            )
        );
 

        if($this->form_validation->run()) {
             
            $result = $this->UserModel->add_user($this->user_data());
            $data['user'] = $this->UserModel->get_where_user_email($this->user_data()['email']);
             
            if($result == TRUE) {  
                $this->session->set_tempdata($this->cast_object_to_array($data['user'][0]), NULL, 86500);
                redirect(base_url().'user/profile');
            }  
            else  { 
                $this->session->set_tempdata($this->cast_object_to_array($data['user'][0]), NULL, 86500);
                redirect(base_url().'user/profile');           
            }

        } else {
            print_r($this->user_data());
            echo 'Failed at form validation !';
            redirect(base_url().'user/sign_in_view');
        }

    }


    function newsletter() 
    {
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  champs %s doit contenir au plus 45 caractères.',
                'min_length' => 'Le champs %s doit contenir au mois 8 caractères.',
                'strip_tags' => 'Le  champs %s contient des caractères inapropriés.',
                'valid_email' => 'Entrez un e-mail valide.'
            )
        );

        if($this->form_validation->run()) {
            $email = $this->input->post('email', TRUE); 
            if($this->UserModel->add_user_newsletter($email) == TRUE) {
                echo 'You\'re souscribe to newsletter';
            } else {
                echo 'Failed';
            }
        } else {
            print_r($this->user_data());
            echo 'Failed at form validation !';
            // redirect(base_url().'user/sign_in_view');
        }

    }


    /**
     * delete_account()
     *
     * @return void
     */
    function delete_account() {
        $id = $this->uri->segment(3);
        $result = $this->UserModel->delete_user($id);
        if($result == TRUE) {
            echo 'Data deleted';
            $this->logout();
            $this->load->view('index');
        } else {
            echo 'Error, cannot delete data.';
        }
    }


    function update_user() {
        
        $this->form_validation->set_rules('email', 'email', 'required|trim|max_length[45]|min_length[8]|xss_clean|valid_email|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  champs %s doit contenir au plus 45 caractères.',
                'min_length' => 'Le champs %s doit contenir au mois 8 caractères.',
                'strip_tags' => 'Le  champs %s contient des caractères inapropriés.',
                'valid_email' => 'Entrez un e-mail valide.'
            )
        );
        
        $this->form_validation->set_rules('password', 'password', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le champs %s doit contenir au plus 45 caractères.',
                'min_length' => 'Le champs %s doit contenir au mois 8 caractères.',
                'strip_tags' => 'Le champs %s contient des caractères inapropriés.'
            )
        );
        
        $this->form_validation->set_rules('confirm', 'confirmation', 'required|trim|max_length[45]|min_length[8]|xss_clean|strip_tags|matches[password]', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le champs %s doit contenir au plus 45 caractères.',
                'min_length' => 'Le champs %s doit contenir au mois 8 caractères.',
                'strip_tags' => 'Le champs %s contient des caractères inapropriés.',
                'matches' => ''
            )
        );
 
        $this->form_validation->set_rules('name', 'nom', 'required|trim|max_length[45]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le champs %sdoit contenir au plus 45 caractères.',
                'strip_tags' => 'Le champs %scontient des caractères inapropriés.'
            )
        );

        $this->form_validation->set_rules('address', 'addresse', 'required|trim|max_length[255]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le champs %sdoit contenir au plus 45 caractères.',
                'strip_tags' => 'Le champs %scontient des caractères inapropriés.'
            )
        );

        $this->form_validation->set_rules('type', 'type', 'required', 
            array(
                'required' => 'Le champs %s est obligatoire.'
            )
        );

        $this->form_validation->set_rules('bio', 'bio', 'trim|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'strip_tags' => 'Le champs %s contient des caractères inapropriés.'
            )
        );       

        $this->form_validation->set_rules('imageUrl', 'image', 'required|trim|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'strip_tags' => 'Le champs %s contient des caractères inapropriés.'
            )
        );  

        $this->form_validation->set_rules('phone', 'phone', 'required|trim|max_length[15]|min_length[10]|xss_clean|strip_tags', 
            array(
                'required' => 'Le champs %s est obligatoire.',
                'max_length' => 'Le  champs  %s doit contenir au plus 45 caractères.',
                'min_length' => 'Le champs  %s doit contenir au mois 8 caractères.',
                'strip_tags' => 'Le champs  %s contient des caractères inapropriés.'
            )
        );
 

        if($this->form_validation->run()) {
            
        }
         
    }


    function sign_in_view() {
        $this->load->view('sign_in', $this->data());
    }

    function show_user() 
    {
        $id_user = $this->uri->segment(3);
        $data['user'] = $this->UserModel->get_where_user_id($id_user);
        if( ! empty($data) || $data != NULL) {
            $this->load->view('show_user', $data);
        } else {
            echo 'User not found';
        }
    }

    function profile() {

        if( isset($this->session->id) || isset($this->session->tempdata('user')[0]->id)){
            $data['user'] = $this->UserModel->get_where_user_id($this->session->id);
            // print_r($data);
            $this->load->view('profile', $data);
        } 
    }

    public function publish_activity() 	{ 
		$this->load->view('publish_activity', $this->data());
	}

	public function publish_article() { 
		$this->load->view('publish_article', $this->data());
	}



}