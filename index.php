<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/img/notebook.png">
    <title>Agenda Telefonica</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css">
        <!-- own styles -->
    <link rel="stylesheet" href="assets/css/style/global.css">
</head>
<body>
<header class="mb-3">
    <div class="container h-100">
    <div class="row h-100 d-flex justify-content-center">
       <div class="col-6 col-md-6 col-lg-6 col-xl-1">
           <img src="assets/img/notebook.png" alt="error" class="img-notebook">
       </div>
       <div class="col-6 col-md-6 col-lg-6 col-xl-2 "><h1 class="">Agenda Telefonica</h1></div></div>
   </div>
    </div>
</header>
<main>
  <div class="container">
     <div class="row justify-content-around">
        <div class="col-12 col-md-6 col-lg-6 col-xl-6">
            <div><h2>Agendar<i class="fa fa-user" aria-hidden="true"></i></h2></div>
            <form>
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <label class="sr-only" for="inlineFormInput"></label>
                        <input type="text" class="form-control mb-2"  placeholder="Nombre" name="nombre" id="nombre" required="required">
                    </div>
                    <div class="col-12 col-lg-6">
                        <label class="sr-only" for="tel"></label>
                        <input type="tel" class="form-control inputTelefono mb-2" id="tel" placeholder="Teléfono" name="telefono" required="required">
                    </div>
<!--                    <div class="col-12 col-lg-12">-->
<!--                        <input type="file" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">-->
<!--                    </div>-->
                    <div class="d-flex justify-content-center mt-2 mb-2"><button type="button" class="btn btn-agregar" id="adicionar" value="agregar">Agregar</button></div>
                </div>
            </form>
        </div>
         <div class="col-12 col-md-6 col-lg-6 col-xl-6 contactos">
             <div class="d-flex">
                 <div><h2>Tus contactos guardados:</h2></div>
                 <div id="adicionados" class="h-100 justify-content-center"></div>
             </div>
<!--             <form action="#">-->
<!--                 <div class="col-12 col-lg-12">-->
<!--                         <label class="sr-only" for="inlineFormInput"></label>-->
<!--                         <input type="search" class="form-control mb-2"  placeholder="Buscar contacto" name="search" required="required">-->
<!--                 </div>-->
<!--             </form>-->
             <div>
                 <table id="mytable" class="table table-bordered table-hover ">
                     <tr>
                         <th scope="col">Nombre</th>
                         <th scope="col">Numero</th>
                         <th scope=""></th>
                     </tr>
                 </table>
             </div>
         </div>
     </div>
  </div>
</main>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!--   <script src="assets/js/bootstrap/js/bootstrap.min.js"></script>-->
   <script src="assets/js/bootstrap/js/bootstrap.bundle.js"></script>
   <script src="assets/js/bootstrap/js/bootstrap.bundle.min.js"></script>
<script>
    let datos = [];
    $(document).ready(function() {
        $('#adicionar').click(function() {
            var nombre = document.getElementById("nombre").value;
            var telefono = document.getElementById("tel").value;
            var i = 1;
            var fila = '<tr id="row' + i + '"><td class="col">' + nombre + '</td><td class="col">' + telefono + '</td><td class="col-1"><button type="button" name="remove" id="' + i + '" class="btn btn-delete btn_remove">Quitar</button></td></tr>';
            var contacto = new Object();
            contacto.nombre = nombre;
            contacto.tel = telefono
            datos.push(contacto);

            i++;

            $('#mytable tr:first').after(fila);
            $("#adicionados").text("");
            var nFilas = $("#mytable tr").length;
            $("#adicionados").append(nFilas - 1);
            document.getElementById("tel").value ="";
            document.getElementById("nombre").value = "";
            document.getElementById("nombre").focus();
        });
        $(document).on('click', '.btn_remove', function() {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
            $("#adicionados").text("");
            var nFilas = $("#mytable tr").length;
            $("#adicionados").append(nFilas - 1);
        });
    });
</script>
</body>
</html>
