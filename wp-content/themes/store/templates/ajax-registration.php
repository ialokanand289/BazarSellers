<?php
    require_once ($_SERVER['DOCUMENT_ROOT'].'/BazarSellers/wp-load.php');
    global $wpdb;

    if (isset($_POST['action']) && $_POST['action'] == 'register') {
        // echo '<pre>';
        // print_r($_POST);
        // die();
        $data = wp_create_user($_POST['name'], $_POST['password'], $_POST['email'],);
        
        $datameta = array(
            'first_name' => $_POST['fname'],
            'last_name' => $_POST['lname']
        );

        foreach($datameta as $key => $value){
            add_user_meta($data, $key, $value);
        }

    


}