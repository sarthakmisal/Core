<?php
class User extends CI_Controller
{
    private function navbar()
    {
        $data = $this->MyModel->selectWhere("category", ["status" => "active"]);
        foreach ($data as $key => $row)
            $data[$key]['sub_categories'] = $this->MyModel->selectWhere("sub_category", ["cat_id" => $row['cat_id'], "status" => "active"]);
        $this->load->view("user/partials/navbar.php", ["category" => $data]);

    }
    private function footer()
    {
        $this->load->view("user/partials/footer.php");
    }
    public function index()
    {
        $this->navbar();
        $this->load->view("user/index.php", ["sale40"=>$this->MyModel->selectWhere("products",["p_label"=>"Upto 40% OFF"]),"sale30"=>$this->MyModel->selectWhere("products",["p_label"=>"Upto 30% OFF"]),"sale20"=>$this->MyModel->selectWhere("products",["p_label"=>"Upto 20% OFF"]),"sale10"=>$this->MyModel->selectWhere("products",["p_label"=>"Upto 10% OFF"]),"featuredProducts"=>$this->MyModel->selectWhere("products",["p_label"=>"Featured"]),"carousel" => $this->MyModel->getData('carousel'), "trendingProducts" => $this->MyModel->selectWhere("products", ["p_label" => "Trending"])]);
        $this->footer();
    }
    public function viewProduct($id)
    {
        $this->navbar();
        $this->load->view("user/viewProduct", ["cart"=>$this->MyModel->selectWhere("cart",["p_id"=>$id,"u_id"=>$_SESSION['user']['u_id']]),"product" => $this->MyModel->selectWhere("products", ['p_id' => $id])]);
        $this->footer();
    }
    public function loginPage()
    {
        $this->navbar();
        $this->load->view("user/partials/loginPage");
        $this->footer();
    }
    public function registerPage()
    {
        $this->navbar();
        $this->load->view("user/partials/registerPage");
        $this->footer();
    }
    public function registerUser()
    {
        $data = $this->MyModel->selectWhere("users", ["u_phone" => $_POST['u_phone']]);
        if (count($data) == 0) {
            $this->MyModel->saveData("users", $_POST);
            $_SESSION['message'] = "Registration Successful!!";
            $_SESSION['user'] = $data[0];
        } else
            $_SESSION['errorMessage'] = "Phone Already Exists, Go for LogIn";
        // redirect(base_url());
        echo "<script>location.href='" . base_url() . "'</script>";
    }
    public function loginProcess()
    {
        $data = $this->MyModel->selectWhere("users", ["u_phone" => $_POST['u_phone'], "u_pass" => $_POST['u_pass']]);
        if (isset($_POST['u_phone']) && isset($_POST['u_pass'])) {
            if (count($data) == 0) {
                $_SESSION['errorMessage'] = "Invalid Credentials!!";
                echo "<script>location.href='" . base_url('user/loginPage') . "'</script>";
            } else {
                $_SESSION['message'] = "Welcome, ".$data[0]['u_name']."!!";
                $_SESSION['user'] = $data[0];
            }
        }
        echo "<script>location.href='" . base_url() . "'</script>";
    }
    public function logOut(){
        unset($_SESSION['user']);
        redirect(base_url());
    }

    // USER CART
    public function addtoCart($id){
        if(!isset($_SESSION['user'])){
            $_SESSION['errorMessage']="LogIn Required";
            redirect(base_url('user/loginPage'));
        }
        $data=$this->MyModel->selectWhere("cart",["p_id"=>$id,"u_id"=>$_SESSION['user']['u_id']]);
        if(count($data)==0){
            $this->MyModel->saveData("cart",["p_id"=>$id,"u_id"=>$_SESSION['user']['u_id'],"quantity"=>1]);
            $_SESSION['message']="Added to Cart";
        }
        else    $_SESSION['errorMessage']="Already in Cart";
        redirect(base_url('user/viewProduct/').$id);
    }

    public function increaseQuantity($c_id){
        $qnt=$this->MyModel->selectWhere("cart",['c_id'=>$c_id]);
        if($qnt[0]['quantity']<6){
            $this->MyModel->saveUpdate("cart",["quantity"=>++$qnt[0]['quantity']],['c_id'=>$c_id]);
        }
        echo json_encode($qnt[0]['quantity']);
    }
    public function decreaseQuantity($c_id){
        $qnt=$this->MyModel->selectWhere("cart",['c_id'=>$c_id]);
        if($qnt[0]['quantity']>1){
            $this->MyModel->saveUpdate("cart",["quantity"=>--$qnt[0]['quantity']],['c_id'=>$c_id]);
        }
        echo json_encode($qnt[0]['quantity']);
    }
    public function userCart(){
        if(!isset($_SESSION['user']))   redirect(base_url("user/loginPage"));
        $this->navbar();$u_id=$_SESSION['user']['u_id'];
        $data=["cart"=>$this->db->query("select * from cart,products where cart.p_id=products.p_id and cart.u_id=$u_id")->result_array()];
        $this->load->view("user/userCart",$data);
        $this->footer();
    }
    public function removeFromCart($c_id){
        $this->db->where(["c_id"=>$c_id])->delete("cart");
        redirect(base_url('user/userCart/'.$c_id));
    }
    public function confirmAddress(){
        $this->navbar();
        $this->load->view("user/confirmAddress");
        $this->footer();
    }
    public function placeOrder(){echo "<pre>";
        // print_r($_POST);
        $cart=$this->db->query("select * from cart,products where cart.p_id=products.p_id and cart.u_id='".$_SESSION['user']['u_id']."'")->result_array();
        // print_r($cart);exit;
        $totalPrice=0;
        foreach($cart as $key=>$row):
            $totalPrice+=$row['p_price']*$row['quantity'];
        endforeach;
        $_POST['amount_payable']=$totalPrice;
        $_POST['order_date']=date("Y-m-d",time());
        $_POST['order_status']="Pending";
        $_POST['status']="active";
        $_POST['u_id']=$_SESSION['user']['u_id'];
        // $product=[];
        $order_id=$this->MyModel->saveData("orders",$_POST);
        foreach($cart as $key=>$row){
            $product['order_id']=$order_id;
            $product['u_id']=$_SESSION['user']['u_id'];
            $product['p_id']=$row['p_id'];
            $product['p_name']=$row['p_name'];
            $product['p_price']=$row['p_price'];
            $product['p_label']=$row['p_label'];
            $product['p_desc']=$row['p_desc'];
            $product['p_images']=$row['p_images'];
            $product['quantity']=$row['quantity'];
            $product['status']="active";
            $this->MyModel->saveData("order_details",$product);
        }
        $this->MyModel->db->where(["u_id"=>$_SESSION['user']['u_id']])->delete("cart");
        $_SESSION['message']="Order Placed !!";
        redirect(base_url('user/myOrders'));
    }
    public function myOrders(){
        $this->navbar();
        $this->load->view("user/myOrders",["orders"=>$this->MyModel->selectWhere("orders",["status"=>"active","u_id"=>$_SESSION['user']['u_id']])]);
        $this->footer();
    }
    public function openInvoice($id){
        $this->navbar();
        // $this->load->view("user/openInvoice",['details'=>$this->MyModel->selectWhere("order_details",["order_id"=>$id])]);
        $this->load->view("user/openInvoice",['details'=>$this->db->query("select * from orders inner join order_details on orders.order_id=order_details.order_id")->result_array()]);
        $this->footer();
    }

}
?>