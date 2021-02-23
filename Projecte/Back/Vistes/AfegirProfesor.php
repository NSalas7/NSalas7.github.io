<button type="button" class="btn btn-secondary " data-toggle="modal" data-target="#staticBackdrop" id="botoAfegirProfessor">
    Afegir Professor <i class="fa fa-user"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" data-keyboard="false" tabindex="-1"
aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h2 class="modal-title" id="staticBackdropLabel">Afegir Professor</h2>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="http://api.gestioexcursions.me/Controladors/Professor/inserirProfessor.php" method="POST">
            <div class="modal-body">
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Nom: <input type="text" class="form-control" name="nom">
                    </div>
                    <div class="form-group col-md-6">
                        Rol:
                        <select id="rol" type="text" placeholder="Month" class="form-control" name="rol">
                            <option>-- Null --</option>
                            <option value="0">Professor</option>
                            <option value="1">Administrador</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Correu: <input type="text" class="form-control" name="correu">
                    </div>
                    <div class="form-group col-md-6">
                        Curs:
                        <select id="cursos" name="curs" class="form-control">
                            <option value="0">-- Selecciona --</option>
                        </select>
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        Contrasenya: <input type="text" class="form-control" name="contrasenya">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dark" data-dismiss="modal">Tancar</button>
                <button type="submit" class="btn btn-dark">Afegir</button>
            </div>
        </form>
    </div>
</div>
</div>

<script>
    $(document).ready(function(){
        function loadCurs() {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState === 4 && this.status === 200) {
                    var curs = JSON.parse(this.responseText);
                    for (var c in curs) {
                        var nomcurs = curs[c][0];
                        var item = $("<option/>", {text:nomcurs});
                        $("#cursos").append(item);
                    }
                }
            }
            xhttp.open("GET", "http://api.gestioexcursions.me/Controladors/Curs/veureCurs.php", true);
            xhttp.send();
        };
        loadCurs();
    });
</script>
