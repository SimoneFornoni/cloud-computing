<?php
    session_start();

    require_once('../config/connection.php');

    $username = $_POST['username'];
    $password = hash("sha256",$_POST['password']);

    $sql = "SELECT id,password FROM user WHERE username LIKE ? AND password LIKE ?";
    $prpstm = $conn->prepare($sql);
    $prpstm->bind_param('ss', $username, $password);
    $prpstm->execute();
    $result=$prpstm->get_result();

    if($result->num_rows > 0){
        $_SESSION['username'] = $username;
        $array['id']="200";
        $array['message']="--logIn effettuato con successo";
        echo json_encode($array);
    }else{
        $array['id']="406";
        $array['message']="--logIn non effettuato, utente inesistente";
        echo json_encode($array);
    }

    $conn->close();
?>