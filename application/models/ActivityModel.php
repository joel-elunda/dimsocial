<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActivityModel extends CI_Model {

     
    /**
     * $table_article
     *
     * @var string
     */
    private $table_article = 'articles';


    /**
     * $table_activity
     *
     * @var string
     */
    private $table_activity = 'activities';


    
    /**
     * $table_domain
     *
     * @var string
     */
    private $table_domain = 'domains';

    /**
     * $table_comment
     *
     * @var string
     */
    private $table_comment = 'comments';
    
    /**
     * $done
     *
     * @var boolean
     */
    private $done = FALSE;


    /**
     * none
     *
     * @var array
     */
    private $none = array();













    /*
    | -------------------------------------------------------------------
    | ARTICLES QUERIES
    | -------------------------------------------------------------------
    */
 
    /**
     * get_articles()
     *
     * @return CI_DB_mysqli_result Object
     */
    public function get_articles() {
        return $this->db->get($this->table_article)->result(); 
    }

    /**
     * get_where_article($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_where_article($id) {
        return $this->db->where('id', $id)->get($this->table_article);
    } 

    /**
     * get_desc_articles()
     *
     * @return void
     */
    public function get_desc_articles() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_article); 
    }


    /**
     * get_where_desc_articles($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_where_desc_articles($id) {
        $this->db->order_by('id', 'DESC');
        return $this->db->where('id', $id)->get($this->table_article);
    }

    /**
     * get_desc_articles_where_user($id)
     *
     * @param integer $id
     * @return void
     */
    public function get_desc_articles_where_user($id) {
        $this->db->order_by('id', 'DESC');
        return $this->db->where('id_user', $id)->get($this->table_article)->result();
    }

    /**
     * get_articles_where_category($ID_DOMAIN)
     *
     * @param [type] $ID_DOMAIN
     * @return void
     */
    public function get_articles_where_category($ID_DOMAIN) {
        $this->db->order_by('id', 'DESC');
        return $this->db->where('id_category', $ID_DOMAIN)->get($this->table_article);
    }

    /**
     * count_articles()
     *
     * @return integer
     */
    public function count_articles() : int {
        return $this->db->count_all($this->table_article);
    }


    /**
     * add_article($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function add_article($data) : bool { 
        $arr = $this->get_articles();
        
        if(empty($arr)) {
            return $this->done = FALSE;    
        }  

        if( ! in_array($data['title'], $this->cast_object_to_array($arr[0]))) {
            $this->db->insert($this->table_article, $data);
            $this->done = TRUE;
        } else {
            $this->done = FALSE;
        }
        return $this->done;
    }


    /**
     * replace_article($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function replace_article($data) : bool {
        $this->db->where('id', $data['id']);
        return $this->db->replace($this->table_article, $data);
    }

    /**
     * update_article($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function update_article($data) : bool {
        return $this->db->update($this->table_article, $data, array('id' => $data['id']));
    }

    /**
     *  delete_article($id)
     *
     * @param [int] $id
     * @return boolean
     */
    public function delete_article($id) : bool {
        return $this->db->delete($this->table_article, array('id' => $id));  
    }

    








    /*
    | -------------------------------------------------------------------
    | CATEGORIES QUERIES
    | -------------------------------------------------------------------
    */

    /**
     * get_category()
     *
     * @return void
     */
    public function get_domains() {
        return $this->db->get($this->table_domain); 
    }

    /**
     * get_where_category($id)
     *
     * @param [int] $id
     * @return void
     */
    public function get_where_domain($id) {
        return $this->db->where('id', $id)->get($this->table_domain)->result();
    } 

    /**
     * get_desc_domains()
     *
     * @return void
     */
    public function get_desc_domains() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_domain); 
    }


    /**
     * count_domains()
     *
     * @return integer
     */
    public function count_domains() : int {
        return $this->db->count_all($this->table_domain);
    }

    /**
     * get_category_where($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_domain_where($id) {
        return $this->db->where('id_category', $id)->get($this->table_domain);
    }

    /**
     * get_all_domain_where_id($domain)
     *
     * @param [string] $domain
     * @return CI_DB_mysqli_result Object
     */
    public function get_all_domain_where_id($domain) {
        $this->db->where('CODE', $domain); 
        return $this->db->get($this->table_domain)->result();
    }


    














    /*
    | -------------------------------------------------------------------
    | ACTIVITIES QUERIES
    | -------------------------------------------------------------------
    */


    /**
     * get_activity()
     *
     * @return void
     */
    public function get_activity() {
        return $this->db->get($this->table_activity); 
    }


    /**
     * get_activities()
     *
     * @return CI_DB_mysqli_result Object
     */
    public function get_activities() {
        return $this->db->get($this->table_activity)->result(); 
    }
 
    /**
     * get_where_activity($id)
     *
     * @param [integer] $id
     * @return CI_DB_mysqli_result Object 
     */
    public function get_where_activity($id) {
        return $this->db->where('id_user', $id)->get($this->table_activity)->result();
    } 

    
    /**
     * get_where_activity_id($id)
     *
     * @param integer $id
     * @return CI_DB_mysqli_result Object
     */
    public function get_where_activity_id($id) {
        return $this->db->where('id', $id)->get($this->table_activity)->result();
    }

    /**
     * get_activity_where_user($id)
     *
     * @param integer $id
     * @return CI_DB_mysqli_result Object
     */
    public function get_activity_where_user($id) {
        return $this->db->where('id_user', (int)$id)->get($this->table_activity)->result(); 
    }
    
    

    /**
     * get_desc_activities()
     *
     * @return CI_DB_mysqli_result Object
     */
    public function get_desc_activities() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_activity); 
    }


    /**
     * get_where_desc_activities($id)
     *
     * @param [integer] $id
     * @return CI_DB_mysqli_result Object
     */
    public function get_where_desc_activities($id) {
        $this->db->order_by('id', 'DESC');
        return $this->db->where('id', $id)->get($this->table_activity);
    }


    /**
     * count_activities()
     *
     * @return integer
     */
    public function count_activities() : int {
        return $this->db->count_all($this->table_activity);
    }



    /**
     * add_activity($data)
     *
     * @param array $data
     * @return boolean
     */
    public function add_activity($data) : bool { 
        $arr = $this->get_activities();
        
        if(empty($arr)) {
            return $this->done = FALSE;    
        }  

        if( ! in_array($data['description'], $this->descriptions())) {
            $this->db->insert($this->table_activity, $data);
            $this->done = TRUE;
        } else {
            $this->done = FALSE;
        }
        return $this->done;
    }
 

    /**
     * descriptions()
     *
     * @return array
     */
    private function descriptions() : array {
        $arr = $this->get_activities();
        $descriptions = array();

        if(empty($arr)  || $arr == NULL) {
            return $descriptions;
        } else {
            foreach ($arr as $item) {
                // print_r($item);
                array_push($descriptions, $item->description);
            }
            return $descriptions;
        }
    }


    /**
     * replace_activity($data)
     *
     * @param array $data
     * @return boolean
     */
    public function replace_activity($data) : bool {
        $this->db->where('id', $data['id']);
        return $this->db->replace($this->table_activity, $data);
    }

    /**
     * update_activity($data)
     *
     * @param array $data
     * @return boolean
     */
    public function update_activity($data) : bool {
        return $this->db->update($this->table_activity, $data, array('id' => $data['id']));
    }

    /**
     *  delete_activity($id)
     *
     * @param integer $id
     * @return boolean
     */
    public function delete_activity($id) : bool {
        return $this->db->delete($this->table_activity, array('id' => $id));  
    }


    // public function count_all_likes() : int {

    // }

    /**
     * count_likes()
     *
     * @return integer
     */
    public function count_likes($id) : int {
        return $this->db->where('id', $id)->get($this->table_article)->result(); 
    }


    /**
     * count_comments()
     *
     * @return integer
     */
    public function count_comments($id) : int {
        return $this->db->where('id', $id)->get($this->table_article)->result(); 
    }

    /**
     * count_comments_article(int $id)
     *
     * @param integer $id_article
     * @return void
     */
    public function get_comments_article(int $id_article)  {
        return $this->db->where('id_article', $id_article)->get($this->table_comment)->result();
    }

     
    /**
     * count_views()
     *
     * @return integer
     */
    public function count_views($id) : int {
        return $this->db->where('id', $id)->get($this->table_article)->result(); 
    }

    /**
     * increment_views($id_article)
     *
     * @param integer $id_article
     * @return void
     */
    public function increment_views(int $id_article)  {
        $article_view = (int) $this ->db->where('id', $id_article)->get($this->table_article)->result()[0]->view; 
        $article = $this->db->where('id', $id_article)->get($this->table_article)->result();
        $article[0]->view = ++$article_view;
        return $this->db->update($this->table_article, $article[0], 'id = ' . (int) $id_article);
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


}