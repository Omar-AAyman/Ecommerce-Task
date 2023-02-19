<?php
$title = "Signup";
include_once "Layouts/header.php";
include_once "Layouts/breadcrumb.php";
include_once "Layouts/navbar.php";
// session_start();
// print_r ($_SESSION['errors']);
// die;
?>




<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a data-toggle="tab" href="#lg2">
                            <h4> <?= $title ?> </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg2" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="App/Http/Post/signup.php" method="post">

                                        <div class="form-group ">
                                            <label for="first-name">First Name</label>
                                            <input class="mb-4" type="text" name="first_name" id="first-name">

                                            <label for="last-name">Last Name</label>
                                            <input class="mb-4" type="text" name="last_name" id="last-name">
                                        </div>

                                        <div class="form-group">

                                            <label for="phone">Phone Number</label>
                                            <input class="mb-4" type="number" name="phone" id="phone">

                                            <label for="email">Email</label>
                                            <input class="mb-4" type="email" name="email" id="email">
                                        </div>

                                        <div class="form-group">

                                            <label for="password">Password</label>
                                            <input class="mb-4" type="password" name="password" id="password">

                                            <label for="password-confirmation">Password Confirmation</label>
                                            <input class="mb-4" type="password" name="password_confirmation" id="password-confirmation">
                                        </div>

                                        <div class="form-group">
                                            <label for="gender">Gender</label>
                                            <select name="gender" class="form-control" id="gender">
                                                <option value="m">Male</option>
                                                <option value="f">Female</option>
                                            </select>
                                        </div>

                                        <div class="button-box mt-5">
                                            <button type="submit"> <span> <?= $title ?></span> </button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<?php
include_once "Layouts/footer.php";
include_once "Layouts/footer-scripts.php";

?>