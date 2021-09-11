<?php include "common/admin-panel-header.php" ?>
<div class="sign-in">
    <div>
        <div class="container">
            <div class="panel">
                <div class="panel-body wizard-content">
                    <form id="example-form" action="#" class="tab-wizard wizard-circle wizard clearfix">
                        <h6>Account</h6>
                        <section>
                            <br/>
                            <div class="row">
                                <div class="col-sm-4 col-sm-push-4">
                                    <div class="form-group">
                                        <label for="userName-2">User name </label>
                                        <input id="userName-2" name="userName" type="text" value="Les" class="form-control ">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h6>Profile</h6>
                        <section>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="name-2">First name</label>
                                        <input id="name-2" name="name" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="surname-2">Last name</label>
                                        <input id="surname-2" name="surname" type="text" class="form-control">

                                    </div>
                                    <div class="form-group">

                                        <label for="email-2">Email</label>
                                        <input id="email-2" name="email" type="text" class="form-control email">
                                    </div>

                                </div>
                            </div>
                        </section>

                        <h6>Warning</h6>
                        <section>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-8">
                                    <div class="form-group">
                                        <label>This is the question that is being asked to the user?</label>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
                                                Option one is this and that&mdash;be sure to include why it's great
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" >
                                                Option two can be something else and selecting it will deselect option one
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" >
                                                Option three. This is just a demo.
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-2"></div>
                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="name-2">First name</label>
                                        <input id="name-2" name="name" type="text" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="surname-2">Last name</label>
                                        <input id="surname-2" name="surname" type="text" class="form-control">

                                    </div>


                                </div>
                                <div class="col-sm-4">

                                    <div class="form-group">
                                        <label for="age-2">Age</label>
                                        <input id="age-2" name="age" type="text" class="form-control number">

                                    </div>
                                    <div class="form-group">

                                        <label for="email-2">Email</label>
                                        <input id="email-2" name="email" type="text" class="form-control email">
                                    </div>
                                </div>
                            </div>
                        </section>

                        <h6>Finish</h6>
                        <section>
                            <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class=""> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                        </section>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include "common/admin-panel-footer.php" ?>