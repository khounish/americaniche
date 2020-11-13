<?php
for ($x = 0; $x <= 10; $x++)
{
    $sql = "SELECT user_id FROM userdetails WHERE username = '$username'";
    $userid = (($conn->query($sql1))->fetch_assoc())["user_id"]; 
}

?>