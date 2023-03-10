<?php
$title = "Verification Code";
include_once "Layouts/header.php";
// include_once "Layouts/breadcrumb.php";
// include_once "Layouts/navbar.php";
?>




<div class="login-register-area ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 ml-auto mr-auto">
                <div class="login-register-wrapper">
                    <div class="login-register-tab-list nav">
                        <a class="active" data-toggle="tab" href="#lg1">
                            <h4> <?= $title ?> </h4>
                        </a>
                    </div>
                    <div class="tab-content">
                        <div id="lg1" class="tab-pane active">
                            <div class="login-form-container">
                                <div class="login-register-form">
                                    <form action="#" method="post">
                                        <input type="text" name="verification_code" placeholder="Enter Your Code">
                                        <div class="button-box">
                                            <button type="submit"><span>Verify</span></button>
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




    <?php
    // include_once "Layouts/footer.php";
    include_once "Layouts/footer-scripts.php";

    ?>