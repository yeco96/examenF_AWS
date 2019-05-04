

function addRecord() {

    var codigo = $("#codigo").val();
    var descripcion = $("#descripcion").val();
    var tipo = $("#tipo").val();
    var fechaIngreso = $("#fechaIngreso").val();
    var precio = $("#precio").val();

    if (!codigo || codigo == "") {

        var dialog = new Messi(
            'Debe ingresar codigo.',
            {
                title: 'Mensaje',
                titleClass: 'anim error',
                buttons: [{ id: 0, label: 'Cerrar', val: 'X' }]
            }
        );

        return;
    }  

    if (!descripcion || descripcion == "") {
        var dialog = new Messi(
            'Debe ingresar descripcion.',
            {
                title: 'Mensaje',
                titleClass: 'anim error',
                buttons: [{ id: 0, label: 'Cerrar', val: 'X' }]
            }
        );

        return;
    } 
    
    if (!tipo || tipo == "") {
        var dialog = new Messi(
            'Debe ingresar un tipo.',
            {
                title: 'Mensaje',
                titleClass: 'anim error',
                buttons: [{ id: 0, label: 'Cerrar', val: 'X' }]
            }
        );

        return;
    } 

    if (!fechaIngreso || fechaIngreso == "") {
        var dialog = new Messi(
            'Debe ingresar una fechaIngreso.',
            {
                title: 'Mensaje',
                titleClass: 'anim error',
                buttons: [{ id: 0, label: 'Cerrar', val: 'X' }]
            }
        );
        return;
    }


    $.post("ajax/addRecord.php", {
        codigo: codigo,
        descripcion: descripcion,
        tipo: tipo,
        fechaIngreso: fechaIngreso,
        precio: precio
    }, function (data, status) {

        $("#add_new_record_modal").modal("hide");

        readRecords();


    $("#codigo").val("");
   $("#descripcion").val("");
 $("#tipo").val("");
    $("#fechaIngreso").val("");
   $("#precio").val("");

        var dialog = new Messi(
            data,
            {
                title: 'Mensaje',
                titleClass: 'anim info',
                buttons: [{ id: 0, label: 'Cerrar', val: 'X' }]
            }
        );

    });
}


function readRecords() {
    $.get("ajax/readRecord.php", {}, function (data, status) {
        $("#records_content").html(data);
    });
}


function Delete(id) {
    var dialog = new Messi(
        'Esta seguro de eliminar el libro?',
        {
            title: 'Confirmación',
            buttons: [
                { id: 0, label: 'Yes', val: 'Y' },
                { id: 1, label: 'No', val: 'N' }
            ],
            callback: function (val) {
                if (val == 'Y') {
                    $.post("ajax/delete.php", {
                        id: id
                    },
                        function (data, status) {
                            readRecords();
                        }
                    );
                }
            }
        }
    );

}


$(document).ready(function () {
    readRecords();
});

