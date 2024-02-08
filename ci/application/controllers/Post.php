<?php
/**
 * Created by PhpStorm.
 * User: IKU
 * Date: 12/29/2017
 * Time: 1:40 AM
 */

class Post extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
        $this->load->helper('url_helper');
    }
    public function index()
    {
        $data['posts'] = $this->model->get_post();
        $this->load->view('post',$data);
    }
    public function pub()
    {
        $name = $this->input->post('name');
        $content=$this->input->post('content');
        $date=$this->input->post('date');
        $data = $this->model->insert_post($name,$content,$date);
        if($data=="ok"){
            $arr = array('result' => "ok");
            echo json_encode( $arr );
        }
        else{
            $arr = array('result' => "false");
            echo json_encode( $arr );
        }




    }
}