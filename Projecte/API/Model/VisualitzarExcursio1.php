<?php

class EditarExcursio{
    

    private $conn;
    private $nom;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function veure($id){
        $query = "SELECT excursio.nom as nom, curs.nom as curs, lloc.nom as lloc, excursio.duracio as duracio, excursioactual.data_inici as d_inici, excursioactual.data_fi as d_fi, professor.nom as professor, excursio.descripcio as descripcio, excursioactual.preu as preu, excursio.public as publica, excursio.imatge as imatge
        FROM excursio, curs, excursioactual, lloc, excursioactual_has_lloc, professor, professor_has_excursioactual, curs_has_excursioactual
        WHERE excursio.id = excursioactual.Excursio_id
        AND excursioactual.id = curs_has_excursioactual.ExcursioActual_id
        AND curs_has_excursioactual.Curs_id = curs.id
        AND excursioactual.id = excursioactual_has_lloc.excursioactual_id
        AND excursioactual_has_lloc.lloc_id = lloc.id
        AND excursioactual.id = professor_has_excursioactual.excursioactual_id
        AND professor_has_excursioactual.professor_id = professor.id
        AND excursio.id = '91'";
  
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $result = $result->fetch_all(MYSQLI_ASSOC);
  
    return json_encode($result);
  }
}
