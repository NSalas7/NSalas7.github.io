<?php

class TotalAlumnes{
    

    private $conn;
    private $nom;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    public function AlumnesTotals($id){
        $query = "SELECT COUNT(alumne.nom) as total
        FROM Pagament, excursioactual, curs_has_excursioactual, curs, alumne, excursio 
        WHERE Pagament.excursioactual_id = excursioactual.id 
        AND excursioactual.id = curs_has_excursioactual.ExcursioActual_id 
        AND curs_has_excursioactual.Curs_id = curs.id 
        AND curs.nom = alumne.curs 
        AND excursioactual.Excursio_id = excursio.id 
        AND excursio.id = ?";
  
    $stmt = $this->conn->prepare($query);
    $stmt->bind_param('i', $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $result = $result->fetch_all(MYSQLI_ASSOC);
  
    return json_encode($result);
  }
}
