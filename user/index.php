<?php




    include "header.php";




    require("../php/connect.php");

    $query = "SELECT * FROM addemployee WHERE id=$editid";

    $result=$conn->query($query);

    $row=$result->fetch_array();
?>

<?php





    include "footer.php";


?>