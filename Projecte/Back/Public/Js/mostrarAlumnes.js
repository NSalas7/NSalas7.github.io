$(document).ready(function() {
    var t = $('#taula').DataTable( {
        dom: 'Bfrtip',
        buttons: [ 'pdf' ],
        ajax: {
            url: 'http://api.gestioexcursions.me/Controladors/Alumne/veureAlumne.php',
            dataSrc: '',
            type:"POST",
        },
        /*columns:  [
            { data: 'id' },
            { data:'nom' },
            { data:'duracio' },
            { data:'public' },
            { data:'bus' }
           ],*/
        language: {
            url: "//cdn.datatables.net/plug-ins/1.10.19/i18n/Spanish.json"
        },
        select: true
    });
});