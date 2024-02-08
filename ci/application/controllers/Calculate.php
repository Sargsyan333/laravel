<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculate extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('model');
        $this->load->helper('url_helper');
    }
    public function index()
    {
        $number = $this->input->post('number');
        $hex=dechex ($number );
        $birnary=decbin ($number);
        $data = $this->model->get_char($number);
        foreach ($data as $char){
            $str=strtolower($char);
        }
        if($number<16){
            $temp="IE+000".$hex;
        }
        else{
            $temp="IE+00".$hex;
        }
        $arr = array('dec' => $number, 'hex' => $hex,'ie'=>$temp, 'binary' =>$birnary, 'str' => $str);
        echo json_encode( $arr );

    }
}