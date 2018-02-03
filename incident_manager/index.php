<?php
require('../model/database.php');
require('../model/customer_db.php');
require('../model/product_db.php');
require('../model/incident_db.php');

require('../model/fields.php');
require('../model/validate.php');

// Create Validate object
$validate = new Validate();
$fields = $validate->getFields();
$fields->addField('customer_id');
$fields->addField('product_code');
$fields->addField('date_opened');
$fields->addField('title');
$fields->addField('description');
//$fields->addField('postal_code');
//$fields->addField('phone');
//$fields->addField('email');
//$fields->addField('password');

$action = filter_input(INPUT_POST, 'action');
if ($action === NULL) {
    $action = filter_input(INPUT_GET, 'action');
    if ($action === NULL) {
        $action = 'select_incident';
    }
}

//instantiate variable(s)
$email = '';
$incidents = array();

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
        $message = "This incident was added to our database.";
        include('incident_select.php');
        break;
    case 'select_tech_for_incident':
        $message = "Selecting tech.";
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
    case 'incident_select':
        $customer_id = filter_input(INPUT_POST, 'customer_id', FILTER_VALIDATE_INT);
        
//        $product_code = filter_input(INPUT_POST, 'product_code');
//        $title = filter_input(INPUT_POST, 'title');
//        $description = filter_input(INPUT_POST, 'description');
//        add_incident($customer_id, $product_code, $title, $description);
//        $message = "This incident was added to our database.";
//        include('incident_create.php');
        break;

}
?>