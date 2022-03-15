<html>
    <head>
</head>
<body>
    <form method=" get">
    <input type="text" name="angka">
    <input type="submit">
</form>

<?php

$_GET['angka'];
$angka = $_GET['angka'];
if($angka>=80)
{
    echo"A";
}elseif($angka>=70)
{
   echo"B";
}
elseif($angka>=60)
{
   echo"C";
}elseif($angka>=50)
{
   echo"D";
}elseif($angka<=50)
{
   echo"F";
}

?>
</body>
    </html>
