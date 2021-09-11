        <footer class="admin-panel-footer">
            <a></a>
        </footer>
    </body>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap-4.5.0.min.js"></script>
    <script src="plugins/jquery.steps-1.1.0/jquery.steps.min.js"></script>
    <script src="js/main.js"></script>
    <script lang="js">
        $(function () {
        $("#signInForm").steps({
            headerTag: "h6",
            bodyTag: "section",
            transitionEffect: "fade",
            titleTemplate: '<span class="step">#index#</span>'
            /*titleTemplate: '<span class="step">#index#</span><span>#title#</span>'*/
            });
        })
    </script>
</html>
