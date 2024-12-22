<?php 
    $host = 'localhost';
    $uname = 'root';
    $pass = '';
    $db = 'hotel';

    $con = mysqli_connect($host, $uname, $pass, $db);

    function filteration ($data){
        foreach($data as $key => $value)
        {
            $data[$key] = trim($value);
            $data[$key] = stripcslashes($value);
            $data[$key] = htmlspecialchars($value);
            $data[$key] = strip_tags($value);
        }
        return $data;    
    }

    if (!$con) {
        die("Cannot Connect to Database: " .mysqli_connect_error());
    }

    function select($sql, $value, $datatypes)
    {
        $con = $GLOBALS['con'];
        if($stmt = mysqli_prepare ($con, $sql)){
            mysqli_stmt_bind_param($stmt, $datatypes,...$values);
            if(mysqli_stmt_execute($stmt)){
                $res = mysqli_stmt_get_result($stmt);
                return $res;
            }
            else {
                mysqli_stmt_close($stmt);
                die("Query Cannot be execute - select");
            }
        }
        else {
            die("Query Cannot be execute - select");
        }
    }
?>
