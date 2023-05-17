 <!-- Core -->
 <script src="../assets/bundles/libscripts.bundle.js"></script>
 <script src="../assets/bundles/vendorscripts.bundle.js"></script>

 <script src="../assets/bundles/c3.bundle.js"></script>
 <script src="../assets/bundles/jvectormap.bundle.js"></script>
 <!-- JVectorMap Plugin Js -->

 <script src="../assets/js/theme.js"></script>
 <script src="../assets/js/pages/index.js"></script>
 <!-- <script src="../assets/js/pages/todo-js.js"></script> -->
 <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script type="text/javascript">
    $("#login").submit((e) => {
        e.preventDefault();
        var datos = $("#login").serialize();
        var postear = $.post("/admin/backend/sesion", datos);
        postear.done((response) => {
            alert(JSON.parse(response));
        });
    });
</script>