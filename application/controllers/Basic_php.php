<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Basic_php extends CI_Controller {


        public function index(){
		
			$this->load->view('basic_php');
        }

        public function do_upload() {
		
			$valid_file = TRUE;
			
			if($_FILES['photo']['name']){
			//if no errors...
			if(!$_FILES['photo']['error']){
				//now is the time to modify the future file name and validate the file
				$new_file_name = strtolower($_FILES['photo']['tmp_name']); //rename file
				if($_FILES['photo']['size'] > (1024000)){
					$valid_file = false;
					$message = 'Oops!  Your file\'s size is to large.';
				}
				
				//if the file has passed the test
				if($valid_file){
					//move it to where we want it to be
					move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$new_file_name);
					$message = 'Congratulations!  Your file was accepted.';
				}
			}
			//if there is an error...
			else{
				//set that to be the returned message
				$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];
			}
			
			echo $message;
		}
			
        }
		
}
