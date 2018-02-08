<?php
session_start();
if (!isset($_SESSION['incident'])) { 
    $_SESSION['incident'] = array(); 
    
} 
var_dump($_SESSION);

require('../model/database.php');
require('../model/customer_db.php');
require('../model/product_db.php');
require('../model/incident_db.php');

require('../model/database_oo.php');
require('../model/technician.php');
require('../model/technician_db.php');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'select_incident';
    }
}

//instantiate variable(s)
$email = '';

switch ($action) {
    case 'display_customer_get':
        include('customer_get.php');
        break;
    case 'get_customer':
        $email = filter_input(INPUT_POST, 'email');
        $customer = get_customer_by_email($email);
        $products = get_products_by_customer($email);
        include('incident_create.php');
        break;
    case 'select_incident':
        $incidents = unassigned_tech();
        $message = "This incident was added to our database.";
        include('incident_select.php');
        break;
    case 'select_tech_for_incident':
        $message = "Selecting tech.";
        $technicians = TechnicianDB::getTechnicians();
        include('select_tech_for_incident.php');
        break;
    case 'create_incident':
        $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
        $product_code = filter_input(INPUT_POST, 'product_code');
        $title = filter_input(INPUT_POST, 'title');
        $description = filter_input(INPUT_POST, 'description');
        add_incident($customer_id, $product_code, $title, $description);
        $message = "This incident was added to our database.";
        include('incident_create.php');
        break;
//    case 'incident_select':
//        $technicians = TechnicianDB::getTechnicians();
//        include('select_tech.php');
//        break;
    case 'assign_incident':
        //$tech_name = filter_input(INPUT_POST, 'name');
        //$technician_id = $_SESSION['incident']['key2'];
        
        $incident = get_incident_by_id($_SESSION['incident']['key1']);
        
        //$message = "Tech name is empty";
        include('incident_assign.php');
        
        break;
    case 'assigned':
        include('assigned_incidnet.php');
        break;
    

//                if (empty($tech_name)){
//                    
//                }
//                else{
//                    $message = "Tech name is empty";
//                    update_incident($tech_id, $inci);
//                    include('incident_select.php');
//                }
}
?>