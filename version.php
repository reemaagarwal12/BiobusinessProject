<?php
phpinfo();
?>

Blood Group encryption and decryption
{
  <?php
  $bg="A-";
 $l=strlen($bg);
  $ch="";
 for($i=0;$i<$l;$i++)
 {
   $a1=ord(substr($bg,$i,1));
   $ch=$ch."$a1";
 }
  echo"$ch<br>";

 $l=strlen($ch);
 $rbg="";
 for($i=0;$i<$l;$i=$i+2)
 {
   $a1=chr(substr($ch,$i,2));
   $rbg=$rbg."$a1";
 }
  echo"$rbg";
?>
}
Is seen through all pages
{
  $_SESSION["uname"];
}
Health, Contact no, Name, City encryption
{
  <?php
  $health="Myopia";
  $l=strlen($health);
  echo"$l<br>";
  $rev="";
  for($i=0;$i<$l;$i++)
 {
   $a1=chr(ord(substr($health,$i,1))+1);
   $rev=$a1.$rev;
 }
  echo"$rev";
 ?>
}

Health, Contact no, Name, City decryption
{
  <?php
  $l=strlen($rev);
 $bk="";
 for($i=0;$i<$l;$i++)
{
  $a1=chr(ord(substr($rev,$i,1))-1);
  $bk=$a1.$bk;
}
 echo"$bk";
?>
   ?>
}


Improved Version  // For both encryption and decryption
{
  <?php
  $health="disha";
  $ch=substr($health,0,1);
  $num=ord($ch)-96;
  echo"$ch<br>";
  echo"$num<br>";

  $l=strlen($health);
  echo"$l<br>";
  $rev="";
  for($i=0;$i<$l;$i++)
 {
   $a1=chr(ord(substr($health,$i,1))+$num);
   $rev=$a1.$rev;
 }
  echo"$rev<br>";

  $l=strlen($rev);
  $bk="";
  for($i=0;$i<$l;$i++)
 {
   $a1=chr(ord(substr($rev,$i,1))-$num);
   $bk=$a1.$bk;
 }
  echo"$bk";
?> 
}
