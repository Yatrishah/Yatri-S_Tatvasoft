   <!------------------------------------------------------------------- Model For Login ---------------------------------------------------->
<!-- <?php
include("../controller/login_action.php");

?> -->
    <div class="modal fade" id="exampleModallogin" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content"  href="faqpage.php">
                <div class="modal-header text-center">
                    <h4 class="modal-title" id="staticBackdropLabel" title="Login to Your Account">Login to your account</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"  aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method ="post">
                        
                        <div class="mb-3 form-group icon-textbox">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" title="Email" name="email">
                            <img alt="email" src="../image/user.png" required >
                        </div>
                        <div class="mb-3 form-group icon-textbox">
                            <input type="password" class="form-control" id="exampleFormControlInput2"
                                placeholder="Password" title="Password  " name="password" required>
                            <img alt="Password" src="../image/lock.png">
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked>
                            <label class="form-check-label" for="flexCheckChecked" required>
                                Remember Me
                            </label>
                        </div>
                        <button class="submit-button mb-3" type="submit" title="Login" name="login">Login</button>
                        <div class="text-center mb-2"><a href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModalfpwd" data-bs-dismiss="modal" title="Forgot Password   ">Forgot Password</a></div>
                        <div class="text-center">Don't have an account? <a href="./Registration.php">Create an account</a></div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-------------------------------------------------- End Model --------------------------------------------------------------->

    <!---------------------------------------------- Model For Forgot Password ------------------------------------------------------>

    <div class="modal fade" id="exampleModalfpwd" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel" title="Forgot  Password">Forgot Password</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#">
                        <div class="mb-3 form-group icon-textbox">
                            <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email" title="Email ">
                            <img alt="email" src="image/user.png">
                        </div>
                        
                        <button class="submit-button mb-3" type="submit" title="Login">Login</button>
                        <div class="text-center mb-2"><a href="#" data-bs-toggle="modal"
                            data-bs-target="#exampleModallogin" data-bs-dismiss="modal" title="Login Now">Login now</a></div>
                        </form>
                </div>
            </div>
        </div>
    </div>
    <!-- -----------------------------------------------End Model ----------------------------------------------------------------------->


<!-- --------------------------------------------------modal for tabs with navbar ------------------------------------------------------------  -->

 <div class="modal fade navbar-tmodel" id="exampleModalnavbartoggle" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog modal-dialog-center" style="float: right;">
            <div class="modal-content">
            
        <div class="modal-body tab">
                    <a href="index.php" title="HomePage">HomePage</a>
                     <a href="#"title="Book Now"> Book Now </a>
                    <a href="price.php">Prices & Services</a>
                    <a href="#" title="Warranty">Warranty</a>
                    <a href="#" title="Blog">Blog</a>
                    <a href="contact us.php" title="Contact">Contact</a>
                    <a href="#"data-bs-toggle="modal"
                     data-bs-target="#exampleModallogin" data-bs-dismiss="modal" title="Login">Login</button></a>                    
                     <a href="service provider(6th).php" title="Become a Helper">Become a Helper</a>

            </div>

                <hr>
                <div class ="footer-social1">
                  <a href="https://www.instagram.com/helperlandde/">  <img src="image/instagram.png" class="insta"></a>
                   <a href="https://www.facebook.com/helperDE/"> <img src="image/facebook.png" class="fb" ></a>
                </div>
            </div>
        </div>
</div>
 <!-- --------------------------------------------------End of modal for tabs with navbar ------------------------------------------------------------  -->