
function loggin() {

    var usuario = $("#usuario").val();
    var contrasena = $("#contrasena").val();


    if (!usuario || usuario == "") {

        var dialog = new Messi(
            'Debe ingresar usuario.',
            {
                title: 'Mensaje',
                titleClass: 'anim error',
                buttons: [{ id: 0, label: 'Cerrar', val: 'X' }]
            }
        );

        return;
    }  

    if (!contrasena || contrasena == "") {
        var dialog = new Messi(
            'Debe ingresar contrasena.',
            {
                title: 'Mensaje',
                titleClass: 'anim error',
                buttons: [{ id: 0, label: 'Cerrar', val: 'X' }]
            }
        );
        return;
    } 


    $.post("usuario/ajax/loggin.php", {
        usuario: usuario,
        contrasena: contrasena,
    }, function (data, status) {
 $("#usuario").val("");
        $("#contrasena").val("");

        if(data.status){
            var dialog = new Messi(
            data.message,
            {
                title: 'Mensaje',
                titleClass: 'anim error',
                buttons: [{ id: 0, label: 'Cerrar', val: 'X' }]
            }
         );
            return;
        }

           window.location.href="menu-principal.php";

       
    });


}


function addRecord() {

    var id = $("#id").val();
    var admin = $("#admin").val();
    var nombre = $("#nombre").val();
    var contrasena = $("#contrasena").val();
    

    

    $.post("ajax/addRecord.php", {
        id: id,
        admin: admin,
        nombre: nombre,
        contrasena: contrasena
    }, function (data, status) {

        $("#add_new_record_modal").modal("hide");

        readRecords();


        $("#id").val("");
        $("#admin").val("");
        $("#nombre").val("");
        $("#contrasena").val("");

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
        'Esta seguro de eliminar el usuario?',
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

