<?php
require_once($_SERVER['DOCUMENT_ROOT'] . '/BazarSellers/wp-load.php');
global $wpdb;
if (isset($_POST['action']) && $_POST['action'] == 'check_email_if_exists') {

    // $data=$_POST;
    // $user_data_Obj = get_user_by('email', $data['email']);

    // $user_data_Ary = json_decode(json_encode($user_data_Obj), true);
    // echo '<pre>';
    // print_r($user_data_Ary);
    // echo '</pre>';
    // die();
    $error = false;
    if (!empty($_POST)) {

        // wp_authenticate($_POST['email'],$_POST['password']); 
        $userlog = array(
            'user_login' => $_POST['email'],
            'user_password' => $_POST['password'],
        );
        $user = wp_signon($userlog);
        if (is_wp_error($user)) {
            echo $user->get_error_message();
        } else {

            echo "sucess";
        }
    }
}






        
    
        // $row = $wpdb->wp_signon($_POST['password'], $_POST['email']);
