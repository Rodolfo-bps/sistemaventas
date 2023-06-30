var tabla;

function init() {
    mostrarelformulario(false);
    listar();
}

function limpiar() {
    $("#nombre").val("");
    $("#descripcion").val("");
    $("#idcategoria").val("");
}

function mostrarelformulario(x) {
    limpiar();
    if (x) {
        $("#listadoregistros").hide();
        $("#formularioregistros").show();
        $("#btnGuardar").prop("disabled", false);
        $("#btnagregar").hide();
    } else {

        $("#listadoregistros").show();
        $("#formularioregistros").hide();
        $("#btnagregar").show();

    }
}

function cancelarformulario() {
    limpiar();
    mostrarelformulario(false);
}

function listar() {
    tabla = $('#tablalistado').dataTable({
        "aProcessing": true,//activamos el procesamiento de datatables
        "aServerSide": true,//paginacion y filtrado realizado por el servidor
        dom: 'Bfrtip',//definimos los elementos del control de la tabla

        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdf'
        ],

        "ajax": {
            url: '../ajax/categoria.php?op=listar',
            type: 'get',
            dataType: 'json',
            error: function (e) {
                console.log(e.responseText);
            }
        },

        "bDestroy": true,
        "iDisplayLength": 5,//paginacion
        "order": [[0, "desc"]]//ordenar columnas

    }).DataTable();

}

function guardaryeditar(e) {
    e.preventDefault();
}

init();