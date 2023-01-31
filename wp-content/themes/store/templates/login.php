<?php
//Template Name: Log In Page
get_header();

?>

<div class="container my-5">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5 ">
              <h2 class="text-uppercase text-center mb-5">Log In Here</h2>

              <div class="container">

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Your Email-Id:</label>
                  <input type="email" id="email" name="user_email" class="form-control form-control-lg" />
                  <div id="email_error" style="display: none; color:red">
                  </div>
                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                    <input type="password" id="password" name="user_pass" class="form-control form-control-lg" />
                    <div id="pass_Error" style="display: none; color:red">
                    </div>


                    <div id="info" style="display: none;">
                      You Are Successfully Login.
                    </div>
                    <div id="error" style="display: none; color:red">

                    </div>

                    <div class="form-outline mb-4">
                      <button type="button" id="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Log In</button>
                    </div>
                  </div>
                </div>

                <script>
                  jQuery(document).ready(function() {
                    jQuery('#submit').click(function(e) {
                      e.preventDefault();
                      var email = jQuery('#email').val();
                      var password = jQuery('#password').val();
                      var error = 0;
                      var url = '<?php echo get_template_directory_uri() ?>';
                      // console.log(url);


                      if (email == "") {
                        jQuery("#email_error").show();
                        jQuery("#email_error").text('Please fill out this field')
                        jQuery("#email_error").delay(3000).fadeOut();
                        error++;
                      }

                      if (password == "") {
                        jQuery("#pass_Error").show();
                        jQuery("#pass_Error").text('Please fill out this field')
                        jQuery("#pass_Error").delay(3000).fadeOut();
                        error++;
                      }

                      if (error == 0) {
                        jQuery.ajax({
                          url: '<?php echo get_template_directory_uri() ?>/templates/ajax-login.php',
                          type: 'POST',
                          data: {
                            action: 'check_email_if_exists',
                            email: email,
                            password: password
                          },

                          success: function(data) {
                          
                            
                            // console.log(data);

                            if(data == "sucess"){
                              jQuery("#info").show();
                              
                              jQuery("#info").delay(3000).fadeOut();
                              window.location.href='<?= site_url()?>/index.php/home';
                            }
                             
                        
                          
                          }
                        })
                      }
                    })
                  })
                </script>