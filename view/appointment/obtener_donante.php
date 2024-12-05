<?php
include_once('../config/dbconect.php');

if (isset($_GET['codpaci'])) {
    $codpaci = $_GET['codpaci'];

    $database = new Connection();
    $db = $database->open();

    // Aquí ajusta la lógica para seleccionar el donante según el paciente
    $stmt = $db->prepare("SELECT d.coddoc, d.nomdoc, d.apedoc 
                          FROM doctor d 
                          INNER JOIN customers c ON d.tipo_sangre = c.tipo_sangre
                          WHERE c.codpaci = :codpaci");
    $stmt->execute(['codpaci' => $codpaci]);

    $donantes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Devolver los datos en formato JSON
    echo json_encode($donantes);

    $db = null;
}
?>