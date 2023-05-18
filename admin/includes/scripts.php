 <!-- Core -->
 <script src="../assets/bundles/libscripts.bundle.js"></script>
 <script src="../assets/bundles/vendorscripts.bundle.js"></script>

 <script src="../assets/bundles/c3.bundle.js"></script>
 <script src="../assets/bundles/jvectormap.bundle.js"></script>
 <!-- JVectorMap Plugin Js -->

 <script src="../assets/js/theme.js"></script>
 <script src="../assets/js/pages/index.js"></script>
 <!-- <script src="../assets/js/pages/todo-js.js"></script> -->


 <!-- Jquery alerts -->
 <!-- <script src="https://code.jquery.com/jquery-3.7.0.min.js"
     integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script> -->

 <!-- <script type="text/javascript">
    $("#login").submit((e) => {
        e.preventDefault();
        var datos = $("#login").serialize();
        var postear = $.post("/admin/backend/sesion.php", datos);
        postear.done((response) => {
            alert(JSON.parse(response));
        });
    });
</script> -->


 <!-- previsualizar imagen a cargar -->
 <script>
// Obtener referencia al input y a la imagen
const $blog_portada = document.querySelector("#blog_portada"),
    $imagenPrevisualizacion = document.querySelector("#imagenPrevisualizacion");

// Escuchar cuando cambie
$blog_portada.addEventListener("change", () => {
    // Los archivos seleccionados, pueden ser muchos o uno
    const archivos = $blog_portada.files;
    // Si no hay archivos salimos de la función y quitamos la imagen
    if (!archivos || !archivos.length) {
        $imagenPrevisualizacion.src = "";
        return;
    }
    // Ahora tomamos el primer archivo, el cual vamos a previsualizar
    const primerArchivo = archivos[0];
    // Lo convertimos a un objeto de tipo objectURL
    const objectURL = URL.createObjectURL(primerArchivo);
    // Y a la fuente de la imagen le ponemos el objectURL
    $imagenPrevisualizacion.src = objectURL;
});
 </script>