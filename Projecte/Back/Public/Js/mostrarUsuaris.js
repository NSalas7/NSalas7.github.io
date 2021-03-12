$(document).ready(function() {
    var t = $('#taula').DataTable( {
        responsive: true,
        dom: 'Bfrtip',
        buttons: [ 'pdf' ],
        ajax: {
            url: 'http://api.gestioexcursions.me/Controladors/Alumne/veureUsuaris.php',
            dataSrc: '',
            type:"POST",
        },
        /*columns:  [
            { data:'id' },
            { data:'nom' },
            { data:'correu' },
            { data:'contrasenya' }
        ],*/
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        select: true
    });
});