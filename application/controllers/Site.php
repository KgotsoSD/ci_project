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


          
          $this->form_validation->set_rules('username','Username','reguired');
          $this->form_validation->set_rules('email','Email','reguired');
          $this->form_validation->set_rules('password','Password','reguired|min_length[5]');
          $this->form_validation->set_rules('password','Repeat Password','reguired|min_length[5]|matches[password]');
          $this->form_validation->set_rules('phone','Phone','reguired|min_length[5]');
           
          if ($this->form_validation->run()==TRUE)
            {

                echo 'form validated';
    
            
                $data = array(
                    'username' => $_POST['username'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                    'gender' => $_POST['gender'],
                    'phone' => $_POST['phone'],
                    'created_at' => $_POST['created_at']
                    

                );
                $this->db->insert('user',$data);

                $this->session->set_flashdata("success"." Your account has been registered. You can login now");
                redirect("Site/register","refresh ");

                
           }
        }
        
        $this->load->view('register');
        
    }

   


}
?>

