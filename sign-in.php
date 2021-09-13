<?php include "common/admin-panel-header.php" ?>
<div class="admin-main-content">
    <div class="col-xl-4 col-lg-6 col-sm-8 col-11 px-0 my-5 mx-auto sign-in light-box-shadow">
        <div class="sign-in-block-header">
            <div class="sign-in-block-header-inner">
                <p class="mb-2 text-white">Welcome!</p>
                <p class="mb-0 text-white">Please log in to your user account at<br><b>Garantihuset AS</b></p>
            </div>
            <div class="PolygonRuler"><svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg" class="PolygonRuler__SVG"><polygon points="2560 0 2560 100 0 100" class="PolygonRuler__Polygon PolygonRuler__Polygon--fill-white"></polygon></svg></div>
        </div>
        <form id="signInForm" action="#">
            <div class="form-group">
                <label for="userEmail">Email<span class="required"> *</span></label>
                <input id="userEmail" name="email" type="text" class="form-control"
                       placeholder="example@gmail.com">
            </div>
            <div class="form-group">
                <label for="userPassword">Password<span class="required"> *</span></label>
                <input id="userPassword" name="password" type="text" class="form-control"
                       placeholder="Password">
            </div>
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input"
                       id="remMe">
                <label class="custom-control-label" for="remMe">Remember me</label>
            </div>
            <div align="center" class="my-4">
                <a href="#" class="btn btn-bg">Sign in</a>
            </div>
            <div class="d-flex flex-wrap justify-content-between">
                <a href="./forget-password.php" class="btn p-0">Forgot your password?</a>
                <a href="./sign-up.php" class="btn p-0">Create new account</a>
            </div>
        </form>
    </div>
</div>
<?php include "common/admin-panel-footer.php" ?>
