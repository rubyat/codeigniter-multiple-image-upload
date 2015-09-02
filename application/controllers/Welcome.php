<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
        }

        public function index()
        {
                $this->load->view('welcome_message', array('error' => ' ' ));
        }
		
		public function do_upload() {
			$this->do_upload_2();
			$this->do_upload_1();
		}

        public function do_upload_1() {
                $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 1000;
                $config['max_width']            = 10240;
                $config['max_height']           = 7680;

                $this->load->library('upload', $config);
                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());
						echo '<pre>';
						print_r($error);
						//exit();
                        //$this->load->view('upload_form', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());
						echo '<pre>';
						print_r($data);
						exit();
                        $this->load->view('upload_success', $data);
                }
        }

        public function do_upload_2() {
                $config2['upload_path']          = './uploads/';
                $config2['allowed_types']        = 'gif|jpg|png';
                $config2['max_size']             = 1000;
                $config2['max_width']            = 10240;
                $config2['max_height']           = 7680;

                $this->load->library('uploadnew', $config2);
                if ( ! $this->uploadnew->do_upload('userfile2'))
                {
                        $error = array('error' => $this->uploadnew->display_errors());
						echo '<pre>';
						print_r($error);
						//exit();
                        //$this->load->view('upload_form', $error);
                }
                else
                {
                        $data2 = array('upload_data' => $this->uploadnew->data());
						echo '<pre>';
						print_r($data2);
						exit();
                        $this->load->view('upload_success', $data);
                }
        }
		
		
		
		
}
