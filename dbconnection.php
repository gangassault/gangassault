<?php
$con=mysqli_connect("my-db.cjksus4ey352.ap-south-1.rds.amazonaws.com", "admin", "gangassault", "phpcrud");
if(mysqli_connect_errno())
{
echo "Connection Fail".mysqli_connect_error();
}
?>
