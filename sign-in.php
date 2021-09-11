<?php include "common/admin-panel-header.php" ?>
<div class="my-5 sign-in">
    <div class="mx-auto col-lg-8">
        <div class="panel light-box-shadow">
            <div class="panel-body wizard-content">
                <form id="signInForm" action="#" class="tab-wizard wizard-circle wizard clearfix">
                    <h6>Account</h6>
                    <section>
                        <div class="row">
                            <div class="col-sm-12">
                                <p>Choose whether you want to use the service as a private landlord, landlord organized
                                    in a company, or as a tenant.</p>
                                <div class="text-center mb-4">
                                    <div class="btn-group btn-group-toggle landlord-choose-options" data-toggle="buttons">
                                        <label class="btn landlord-group-btns active d-flex flex-column">
                                            <input type="radio" name="options" id="privlord" autocomplete="off"
                                                   value="Private landlord" checked/>
                                            <span class="fa fa-home"></span>
                                            <span class="text">Private landlord</span>
                                        </label>
                                        <label class="btn landlord-group-btns d-flex flex-column">
                                            <input type="radio" name="options" id="lanOrgan" autocomplete="off"
                                                   value="Landlord organized in company"/>
                                            <span class="fa fa-building"></span>
                                            <span class="text">Landlord organized in company</span>
                                        </label>
                                        <label class="btn landlord-group-btns d-flex flex-column">
                                            <input type="radio" name="options" id="lanTenant" autocomplete="off"
                                                   value="Tenant"/>
                                            <span class="fa fa-user"></span>
                                            <span class="text">Tenant</span>
                                        </label>
                                    </div>
                                </div>
                                <div class="my-1">
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input"
                                               id="customControlAutosizing">
                                        <label class="custom-control-label" for="customControlAutosizing">I agree to the
                                            Terms of Use and the Privacy Statement for the use of Presis Utleie's
                                            digital services</label>
                                    </div>
                                    <div class="custom-control custom-checkbox mr-sm-2">
                                        <input type="checkbox" class="custom-control-input"
                                               id="customControlAutosizing1">
                                        <label class="custom-control-label" for="customControlAutosizing1">Yes please, I
                                            would like to receive information and newsletters from Presis Utleie by
                                            e-mail based on my areas of interest. I can unsubscribe from this again at
                                            any time.</label>
                                    </div>
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
                                            <input type="radio" name="optionsRadios" id="optionsRadios1"
                                                   value="option1">
                                            Option one is this and that&mdash;be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2"
                                                   value="option2">
                                            Option two can be something else and selecting it will deselect option one
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3"
                                                   value="option3">
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

                    <h6>Warning</h6>
                    <section>
                        <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label>This is the question that is being asked to the user?</label>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1"
                                                   value="option1">
                                            Option one is this and that&mdash;be sure to include why it's great
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2"
                                                   value="option2">
                                            Option two can be something else and selecting it will deselect option one
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios3"
                                                   value="option3">
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
                        <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class=""> <label
                            for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                    </section>
                </form>
            </div>
        </div>
    </div>
</div>
<?php include "common/admin-panel-footer.php" ?>
