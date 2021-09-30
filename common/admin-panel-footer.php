        <footer class="row mx-0 admin-panel-footer">
            <div class="col-sm-6">
                © <span id="current-year"></span> <a href="./" class="text-decoration-none">Garantihuset AS</a>
            </div>
            <div class="col-sm-6 text-sm-right mt-sm-0 mt-1">
                <a href="./" class="mr-3 text-decoration-none">front page</a>
                <a href="./contact-us.php" class="text-decoration-none">Support</a>
            </div>
        </footer>
    </body>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.5.0.min.js"></script>
    <script src="js/lightgallery-all.min.js"></script>
    <script src="plugins/WOW-master/js/wow.min.js"></script>
    <script src="plugins/intl-tel-input-master/build/js/intlTelInput-jquery.min.js"></script>
    <script src="plugins/jquery.steps-1.1.0/jquery.steps.min.js"></script>
    <script src="js/main.js"></script>
    <script lang="js">
        $(function () {
            $("#signUpForm").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span>'
            /*titleTemplate: '<span class="step">#index#</span><span>#title#</span>'*/
            });
        })
        $("#menuToggle").click(function () {
            $("#dashboardSidebarRightContent").toggleClass("toggled");
            $("#dashboardSidebar").toggleClass("sidebar-toggle");
            $(".admin-panel-footer").toggleClass("footer-width");
        });
    </script>
</html>
