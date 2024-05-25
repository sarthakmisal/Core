<?php
class Admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set("Asia/Kolkata");
        if(!isset($_SESSION['admin'])){
            redirect(base_url("adminLogin"));
        }
    }
    private function navbar()
    {
        $this->load->view("admin/partials/navbar");
    }
    private function footer()
    {
        $this->load->view("admin/partials/footer");
    }
    public function index()
    {
        $this->load->view("admin/index.php");
        // echo "Not ready yet";
    }

    // CATEGORY SECTION
    public function category()
    {
        $this->navbar();
        $this->load->view("admin/category", ["category" => $this->MyModel->selectWhere("category", ["status" => "active"])]);
        $this->footer();
    }
    public function save_category()
    {
        $_POST['status'] = "active";
        $_POST['entry'] = date("Y-m-d H:iA", time());
        if (count($this->MyModel->selectWhere("category", ["cat_name" => $_POST['cat_name']])) > 0) {
            print ("<script>alert('Category Already Exists')</script>");
        } else {
            $this->MyModel->saveData("category", $_POST);
        }
        redirect(base_url("admin/category"));
    }
    public function edit_category()
    {
        $this->navbar();
        $this->load->view("admin/editCategory", ["category" => $this->MyModel->selectWhere("category", ["cat_id" => $_GET['id']])]);
        $this->footer();
    }
    public function saveUpdate()
    {
        $this->MyModel->saveUpdate("category", $_POST, ["cat_id" => $_POST['cat_id']]);
        redirect(base_url("admin/category"));
    }
    public function delete_category()
    {
        $this->MyModel->deleteData(["cat_id" => $_GET['id']], "category");
        redirect(base_url("admin/category"));
    }
    public function subCategory()
    {
        $this->navbar();
        $this->load->view("admin/subCategory", ["category" => $this->MyModel->selectWhere("category", ["status" => "active"]), "sub_category" => $this->MyModel->selectWhere("sub_category", ["status" => "active"])]);
        $this->footer();
    }
    public function save_sub_category()
    {
        $_POST['status'] = "active";
        $_POST['entry'] = date("Y-m-d H:iA", time());
        if (count($this->MyModel->selectWhere("sub_category", ["sub_cat_name" => $_POST['sub_cat_name']])) > 0) {
            print ("<script>alert('Already Exists')</script>");
        } else {
            $this->MyModel->saveData("sub_category", $_POST);
        }
        redirect(base_url("admin/subCategory"));
    }
    public function edit_sub_category()
    {
        $this->navbar();
        $this->load->view("admin/editSubCategory", ["category" => $this->MyModel->getData("category"), "sub_category" => $this->MyModel->selectWhere("sub_category", ["sub_cat_id" => $_GET['id']])]);
        $this->footer();
    }
    public function update_sub_category()
    {
        $this->MyModel->saveUpdate("sub_category", $_POST, ["sub_cat_id" => $_GET['id']]);
        redirect(base_url("admin/subCategory"));
    }
    public function delete_sub_category()
    {
        $this->MyModel->deleteData(["sub_cat_id" => $_GET['id']], "sub_category");
        redirect(base_url("admin/subCategory"));
    }

    // PRODUCT SECTION
    public function addProduct()
    {
        $this->navbar();
        $this->load->view("admin/addProduct", ["category" => $this->MyModel->selectWhere("category", ["status" => "active"])]);
        $this->footer();
    }
    public function fetchCategory($id)
    {
        echo json_encode($this->MyModel->selectWhere("sub_category", ["cat_id" => $id]));
    }
    public function saveProduct()
    {
        $fNames = [];
        for ($i = 0; $i < count($_FILES['p_images']['tmp_name']); $i++) {
            $fname = time() . rand(1111, 9999) . $_FILES['p_images']['name'][$i];
            $fNames[] = $fname;
            move_uploaded_file($_FILES['p_images']['tmp_name'][$i], "uploads/" . $fname);
        }
        $_POST['p_images'] = implode("&&", $fNames);
        $_POST['status'] = "active";
        $_POST['entry'] = date("Y-m-d H:iA", time());
        $this->MyModel->saveData("products", $_POST);
        redirect(base_url("admin/addProduct"));
    }
    public function manageProduct()
    {
        $this->navbar();
        $this->load->view("admin/manageProduct", ["products" => $this->MyModel->selectWhere("products", ["status" => "active"])]);
        $this->footer();
    }
    public function editProduct()
    {
        $this->navbar();
        $this->load->view("admin/editProduct", ["category" => $this->MyModel->selectWhere("category", ["status" => "active"]), "product" => $this->MyModel->selectWhere("products", ["p_id" => $_GET['id'], "status" => "active"])]);
        $this->footer();
    }
    public function updateProduct()
    {
        echo "<pre>";
        print_r($_FILES);
        $_POST['entry'] = date("Y-m-d H:iA", time());
        if ($_FILES['p_images']['size'][0]>0) {
            $img=explode("&&",$_POST['p_images']);
            for($i=0;$i<count($img);$i++){
                unlink("uploads/$img[$i]");
            }
            $fNames = [];
            for ($i = 0; $i < count($_FILES['p_images']['tmp_name']); $i++) {
                $fname = time() . rand(1111, 9999) . $_FILES['p_images']['name'][$i];
                $fNames[] = $fname;
                move_uploaded_file($_FILES['p_images']['tmp_name'][$i], "uploads/" . $fname);
            }
            $_POST['p_images'] = implode("&&", $fNames);
        }
        $this->MyModel->saveUpdate("products",$_POST,["p_id"=>$_GET['id']]);
        redirect(base_url("admin/manageProduct"));
    }
    public function deleteProduct()
    {
        $this->MyModel->deleteData(["p_id" => $_GET['id']], "products");
        redirect(base_url("admin/manageProduct"));
    }
    public function manageCarousel(){
        $this->navbar();
        $this->load->view("admin/manageCarousel",["carousel"=>$this->MyModel->getData("carousel")]);
        $this->footer();
    }
    public function saveCarousel(){
        $fname=time().rand(1111,9999).$_FILES['carousel']['name'];
        move_uploaded_file($_FILES['carousel']['tmp_name'],"uploads/$fname");
        $this->MyModel->saveData("carousel",["c_name"=>$fname]);
        redirect(base_url("admin/manageCarousel"));
    }
    public function editCarousel($id){
        $this->navbar();
        $this->load->view("admin/editCarousel",["carousel"=>$this->MyModel->selectWhere("carousel",['c_id'=>$id])]);
        $this->footer();
    }
    public function updateCarousel($id){
        $fname=time().rand(1111,9999).$_FILES['carousel']['name'];$old=$_POST['old'];
        move_uploaded_file($_FILES['carousel']['tmp_name'],"uploads/$fname");
        unlink(base_url()."uploads/".$old);
        $this->MyModel->saveUpdate("carousel",["c_name"=>$fname],['c_id'=>$id]);
        redirect(base_url("admin/manageCarousel"));
    }
    public function deleteCarousel($id){
        $this->db->where(["c_id"=>$id])->delete("carousel");
        redirect(base_url("admin/manageCarousel"));
    }
    public function pendingOrders(){
        $this->navbar();
        $this->load->view("admin/pendingOrders",["orders"=>$this->MyModel->selectWhere("orders",["status"=>"active","order_status"=>"Pending"])]);
        $this->footer();
    }
    public function viewOrderDetails($id){
        $this->navbar();
        $this->load->view("admin/viewOrderDetails",["details"=>$this->db->query("select * from order_details,orders where orders.order_id=$id and order_details.order_id=$id")->result_array()]);
        $this->footer();
    }
    public function dispatchOrder($id){
        $this->MyModel->saveUpdate("orders",['order_status'=>"Dispatched","dispatched_date"=>date("M d Y",time())],["order_id"=>$id]);
        echo "<script>alert('Dispatched Order !!');location.href='".base_url('admin/dispatchedOrders')."'</script>";
    }
    public function rejectOrder($id){
        $this->MyModel->saveUpdate("orders",['order_status'=>"Rejected","dispatched_date"=>date("M d Y",time())],["order_id"=>$id]);
        echo "<script>alert('Rejected Successfully !!');location.href='".base_url('admin/rejectedOrders')."'</script>";
    }
    public function dispatchedOrders(){
        $this->navbar();
        $this->load->view("admin/dispatchedOrders",["orders"=>$this->MyModel->selectWhere("orders",["status"=>"active","order_status"=>"Dispatched"])]);
        $this->footer();
    }
    public function rejectedOrders(){
        $this->navbar();
        $this->load->view("admin/rejectedOrders",["orders"=>$this->db->query("select * from orders where orders.order_status='Rejected' or orders.order_status='Unable to Deliver'")->result_array()]);
        $this->footer();
    }
    public function unableDeliverOrder($id){
        $this->MyModel->saveUpdate("orders",['order_status'=>"Unable to Deliver","dispatched_date"=>date("M d Y",time())],["order_id"=>$id]);
        echo "<script>alert('Rejected Successfully !!');location.href='".base_url('admin/rejectedOrders')."'</script>";
    }
    public function deliverOrder($id){
        $this->MyModel->saveUpdate("orders",['order_status'=>"Delivered","delivered_date"=>date("M d Y",time())],["order_id"=>$id]);
        echo "<script>alert('Delivered Successfully !!');location.href='".base_url('admin/deliveredOrders')."'</script>";
    }
    public function deliveredOrders(){
        $this->navbar();
        $this->load->view("admin/deliveredOrders",["orders"=>$this->MyModel->selectWhere("orders",["status"=>"active","order_status"=>"Delivered"])]);
        $this->footer();
    }
    function adminLogout(){
        // echo $_SESSION['admin'];exit;
        unset($_SESSION['admin']);
        redirect(base_url('adminLogin'));
    }
}
?>