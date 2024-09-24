<?php
 // first way
 $sdata=array("sid" =>101,"sname" =>"JACKSON","sadd" =>"FATHEGANJ");
 echo $sdata["sid"]."<br>";
 echo $sdata["sname"]."<br>";
 echo $sdata["sadd"]."<br>";
 
 // second way
 $sdata["eid"]=101;
 $sdata["dept"]="sales";
 $sdata["salary"]=25000;
 echo "eid".$edata["eid"]."<br>";
 echo "department".$sdata["dept"]."<br>";
 echo "salary".$sdata["salary"]."<br>";
?>