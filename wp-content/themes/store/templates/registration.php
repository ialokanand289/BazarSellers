<?php

  //Template Name: Registration Page
  get_header();
  // echo $_SERVER['DOCUMENT_ROOT'];


?>

<div class="container my-5">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5 ">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>



              <div class="form-outline mb-4">
                <label class="form-label" for="form3Example1cg">Full Name</label>
                <input type="text" id="name" name="user_nicename" class="form-control form-control-lg" />
                <div id="name_error" style="display: none; color:red">
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="form3Example3cg">Your Email-Id</label>
                  <input type="email" id="email" name="user_email" class="form-control form-control-lg" />
                  <div id="email_error" style="display: none; color:red">
                  </div>

                  <div class="form-outline mb-4">
                    <label class="form-label" for="form3Example4cg">Password</label>
                    <input type="password" id="password" name="user_pass" class="form-control form-control-lg" />
                    <div id="pass_Error" style="display: none; color:red">
                    </div>

                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example4cdg">confirm your password</label>
                      <input type="password" id="cpassword" name="cpassword" class="form-control form-control-lg" />
                      <div id="cpass_Error" style="display: none; color:red">
                      </div>
                    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example4cdg">First Name:</label>
                      <input type="text" id="first_name" name="first_name" class="form-control form-control-lg" />
                      <div id="cpass_Error" style="display: none; color:red">
                    </div>
                    
                    <div class="form-outline mb-4">
                      <label class="form-label" for="form3Example4cdg">Last Name:</label>
                      <input type="text" id="last_name" name="last_name" class="form-control form-control-lg" />
                      <div id="cpass_Error" style="display: none; color:red">
                    </div>




                      <div id="info" style="display: none;">
                        You are successfully signup.
                      </div>
                      <div id="error" style="display: none; color:red">

                      </div>

                      <div class="form-outline mb-4">
                        <button type="button" id="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                      </div>
                    </div>


                    <script>
                      jQuery(document).ready(function() {
                        var emailExp = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
                        jQuery('#submit').click(function(e) {
                          e.preventDefault();
                          var name = jQuery("#name").val();
                          var email = jQuery("#email").val();
                          var password = jQuery("#password").val();
                          var cpassword = jQuery("#cpassword").val();
                          var fname = jQuery("#first_name").val();
                          var lname = jQuery("#last_name").val();
                          var error = 0;
                          var url = '<?php echo get_template_directory_uri() ?>';
                          // console.log(url);

                          if (name == "") {
                            jQuery("#name_error").show();
                            jQuery("#name_error").text('Please fill out this field')
                            jQuery("#name_error").delay(3000).fadeOut();
                            error++;
                          }
                          if (email == "") {
                            jQuery("#email_error").show();
                            jQuery("#email_error").text('Please fill out this field')
                            jQuery("#email_error").delay(3000).fadeOut();
                            error++;
                          }
                          if (!email.match(emailExp)) {
                            jQuery("#email_error").show();
                            jQuery("#email_error").text('Email format is invalid')
                            jQuery("#email_error").delay(3000).fadeOut();
                            error++;
                          }
                          if (fname == "") {
                            jQuery("#name_error").show();
                            jQuery("#name_error").text('Please fill out this field')
                            jQuery("#name_error").delay(3000).fadeOut();
                            error++;
                          }
                          if (lname == "") {
                            jQuery("#name_error").show();
                            jQuery("#name_error").text('Please fill out this field')
                            jQuery("#name_error").delay(3000).fadeOut();
                            error++;
                          }
                          if (password == "") {
                            jQuery("#pass_Error").show();
                            jQuery("#pass_Error").text('Please fill out this field')
                            jQuery("#pass_Error").delay(3000).fadeOut();
                            error++;
                          }
                          if (cpassword == "") {
                            jQuerjQuery("#cpass_Error").show();
                            jQuerjQuery("#cpass_Error").text('Please fill out this field')
                            jQuerjQuery("#cpass_Error").delay(3000).fadeOut();
                            error++;
                          }
                          if (cpassword != password) {
                            jQuery("#error").show();
                            jQuery("#error").text('Password and confirm password should be same')
                            jQuery("#error").delay(3000).fadeOut();
                            error++;
                          }

                          if (error == 0) {
                            jQuery.ajax({
                              url: '<?php echo get_template_directory_uri() ?>/templates/ajax-registration.php',
                              type: "post",
                              data: {
                                action: 'register',
                                name: name,
                                email: email,
                                password: password,
                                cpassword: cpassword,
                                fname: fname,
                                lname: lname
                              },

                              success: function(data) {
                                jQuery("#name").val("");
                                jQuery("#email").val("");
                                jQuery("#password").val("");
                                jQuery("#cpassword").val("");
                                jQuery("#first_name").val("");
                                jQuery("#last_name").val("");


                                jQuery("#info").show();
                                jQuery("#info").delay(3000).fadeOut();
                                // alert('inserted successfully')
                              }
                            })

                          }


                        })
                      })
                    </script>
<?php get_footer(); ?>