<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
$name=$_POST['name'];
$email=$_POST['sur'];
if($name && $email){
mysql_connect("localhost","root","") or die("we could'nt connect!");
mysql_select_db("insert");
mysql_query("INSERT INTO user VALUES('$name','$email')");
$registered =mysql_affected_rows();
echo "Successfull!";
}
else{
	echo "Complete the form!";
}
?>
        
    </body>
</html>