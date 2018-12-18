 <?php

    // CREATE CONNECTION

     $ab = mysqli_connect('host', 'kasutaja', 'parool', 'abnimi');


    // CHECK CONNECTION

    if(mysqli_connect_errno()) {
        // FAILED
       echo 'AB Pole ühendatud!'. mysqli_connect_errno();
    }

?>

 
