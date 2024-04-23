<?php
class Auth_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Auth_model');
        // $this->load->logged_in();
    }
    public function signup_user()
    {
        $password = $this->input->post('password');
        $cpass = $this->input->post('cpass');
        $data = array(
            'username' => $this->input->post('username'),
            'email' => $this->input->post('email'),
            'password' => $password,
        );

        if ($password != $cpass) {
            $this->session->set_flashdata('error', 'Something went wrong, Try again!');
            redirect('Auth/signup');
        } else {
            $data = array(
                'username' => $this->input->post('username'),
                'email' => $this->input->post('email'),

                'password' => $password,
            );
            $this->db->insert('signinfo', $data);
            $this->session->set_flashdata('success', 'Signup Successfully!');
            redirect('Auth/signup');
        }
    }



    public function signin_user()
    {
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $this->db->where('email', $email);
        $this->db->where('password', $password);
        $query = $this->db->get('signinfo');
        $find_user = $query->num_rows($query);

        if ($find_user > 0) {
            $this->session->set_flashdata('success', ' Sign-in successfully!!');
            redirect('Auth/user_dashboard');

        } else {
            $this->session->set_flashdata('error', 'Invalid Email or Password!!');
            redirect('Auth/signin');

        }
    }

    public function user_logout()
    {
        $newdata = array(
            'username' => '',
            'email' => '',
            'password' => '',
            'cpass' => '',
            'logged_in' => FALSE,
        );

        $this->session->unset_userdata($newdata);
        $this->session->sess_destroy();

        redirect('auth/signin', 'refresh');
    }

    public function loggedIn()
    {
        return ($_SESSION['loggedIn'] == true) ? true : false;
    }

    public function email_exists()
    {
        $email = $this->input->post('email');
        $query = $this->db->query("SELECT email, password FROM users WHERE email='$email'");
        if ($row = $query->row()) {
            return TRUE;
        } else {
            return FALSE;
        }
    }
    public function temp_reset_password($temp_pass)
    {
        $data = array(
            'email' => $this->input->post('email'),
            'reset_pass' => $temp_pass
        );
        $email = $data['email'];

        if ($data) {
            $this->db->where('email', $email);
            $this->db->update('users', $data);
            return TRUE;
        } else {
            return FALSE;
        }

    }
    public function is_temp_pass_valid($temp_pass)
    {
        $this->db->where('reset_pass', $temp_pass);
        $query = $this->db->get('users');
        if ($query->num_rows() == 1) {
            return TRUE;
        } else
            return FALSE;
    }









}




