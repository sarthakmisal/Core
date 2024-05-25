<?php
class Admin extends CI_Controller{
    public function upload($name="c_photo"){
        if($_FILES[$name]['name']!=''){
            $filename=time().rand(10000,99999).$_FILES[$name]['name'];
            move_uploaded_file($_FILES[$name]['tmp_name'], "uploads/$filename");
            $_POST[$name]=$filename;
            return $filename;
        }else{
            $_POST[$name]="";
            return "";
        }
    }
    function navbar(){
        $this->load->view("admin/partials/navbar.php");
    }
    function footer(){
        $this->load->view("admin/partials/footer.php");
    }
    function index(){
        $this->navbar();
        $this->load->view("admin/index.php");
        $this->footer();
    }
    public function loanTypes(){
        $this->navbar();
        $this->load->view("admin/loanTypes",["loanTypes"=>$this->myModel->select("loantypes")]);
        $this->footer();
    }
    function saveLoanType(){
        $_POST['status']="active";
        $this->myModel->insert('loanTypes',$_POST);
        redirect(base_url("admin/loanTypes/"));
    }
    public function editLoanType($id){
        $this->navbar();
        $this->load->view("admin/editLoanType",["loanTypes"=>$this->myModel->selectWhere("loantypes",["l_id"=>$id])]);
        $this->footer();
    }
    public function updateLoanType($id){
        $this->myModel->update("loantypes",['l_id'=>$id],$_POST);
        redirect(base_url('admin/loanTypes'));
    }
    public function deleteLoanType($id){
        $this->myModel->disable("loantypes",["l_id"=>$id]);
        redirect(base_url("admin/loanTypes"));
    }
    public function createFiles(){
        $this->navbar();
        $this->load->view("admin/createFiles",["loanTypes"=>$this->myModel->select("loantypes")]);
        $this->footer();
    }

    public function loanInterest($id){
        echo json_encode($this->myModel->selectWhere("loantypes",["l_id"=>$id])[0]['l_interest']);
    }
    public function saveFiles(){
        echo "<pre>";
        // print_r($_POST);exit;
        $this->upload("c_photo");
        $this->upload("c_salary");
        $this->upload("c_sign");
        $this->upload("w_photo");
        $this->upload("w_sign");
        $_POST['file_date']=date("Y-m-d",time());
        $_POST['file_status']="Pending";
        $_POST['approved_date']="";
        $_POST['disbursed_date']="";
        $_POST['rejected_date']="";
        $_POST['status']="active";
        $_POST['entry_time']=time();
        // print_r(implode(" text,",array_keys($_POST))." text");
        $this->myModel->insert("loanfiles",$_POST);
        $_SESSION['success']="Loan File Created Successfully !!";
        redirect(base_url("admin/createFiles"));
    }
    public function pendingFiles(){
        $this->navbar();
        $this->load->view("admin/pendingFiles",["pendingFiles"=>$this->db->query("select * from loanfiles left join loantypes on loanfiles.loan_type=loantypes.l_id where file_status='Pending' and loanfiles.status='active'")->result_array()]);
        $this->footer();
    }
    public function deleteFile($id){
        $this->myModel->disable("loanfiles",['f_id'=>$id]);
        $_SESSION['success']="Loan file Deleted Successfully !!";
        redirect(base_url('admin/pendingFiles'));
    }
    public function viewFile($id){
        $this->navbar();
        $this->load->view("admin/viewFile",["viewFile"=>$this->myModel->select("loanfiles",["f_id"=>$id])]);
        $this->footer();
    }
    public function approveFile($id){
        $this->myModel->update("loanfiles",["f_id"=>$id],['file_status'=>"Approved","approved_date"=>date("d M Y",time())]);
        redirect(base_url("admin/approvedFiles/"));
    }
    public function rejectFile($id){
        $this->myModel->update("loanfiles",["f_id"=>$id],['file_status'=>"Rejected","rejected_date"=>date("d M Y",time())]);
        redirect(base_url("admin/rejectedFiles"));
    }
    public function approvedFiles(){
        $this->navbar();
        $this->load->view("admin/approvedFiles",["approvedFiles"=>$this->db->query("select * from loanfiles left join loantypes on loanfiles.loan_type=loantypes.l_id where file_status='Approved' and loanfiles.status='active'")->result_array()]);
        $this->footer();
    }
    public function rejectedFiles(){
        $this->navbar();
        $this->load->view("admin/rejectedFiles",["rejectedFiles"=>$this->db->query("select * from loanfiles left join loantypes on loanfiles.loan_type=loantypes.l_id where file_status='Rejected' and loanfiles.status='active'")->result_array()]);
        $this->footer();
    }
    public function disburseDetails(){
        // print_r($_GET);exit;
        $this->navbar();
        $this->load->view("admin/disburseDetails",["details"=>$this->db->query("select * from loanfiles,loantypes where loanfiles.loan_type=loantypes.l_id and loanfiles.status='active' and loanfiles.f_id='".$_GET["id"]."'")->result_array()]);
        $this->footer();
        // $this->myModel->update("loanfiles",["f_id"=>$id],['file_status'=>"Disbursed","disbursed_date"=>date("d M Y",time())]);
        // redirect(base_url("admin/disbursedFiles/"));
    }
    public function disburseFund($id){
        $_POST['file_status']="Disbursed";$_POST['disbursed_date']=date("d M Y",time());
        $this->myModel->update("loanfiles",["f_id"=>$id],$_POST);
        redirect(base_url("admin/disbursedFiles/"));
    }
    public function disbursedFiles(){
        $this->navbar();
        $this->load->view("admin/disbursedFiles",["disbursedFiles"=>$this->db->query("select * from loanfiles left join loantypes on loanfiles.loan_type=loantypes.l_id where file_status='Disbursed' and loanfiles.status='active'")->result_array()]);
        $this->footer();
    }
    public function viewDisbursedFile($id){
        $this->navbar();
        $this->load->view("admin/viewDisbursedFile",["viewFile"=>$this->myModel->select("loanfiles",["f_id"=>$id])]);
        $this->footer();
    }
    public function activeLoans(){
        $this->navbar();
        $this->load->view("admin/activeLoans",["activeLoans"=>$this->db->query("select * from loanfiles,loantypes where loanfiles
            .f_id=loantypes.l_id and loanfiles.status='active' and loantypes.status='active' and loanfiles.file_status='Disbursed'")->result_array()]);
        $this->footer();
    }
    public function installment($id){
        $this->navbar();
        $this->load->view("admin/installment",["paidInstallments"=>$this->myModel->selectWhere("installments",["f_id"=>$id]),"Installment"=>$this->db->query("select * from loanfiles, loantypes where loanfiles.f_id=loantypes.l_id and loanfiles.status='active' and loantypes.status='active' and loanfiles.f_id='$id'")->result_array()]);
        $this->footer();
    }
    public function saveInstallment($id){
        // print_r($_POST);exit;
        $_POST['f_id']=$id;$_POST['status']='active';$_POST['entry_time']=time();
        $this->myModel->insert("installments",$_POST);
        // $this->myModel->update("loanfiles",['f_id'=>$id],);
        $_SESSION['success']="Installment Received";
        redirect(base_url("admin/installment/$id"));
    }
    public function closeFile($id){
        $this->myModel->update("loanfiles",["f_id"=>$id],["closed_date"=>time(),"file_status"=>"Closed"]);
        echo "<script>history.back()</script>";
        // $this->myModel->disable("loanfiles",["f_id"=>$id]);
    }
    public function closedLoans(){
        $this->navbar();
        $this->load->view("admin/closedLoans",["activeLoans"=>$this->db->query("select * from loanfiles,loantypes where loanfiles
            .f_id=loantypes.l_id and loanfiles.status='active' and loantypes.status='active' and loanfiles.file_status='Closed'")->result_array()]);
        $this->footer();
    }
}
?>