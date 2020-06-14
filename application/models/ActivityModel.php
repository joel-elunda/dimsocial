<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ActivityModel extends CI_Model {

    /**
     * ACTIVITY
     * =======
     * 
     * IDActivity,
     * IDEntrepreneur,
     * title,
     * description,
     * date,
     * view,
     * like,
     * comment
     */

     
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
     * $table_category
     *
     * @var string
     */
    private $table_category = 'categories';
    
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
     * @return void
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
        return $this->db->get($this->table_category); 
    }

    /**
     * get_where_category($id)
     *
     * @param [int] $id
     * @return void
     */
    public function get_where_domain($id) {
        return $this->db->where('id', $id)->get($this->table_category);
    } 

    /**
     * get_desc_domains()
     *
     * @return void
     */
    public function get_desc_domains() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_category); 
    }


    /**
     * count_domains()
     *
     * @return integer
     */
    public function count_domains() : int {
        return $this->db->count_all($this->table_category);
    }

    /**
     * get_category_where($id)
     *
     * @param [integer] $id
     * @return void
     */
    public function get_category_where($id) {
        return $this->db->where('id_category', $id)->get($this->table_article);
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
     * @return void
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
     * get_desc_activities()
     *
     * @return void
     */
    public function get_desc_activities() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_activity); 
    }


    /**
     * get_where_desc_activities($id)
     *
     * @param [integer] $id
     * @return void
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
     * @param [array] $data
     * @return boolean
     */
    public function add_activity($data) : bool { 
        $arr = $this->get_activities();
        
        if(empty($arr)) {
            return $this->done = FALSE;    
        }  

        if( ! in_array($data['name'], $this->cast_object_to_array($arr[0]))) {
            $this->db->insert($this->table_activity, $data);
            $this->done = TRUE;
        } else {
            $this->done = FALSE;
        }
        return $this->done;
    }
 


    /**
     * replace_activity($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function replace_activity($data) : bool {
        $this->db->where('id', $data['id']);
        return $this->db->replace($this->table_activity, $data);
    }

    /**
     * update_activity($data)
     *
     * @param [array] $data
     * @return boolean
     */
    public function update_activity($data) : bool {
        return $this->db->update($this->table_activity, $data, array('id' => $data['id']));
    }

    /**
     *  delete_activity($id)
     *
     * @param [int] $id
     * @return boolean
     */
    public function delete_activity($id) : bool {
        return $this->db->delete($this->table_activity, array('id' => $id));  
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