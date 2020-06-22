<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserModel extends CI_Model {

     
    /**
     * $table_user
     *
     * @var string
     */
    private $table_user = 'users';

    /**
     * $table_comment
     *
     * @var string
     */
    private $table_comment = 'comments';

    /**
     * $table_newletter
     *
     * @var string
     */
    private $table_newsletter = 'newsletters';
    
    /**
     * $done
     *
     * @var boolean
     */
    private $done = FALSE;


    /**
     * get_user()
     *
     * @return CI_DB_mysqli_result Object
     */
    public function get_user() {
        return $this->db->get($this->table_user); 
    }

    /**
     * get_user_where_id($id)
     *
     * @param integer $id
     * @return CI_DB_mysqli_result Object
     */
    public function get_user_where_id($id) {
        return $this->db->where('id', $id)->get($this->table_user)->result(); 
    }

    /**
     *  get_where_user
     *
     * @param array $data
     * @return void
     */
    public function get_where_user($data) {
        return $this->db->where($data)->get($this->table_user)->result();
    } 


    /*
    | -------------------------------------------------------------------
    | NEWSLETTER QUERIES
    | -------------------------------------------------------------------
    */

    function get_newsletters()
    {
        return $this->db->get($this->table_newsletter)->result(); 
    }

    /**
     * add_user_newsletter($email)
     *
     * @param string $email
     * @return boolean
     */
    public function add_user_newsletter($email) : bool
    {
        $arr = $this->get_newsletters();
        if(empty($arr)) {
            return $this->done = FALSE;
        } 
        if( ! in_array($email, $arr)) {
            $this->db->insert($this->table_newsletter, $email);
            $this->done = TRUE;
        } else {
            $this->done = FALSE;
        }
        return $this->done;
    }
 
    /**
     * get_where_user_id($id)
     *
     * @param integer $id
     * @return CI_DB_mysqli_result Object
     */
    public function get_where_user_id($id) {
        return $this->db->where('id', $id)->get($this->table_user)->result();
    } 

    /**
     * get_where_user_email($email)
     *
     * @param string $email
     * @return void
     */
    public function get_where_user_email($email) {
        return $this->db->where('email', $email)->get($this->table_user)->result();
    }

    /**
     * get_desc_user()
     *
     * @return CI_DB_mysqli_result Object
     */
    public function get_desc_user() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_user)->result(); 
    }


    /**
     * get_where_desc_user($id)
     *
     * @param integer $id
     * @return CI_DB_mysqli_result Object
     */
    public function get_where_desc_user($id) {
        $this->db->order_by('id', 'DESC');
        return $this->db->where('id', $id)->get($this->table_user);
    }


    /**
     * count_user()
     *
     * @return integer
     */
    public function count_user() : int {
        return $this->db->count_all($this->table_user);
    }

    /**
     * emails()
     *
     * @return array
     */
    private function emails() : array {
        $arr = $this->get_user()->result();
        $emails = array();

        if(empty($arr)  || $arr == NULL) {
            return $emails;
        } else {
            foreach ($arr as $item) {
                array_push($emails, $item->email);
            }
            return $emails;
        }
    }


    /**
     * add_user($data)
     *
     * @param array $data
     * @return boolean
     */
    public function add_user($data) : bool { 
        $arr = $this->get_user()->result();

        if(empty($arr)) {
            return $this->done = FALSE;    
        }  
        if( ! in_array($data['email'], $this->emails())) {
            $this->db->insert($this->table_user, $data);
            $this->done = TRUE;
        } else {
            $this->done = FALSE;
        }
        return $this->done; 
    }


    /**
     * replace_user($data)
     *
     * @param array $data
     * @return boolean
     */
    public function replace_user($data) : bool {
        $this->db->where('id', $data['id']);
        return $this->db->replace($this->table_user, $data);
    }

    /**
     * update_user($data)
     *
     * @param array $data
     * @return boolean
     */
    public function update_user($data) : bool {
        return $this->db->update($this->table_user, $data, array('id' => $data['id']));
    }

    /**
     *  delete_user($id)
     *
     * @param integer $id
     * @return boolean
     */
    public function delete_user($id) : bool {
        return $this->db->delete($this->table_user, array('id' => $id));  
    }


    /*
    | -------------------------------------------------------------------
    | COMMENTS QUERIES
    | -------------------------------------------------------------------
    */


     /**
      * get_comment()
      *
      * @return CI_DB_mysqli_result Object
      */
    public function get_comment() {
        return $this->db->get($this->table_comment)->result(); 
    }

    /**
     * get_where_comment($id)
     *
     * @param integer $id
     * @return CI_DB_mysqli_result Object
     */
    public function get_where_comment($id) {
        return $this->db->where('id', $id)->get($this->table_comment)->result();
    } 

    /**
     * get_desc_comment()
     *
     * @return CI_DB_mysqli_result Object
     */
    public function get_desc_comment() {
        $this->db->order_by('id', 'DESC');
        return $this->db->get($this->table_comment)->result(); 
    }
    
    /**
     * update_comment($data)
     *
     * @param array $data
     * @return boolean
     */
    public function update_comment($data) : bool {
        return $this->db->update($this->table_comment, $data, array('id' => $data['id']));
    }

    /**
     *  delete_comment($id)
     *
     * @param integer $id
     * @return boolean
     */
    public function delete_comment($id) : bool {
        return $this->db->delete($this->table_comment, array('id' => $id));  
    }




    /**
     * cast_object_to_array($obj)
     *
     * @param CI_DB_mysqli_result Object $obj
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
 