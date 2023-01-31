<?php
//include database configuration file
include 'connection.php';

//get records from database
$query = $conn->query("SELECT * FROM questionario ORDER BY idresposta");

if($query->num_rows > 0){
    $delimiter = ",";
    $filename = "Marinha_" . date('Y-m-d') . ".csv";
    
    //create a file pointer
    $f = fopen('php://memory', 'w');
    
    //set column headers
    $fields = array('idresposta', 'genero', 'idade', 'escolaridade', 'primeiravisita', 'ultimavisita', 'fatoresvisita', 'razaovisita');
    fputcsv($f, $fields, $delimiter);
    
    //output each row of the data, format line as csv and write to file pointer
    while($row = $query->fetch_assoc()){
        $lineData = array($row['idresposta'], $row['genero'], $row['idade'], $row['escolaridade'], $row['primeiravisita'], $row['ultimavisita'], $row['fatoresvisita'], $row['razaovisita']);
        fputcsv($f, $lineData, $delimiter);
    }
    
    //move back to beginning of file
    fseek($f, 0);
    
    //set headers to download file rather than displayed
    header('Content-Type: text/csv');
    header('Content-Disposition: attachment; filename="' . $filename . '";');
    
    //output all remaining data on a file pointer
    fpassthru($f);
}
exit;

?>