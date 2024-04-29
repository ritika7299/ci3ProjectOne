<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Allcourse extends CI_Controller
{


    public function newcourses()
    {

        $this->load->view('newcourses');
    }
}
