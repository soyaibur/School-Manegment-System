<?php
require_once 'dbcon.php';
 if (base64_encode($_GET['id'])) {
    $id= base64_decode($_GET['id']);

    $pd="SELECT * FROM student_info WHERE id ='$id';";
    $result = mysqli_query($link,$pd);
    if ($rowResult = mysqli_fetch_assoc($result)) {
        $path = "student-images/".$rowResult['photo']; 
        
        unlink($path);

    }
    
    $stm = "DELETE FROM student_info WHERE id = '$id';";

    mysqli_query($link,$stm);

    header('location:index.php?page=all-student');
} else {
    echo'Yah you fuck well';
}

    