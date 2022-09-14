<!DOCTYPE html>
<html lang="en">


<!-- These are dynamic variables -->

<?php  $page_title="Login Page";?>
<?php  $description = ""; ?> 

<!-- End -->



<?php include "./includes/headertwo.php" ?>

<section class="mt-5">
    <div class="container customCon">
        <div class="row justify-content-center">
            <div class="col-lg-6 formCol">

                <div class="formTab" role="tabpanel">
                    <ul class="nav navTabs" role="tablist">
                        <li role="presentation"><a href="#Login" class="active"  aria-controls="home" role="tab" data-toggle="tab" aria-expanded="false">Login</a></li>
                        <li role="presentation"><a href="#SignUp" aria-controls="profile" role="tab" data-toggle="tab" aria-expanded="false">Sign up</a></li>
                    </ul>
                    <div class="tab-content tabContent tabs">
                        <div role="tabpanel" class="tab-pane fade in active formBox" id="Login">
                            <form action="">
                                <h4>Login</h4>
                                    <input type="email" class="form-control mt-4" placeholder="Email address" required>
                                    <input type="password" class="form-control mt-3" placeholder="Password" required>
                                    <a href="">Forget Password?</a>
                                    <button type="submit">Login</button>
                                    <!-- <h5>Not a member? <a href="#SignUp">Signup now</a></h5> -->
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade formBox" id="SignUp">
                            <form action="">
                                <h4>Sign up</h4>
                                    <input type="text" class="form-control mt-4" placeholder="Full Name" required>
                                    <input type="email" class="form-control mt-3" placeholder="Email address" required>
                                    <input type="password" class="form-control mt-3" placeholder="Password" required>
                                    <input type="password" class="form-control mt-3" placeholder="Confirm Password" required>
                                    <button type="submit">Sign up</button>
                                    <!-- <h5>Already a member? <a href="">Login now</a></h5> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include './includes/footertwo.php'?>
</body>

</html>