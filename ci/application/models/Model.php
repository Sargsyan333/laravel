<?php
/**
 * Created by PhpStorm.
 * User: IKU
 * Date: 12/28/2017
 * Time: 1:29 AM
 */

class Model extends CI_Model
{
    public function __construct()
    {
        $this->load->database();
    }
    public function get_char($number )
    {
        $this->db->select('str');
        $this->db->where('number',$number);
        $query=$this->db->get('str');
        return $query->row_array();

    }
    public function insert_post($name,$content,$date )
    {
        $data = array(
            'name' => $name ,
            'content' => $content,
            'date'=>$date
        );

        $this->db->insert('post', $data);
        return "ok";

    }
    public function get_post( )
    {
        $this->db->select('*');
        $query=$this->db->get('post');
        return $query->result_array();
    }
}