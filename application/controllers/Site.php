<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Site extends CI_Controller
{

    
    public function logout()
    {
        unset($_SESSION);
        redirect("Site/login", "refresh");
    }



    public function login()
    {
        if (isset($_POST['login'])) 
        {
          
          $this->form_validation->set_rules('username','Username','reguired');
          $this->form_validation->set_rules('password','Password','reguired|min_length[5]');
 
          if ($this->form_validation->run()==TRUE)
          {
            $username=$_POST['username'];
            $password=md5($_POST['password']);

            //check user in the database
            $this->db->select('*');
            $this->db->from('user');
            $this->db->where(array('username' =>$username,'password' =>$password));
            $query=$this->db->get();

            $user= $query->row();
            //if user exists
            if ($user->email)
             {
                $this->session->set_flashdata("success","You are logged in");
               
            //set session variables
                $_SESSION['user_logged'] ==TRUE;
                $_SESSION['username']=$user->username;





             }
            else
            {
                $this->session->set_flashdata("error","No such account exists in the database");
                redirect("Site/login","refresh");
            }    
          
           }

          
        }

        $this->load->view("login");
        
    }


    public function register()
    {
        if (isset($_POST['register'])) 
        {


          $this->form_validation->set_rules('email','Email','required');
          $this->form_validation->set_rules('username','Username','required');
          $this->form_validation->set_rules('phone','Phone','required|min_length[10]');
          $this->form_validation->set_rules('gender','Gender','required');
          $this->form_validation->set_rules('phone','Phone','required|min_length[10]');
          $this->form_validation->set_rules('password','Password','required|min_length[5]');
          $this->form_validation->set_rules('password','Repeat Password','required|min_length[5]|matches[password]');
          
          if ($this->form_validation->run()==TRUE)
            {

                echo 'form validated';
    
            
                $data = array(
                    'name' => $_POST['name'],
                    'surname' => $_POST['surname'],
                    'username' => $_POST['username'],
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password']),
                    'gender' => $_POST['gender'],
                    'phone' => $_POST['phone'],
                    'created_at' => $_POST[date('Y-m-d')],
                    

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

