<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Activity extends CI_Controller {


    /**
     * Views
     * =====

     * 5. articles
     * 6. activities
     * 7. user_articles
     * 8. user_activity
     * 
     * 9. modify_article
     * 10. modify_activity
     */

    /**
     * view_articles()
    *
    * @return void
    */
    public function view_articles() {
        $this->load->view('artciles', $this->data());
    }

    /**
     * view_activities()
     *
     * @return void
     */
    public function view_activities() {
        $this->load->view('activities', $this->data());
    }

    /**
     * view_user_articles()
     *
     * @return void
     */
    public function view_user_articles() {
        $id = $this->uri->segment(3);
        $data['user'] = $this->UserModel->get_where_user_id($id);
        if( ! empty($data) || $data != NULL) {
            $this->load->view('user_articles', $this->data());
        } else {
            echo 'Data not found.';
        }
    }

    /**
     * iew_own_articles()
     *
     * @return void
     */
    public function view_own_articles() 
    {
        if(isset($this->session->id))
        {
            $user_id = $this->session->id;
            $data['own_articles'] = $this->ActivityModel->get_where_activity($user_id);
            if( ! empty($data) || $data != NULL) 
            {
                $this->load->view('own_articles', $data);
            } else {
                echo 'Data not found.';
            }
        } else {
            echo 'You are not connected.';
        }
    }

    /**
     * activity_input_data()
     *
     * @return array
     */
    private function activity_input_data() : array 
    {
        return array
        (
            'name' => $this->input->post('name', TRUE),
            'domain' => $this->input->post('domain', TRUE),
            'description' => $this->input->post('description', TRUE),
            'experience' => $this->input->post('experience', TRUE),
            'imageUrl' => $this->input->post('imageUrl', TRUE),
            'id_user' => $this->session->id
        );
    }

    /**
     * article_input_data()
     *
     * @return array
     */
    private function article_input_data() : array {
        return array
        (
            'title' => $this->input->post('title', TRUE),
            'id_category' => $this->input->post('domain', TRUE),
            'description' => $this->input->post('description', TRUE),
            'imageUrl' => $this->input->post('imageUrl', TRUE),
            'date' => date('Y-m-d'),
            'time' => date('H:m:s'),
            'id_user' => $this->session->id
        );
    }


    /**
     * data()
     *
     * @return array
     */
    private function data() : array {
        
        $data = array();

        if(isset($this->session->id) || isset($this->session->id)) {
            $data['user'] = $this->UserModel->get_user_where_id($this->session->id);
            $data['activity'] = $this->ActivityModel->get_where_activity($this->session->id);
            $data['user_articles'] = $this->ActivityModel->get_desc_articles_where_user($this->session->id);
        }

        $data['domains'] = $this->ActivityModel->get_domains();
        $data['articles'] = $this->ActivityModel->get_articles();
        $data['activities'] = $this->ActivityModel->get_activities();
        
        return $data;
    }




    /**
     * upload_image()
     *
     * @return void
     */
    public function upload_image() 
    {
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

    /**
     * publish_article()
     *
     * @return void
     */
    function publish_article() {

        $this->form_validation->set_rules('title', 'title', 'required|trim');
        $this->form_validation->set_rules('domain', 'domaine', 'required|trim');
        $this->form_validation->set_rules('description', 'description', 'required|trim');
        $this->form_validation->set_rules('imageUrl', 'imageUrl', 'required|trim');

        if($this->form_validation->run()) { 
            $is_done = $this->ActivityModel->add_article($this->article_input_data());
            if($is_done == TRUE) {

                $this->load->view('own_articles', $this->data());
            } else {
                echo 'Error on Database manipulations.';
            }
        } else {
            $this->load->view('publish_article');
            echo 'Error on form validation.';

        }
    
    }

    

    /**
     * show_article()
     *
     * @return void
     */
    function show_article() 
    {
        $id = (int) $this->uri->segment(3);
        $data['article'] = $this->ActivityModel->get_where_desc_articles($id);
        $data['domains'] = $this->ActivityModel->get_domains();

        if( ! empty($data) || $data != NULL) 
        {
            if( ! empty($data['article']->result()) ) 
            {
                $id_user = $data['article']->result()[0]->id_user;
                $id_category = $data['article']->result()[0]->id_category;
                $data['user'] = $this->UserModel->get_user_where_id($id_user);
                $data['category'] = $this->ActivityModel->get_where_domain($id_category); 
                $this->ActivityModel->increment_views((int) $data['article']->result()[0]->id);
            }
    
            // $data['comments'] = $this->ActivityModel->get_comments_article($data['article']->result()[0]->id);
            # Increment articles views
            $this->load->view('show_article', $data);
        } else {
            echo 'Article ID not found.';
        }
    }


    /**
     * show_articles()
     *
     * @return void
     */
    function show_articles() {
        $ID_DOMAIN = $this->uri->segment(3);
        $data['articles'] = $this->ActivityModel->get_articles_where_category($ID_DOMAIN);
        $data['domains'] = $this->ActivityModel->get_domains();
        if(empty($data) || $data != NULL) {
            // print_r($data['articles']);
            $this->load->view('show_articles', $data);
        } else {
            echo 'Data articles ID not found.';
        }
    }

    /**
     *  user_activity()
     *
     * @return void
     */
    function user_activity() 
    {
        $id_user = $this->uri->segment(3);
        $data['activity'] = $this->ActivityModel->get_activity_where_user($id_user);
        $data['user'] = $this->UserModel->get_user_where_id($id_user);
        
        # User articles
        $data['activities'] = $this->ActivityModel->get_activities();
        $data['articles'] = $this->ActivityModel->get_desc_articles_where_user($id_user);

        if( ! empty($data) || $data != NULL) 
        {  
            // print_r($data['activity'][0]->name);
            $this->load->view('own_activity', $data);
        } 
        else 
        {
            echo 'Data activity user not found';
        }
    }


    /**
     * publish_activity()
     * 
     * Lorsque l'utilisateur clique sur le bouton "publier" dans la vue "publish_activity"
     * c'est la fonction ci-dessous qui gère les données venant du formulaire.
     * Cela lui servira de publier l'activité liée à son compte.
     * 
     * Mise à jour
     * ===========
     * Cette fonctionnalité doit être mise à jour
     * de manière à permettre l'utilisateur de maintenir plusieurs activités.
     * Parce que pour le moment, DIM Social ne donne
     * aux utilisateurs de ne publier qu'une seule activité
     * pour mieux les catégoriser.
     * 
     * @return void
     */
    function publish_activity() 
    {
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('domain', 'domaine', 'required|trim');
        $this->form_validation->set_rules('description', 'description', 'required|trim');
        $this->form_validation->set_rules('experience', 'expérience', 'required|trim');
        $this->form_validation->set_rules('imageUrl', 'imageUrl', 'required|trim');

        // $this->form_validation->set_rules('name', 'name', 'required|trim|max_length[255]|min_length[3]|xss_clean|strip_tags', 
        //     array(
        //         'required' => 'Le champs %s est obligatoire.',
        //         'max_length' => 'Le  %s champs doit contenir au plus 45 caractères.',
        //         'min_length' => 'Le %s champs doit contenir au mois 8 caractères.',
        //         'xss_clean' => 'Le  %schamps contient des caractères inappropriés.'
        //     )
        // );

        // $this->form_validation->set_rules('category', 'categorie', 'required|trim|xss_clean|strip_tags', 
        //     array(
        //         'required' => 'Le champs %s est obligatoire.',
        //         'xss_clean' => 'Le  %schamps contient des caractères inappropriés.'
        //     )
        // );

        // $this->form_validation->set_rules('description', 'description', 'required|trim|xss_clean|strip_tags', 
        //     array(
        //         'required' => 'Le champs %s est obligatoire.',
        //         'xss_clean' => 'Le  %schamps contient des caractères inappropriés.'
        //     )
        // );

        // $this->form_validation->set_rules('experience', 'expérience', 'required|trim|numeric|xss_clean|strip_tags', 
        //     array(
        //         'required' => 'Le champs %s est obligatoire.',
        //         'xss_clean' => 'Le  %schamps contient des caractères inappropriés.'
        //     )
        // );

        // $this->form_validation->set_rules('imageUrl', 'imageUrl', 'required|trim|max_length[255]|xss_clean|strip_tags', 
        //     array(
        //         'required' => 'Le champs %s est obligatoire.',
        //         'xss_clean' => 'Le  %schamps contient des caractères inappropriés.'
        //     )
        // );
        
        if($this->form_validation->run()) 
        {
            $err = array(
                'form_none_validated' => 'Vériifez les informations saisies',
                'already_exist' => 'Le donnée existe déjà',
            );
            $result = $this->ActivityModel->add_activity($this->activity_input_data());
            if($result == TRUE) {  
                // $data['activity'] = $this->
                $this->load->view('index');
            } else {
                // echo 'Failed, FALSE returned';
                $this->load->view('publish_activity', $err);
            }
        } else {
            echo 'Failed at form validation !';
        }

    }

    /**
     * modify_arctivity()
     *
     * @return void
     */
    public function modify_activity() 
    {
        $id = $this->uri->segment(3);
        $data['activity'] = $this->ActivityModel->get_where_activity_id($id);
        if( ! empty($data) || $data != NULL) {
            $this->load->view('update_activity', $data);
        } else {
            echo 'Activity not found.';
        }
    }


    /**
     * modify_article()
     *
     * @return void
     */
    public function modify_article() {
        $id = $this->uri->segment(3);
        $data['article'] = $this->ActivityModel->get_where_activity_id($id);
        if( ! empty($data) || $data != NULL) {
            $this->load->view('update_article', $data);
        } else {
            echo 'Activity not found.';
        }
    }


    /**
     * get_activity($id)
     *
     * @param integer $id
     * @return void
     */
    function get_activity($id) {
        $id = $this->uri->segment(3);
        $data['activity'] = $this->activitymodel->get_activity_where($id);
        if( ! empty($data) ) {
            $this->load->view('own_activity', $data);
        } else {
            echo 'Fail to get activity ID : ' . $id;
        }
    }



    /**
     * get_domain()
     *
     * @return array
     */
    function get_domain() : array {
        $id = $this->uri->segment(3);
        $data['domain'] = $this->ActivityModel->get_where_domain($id);
        return $data;
    }
 


    function remove_activity() {
        $id = $this->uri->segment(4);
        $result = $this->activitymodel->delete_activity($id);
        if($result == TRUE) { 
            echo 'Activity deleted !';
        } else {
            echo 'Activity failed !';
        }
    }


    function update_activity() {
         
        if($this->form_validation->run()) 
        {
            $result = $this->activitymodel->update_activity($this->activity_input_data());
            if($result == TRUE) 
            {
                echo 'Activity is added !';
            } else {
                echo 'Failed';
            }
        } else {
            echo 'Failed at form validation !';
        }
    }

}