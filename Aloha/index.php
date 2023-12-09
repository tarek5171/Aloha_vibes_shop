<?php
require_once ("include/initialize.php");
// if(isset($_SESSION['IDNO'])){
// 	redirect(web_root.'index.php');

// }

$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';




switch ($view) {
 

	case 'product' :
        $title="Products";	
		$content='menu.php';		
		break;
 	case 'cart' :
        $title="Cart List";	
		$content='cart.php';		
		break;
 	case 'profile' :
        $title="Profile";	
		$content='customer/profile.php';		
		break;

	case 'trackorder' :
        $title="Track Order";	
		$content='customer/trackorder.php';		
		break;

	case 'orderdetails':
    if (!isset($_SESSION['orderdetails']) || !is_array($_SESSION['orderdetails'])) {
        $_SESSION['orderdetails'] = array();
    }
    $content = 'customer/orderdetails.php';

    $orderDetailsCount = count($_SESSION['orderdetails']);
    if ($orderDetailsCount > 0) {
        $title = 'Cart List' . '| <a href="">Order Details</a>';
    }
    break;

case 'billing':
    if (!isset($_SESSION['billingdetails']) || !is_array($_SESSION['billingdetails'])) {
        $_SESSION['billingdetails'] = array();
    }
    $content = 'customer/customerbilling.php';

    $billingDetailsCount = count($_SESSION['billingdetails']);
    if ($billingDetailsCount > 0) {
        $title = 'Cart List' . '| <a href="">Billing Details</a>';
    }
    break;


	case 'contact' :
        $title="Contact Us";	
		$content='contact.php';		
		break;
 	case 'single-item' :
        $title="Product";	
		$content='single-item.php';		
		break;

	case 'recoverpassword' :
        $title="Recover Password";	
		$content='passwordrecover.php';		
		break;
	default :
	    $title="Home";	
		$content ='home.php';		

}

       
    
 
require_once("theme/templates.php");
 

?>

