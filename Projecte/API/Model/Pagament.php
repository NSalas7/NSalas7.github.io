<?php

class Pagament{

    private $conn;
    private $nom;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function readAll()
    {

        $query = "SELECT Pagament.id, Pagament.data, Pagament.excursioactual_id, curs.nom, CONCAT(alumne.nom,' ', alumne.llinatge1,' ', alumne.llinatge2) as nomAlumne FROM Pagament, excursioactual, curs_has_excursioactual, curs, alumne WHERE Pagament.excursioactual_id = excursioactual.id AND excursioactual.id = curs_has_excursioactual.ExcursioActual_id AND curs_has_excursioactual.Curs_id = curs.id AND curs.nom = alumne.curs";

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        $result = $result->fetch_all();

        return json_encode($result);
    }
}
