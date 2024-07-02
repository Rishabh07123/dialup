<nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="min-height:5.5rem background-color: #ffffff; box-shadow: 0 2px 4px rgba(0,0,0,0.1);" data-bs-theme="dark">
  <div class="container-fluid">
    <div class="mylogo">
            <img src="assets/images/logo.png" class="ms-2" alt="logo">
    </div>
     
    <button class="navbar-toggler bg-dark" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        
      <ul class="navbar-nav" style="margin-left:auto;">
             <li class="nav-item mt-2" style="margin-left:auto;">
                <a href="index.html"  class="btn btn-primary">Home</a>
            </li>
            <li class="nav-item mt-2" style="margin-left:auto;">
                <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#loginModal" data-bs-whatever="@mdo">Login</button>
            </li>
            <li class="nav-item mt-2" style="margin-left:auto;">
                <button type="button" class="btn btn-primary ms-2" data-bs-toggle="modal" data-bs-target="#signupModal" data-bs-whatever="@mdo">Signup</button>
            </li>
      </ul>
    
    </div>
  </div>
  
</nav>











<?php $otp = rand(000000, 999990); ?>

<!-- login pop-up -->

<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="loginModalLabel">Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        <div class="alert alert-danger" id="login_msg"></div>
          <div class="mb-3">
            <label for="email" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="login_email" required>
          </div>
          <div class="mb-3" id="input_otp_box">
            <label for="input_otp" class="col-form-label">OTP:</label>
            <input type="text" class="form-control" id="input_otp" required>
          </div>
          <input type="hidden" id="login_otp" value="<?php echo $otp; ?>">
          
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" id="verifyOTPbtn" onclick="verify()">Submit</button>
        <button type="button" class="btn btn-secondary" id="clbtn" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="logbtn" onclick="login()">Login</button>
      </div>
    </div>
  </div>
</div>


<!-- signup pop-up -->

<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="signupModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="signupModalLabel">Signup</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
        <div class="alert alert-danger" id="signup_msg"></div>
          <div class="mb-3">
            <label for="name" class="col-form-label">Name:</label>
            <input type="text" class="form-control" id="signup_name" placeholder="Enter name">
          </div>
          <div class="mb-3">
            <label for="mobile" class="col-form-label">Mobile No:</label>
            <input type="text" class="form-control" id="signup_mobile" placeholder="Enter phone no">
          </div>
          <div class="mb-3">
            <label for="email" class="col-form-label">Email:</label>
            <input type="text" class="form-control" id="signup_email" placeholder="Enter email id">
          </div>
          <div class="mb-3" id="signup_otp_box">
            <label for="input_otp" class="col-form-label">OTP:</label>
            <input type="text" class="form-control" id="input_otp" required>
          </div>
          <input type="hidden" id="signup_otp" value="<?php echo $otp; ?>">
        </form>
      </div>
      <div class="modal-footer">
      <button type="button" class="btn btn-primary" id="verifysignupOTPbtn" onclick="verify_signup()">Submit</button>
        <button type="button" class="btn btn-secondary" id="signupclbtn" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id="signupbtn" onclick="signup()">Signup</button>
      </div>
    </div>
  </div>
</div>
