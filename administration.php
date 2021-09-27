<div>
    <?php include "common/dashboard-sidebar.php" ?>
    <div id="dashboardSidebarRightContent">
        <?php include "common/admin-panel-header.php" ?>
        <div class="p-4 admin-main-content">
            <h4>User Account</h4>
            <p>Mubin Kapur</p>
            <div class="row mx-0 py-3 rounded light-box-shadow">
                <div class="col-3 nav-pills-container">
                    <h5>Shortcuts</h5>
                    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                        <a class="mb-1 nav-link active" id="v-my-profile-tab" data-toggle="pill" href="#v-my-profile" role="tab" aria-controls="v-my-profile" aria-selected="true">My Profile</a>
                        <a class="mb-1 nav-link" id="v-settings-tab" data-toggle="pill" href="#v-settings" role="tab" aria-controls="v-settings" aria-selected="false">Settings</a>
                        <a class="mb-1 nav-link" id="v-subscriptions-tab" data-toggle="pill" href="#v-subscriptions" role="tab" aria-controls="v-subscriptions" aria-selected="false">Subscriptions</a>
                        <a class="nav-link" id="v-order-tab" data-toggle="pill" href="#v-order" role="tab" aria-controls="v-order" aria-selected="false">Order</a>
                    </div>
                </div>
                <div class="col-9">
                    <div class="tab-content" id="v-pills-tabContent">
                        <div class="tab-pane fade show active" id="v-my-profile" role="tabpanel" aria-labelledby="v-my-profile-tab">
                            <form class="needs-validation" novalidate>
                                <div class="mb-4 d-flex flex-wrap align-items-center justify-content-between">
                                    <h5 class="mb-0">My profile</h5>
                                    <a class="btn btn-bg">Edit</a>
                                </div>
                                <p class="text-muted">Here you will find an overview of your personal information and what is visible to others.</p>
                                <div class="avatar-wrapper">
                                    <img class="profile-pic" id="uploadedImage" src=""/>
                                    <div class="upload-button">
                                        <span class="fa fa-plus profile-img-uploaded-icon"></span>
                                    </div>
                                    <input class="file-upload" name="avatar" type="file" accept="image/*"/>
                                </div>
                                <h6>Contact information</h6>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>First Name</label>
                                        <input type="text" placeholder="First Name" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Last Name</label>
                                        <input type="text" placeholder="Last Name" class="form-control" />
                                    </div>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Email</label>
                                        <input type="email" placeholder="example@gmail.com" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Mobile Number</label>
                                        <input type="tel" placeholder="Mobile Number" class="form-control" />
                                    </div>
                                </div>
                                <h6 class="mt-3">Address</h6>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label>Gate</label>
                                        <input type="text" placeholder="Gate" class="form-control" />
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Place</label>
                                        <input type="text" placeholder="Place" class="form-control" />
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="v-settings" role="tabpanel" aria-labelledby="v-settings-tab">
                            <h5>Settings</h5>
                            <p class="text-muted">Here you will find an overview of your settings</p>
                            <h6>Agree</h6>
                            <div class="row">
                                <div class="col-md-9">
                                    <b class="text-muted">subscribe to newsletter</b>
                                    <p class="text-muted">Precise Rentals will send you relevant news to your email address</p>
                                </div>
                                <div class="col-md-3 text-right">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="agreeYes">
                                        <label class="custom-control-label" for="agreeYes"></label>
                                    </div>
                                </div>
                            </div>
                            <h6>Payment card</h6>
                            <p class="text-muted">No payment card is stored on your profile</p>
                        </div>
                        <div class="tab-pane fade" id="v-subscriptions" role="tabpanel" aria-labelledby="v-subscriptions-tab">
                            <h5>Subscriptions</h5>
                            <p class="text-muted">Here you will find an overview of your subscriptions</p>
                            <p class="text-muted text-center">No subscription found</p>
                        </div>
                        <div class="tab-pane fade" id="v-order" role="tabpanel" aria-labelledby="v-order-tab">
                            <h5>Order</h5>
                            <p class="text-muted">Here you will find an overview of your orders</p>
                            <p class="text-muted text-center">No order found</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "common/admin-panel-footer.php" ?>
    </div>
    <script>
        $(function () {
            $(".sidebar-links").each(function () {
                var currentUrlBase = window.location.href.split('/').pop();
                var activeUrlBase = $(this).attr("href").split('/').pop();

                if (currentUrlBase == activeUrlBase && currentUrlBase!=undefined && activeUrlBase!=undefined) {
                    $(this).addClass("nav-underline-pg");
                    $(this).parent().addClass('active');
                    $(this).children('img').addClass("img-hover");
                }
            });

            /*dasboard sidebar*/
            $('#dashboardSidebar .side-nav .side-nav-links li').on('click', function () {

                var $this = $(this);

                $this.toggleClass('opend').siblings().removeClass('opend');

                if ($this.hasClass('opend')) {
                    $this.find('.side-nav-dropdown').slideToggle('fast');
                    $this.siblings().find('.side-nav-dropdown').slideUp('fast');
                    $this.tooltip('disable');
                } else {
                    $this.find('.side-nav-dropdown').slideUp('fast');
                    $this.tooltip('enable');
                }
            });

            $('#dashboardSidebar .side-nav .close-aside').on('click', function () {
                $('#' + $(this).data('close')).addClass('show-side-nav');
                contents.removeClass('margin');
            });

            /*Avatar upload*/
            var readURL = function (input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('#uploadedImage').attr('src', e.target.result);
                        $('.header-profile-pic').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $(".file-upload").on('change', function () {
                readURL(this);
            });

            $(".upload-button").on('click', function () {
                $(this).siblings('.file-upload').click();
            });
            /*Avatar upload*/
            /*dasboard sidebar*/
        });
    </script>
</div>
