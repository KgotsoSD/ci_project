<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends CI_Controller
{
    public function login()
    {
        $this->load->view("login");
        
    }


    public function register()
    {
        if (isset($_POST['register'])) 
        {


          
          $this->form_validation->set_rules('email','Email','reguired');
          $this->form_validation->set_rules('username','username','reguired');
          $this->form_validation->set_rules('password','Password','reguired|min_length[5]');
          $this->form_validation->set_rules('password','Repeat Password','reguired|min_length[5]|matches[password]');
           
          if ($this->form_validation->validation->run()==TRUE)
            {

                echo 'form validate';


                $data = array(
                    'email' => $_POST['email'],
                    'username' => $_POST['username'],
                    'password' => $_POST['password'],
                    'created_at' => $_POST['created_at']
                    

                );
                $this->db->insert('users',$data);
                $this->session->set_flashdata("Success"." Your account has been registered. You can login now");
                redirect("Site/Register","refresh ");

                
           }
        }
        
        $this->load->view("register");
        
    }

}
?>

