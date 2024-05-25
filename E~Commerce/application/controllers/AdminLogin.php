<?php
class AdminLogin extends CI_Controller{
    function __construct(){
        parent::__construct();
        date_default_timezone_set("Asia/Kolkata");
        if(isset($_SESSION['admin'])){
            redirect(base_url("admin"));
        }
    }
    function index(){
        $this->load->view("adminLogin");
    }
    function process(){
        $admin=$this->MyModel->selectWhere("admin",['adminUsername'=>$_POST['adminUsername'],'adminPassword'=>$_POST['adminPassword']]);
        if(isset($_POST['adminUsername'])&&isset($_POST['adminPassword'])){
            if(count($admin)>0){
                $_SESSION['admin']=$admin[0]['adminUsername'];
                redirect(base_url("admin"));
            }else{
                $_SESSION['error']="Invalid Credentials";
                redirect(base_url("adminLogin"));
            }
        }else{
            $_SESSION['error']="Insufficient Details";
            redirect(base_url("adminLogin"));
        }

    }
}
?>