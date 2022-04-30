<?php
// Array with names
// $a[] = "Anna";
// $a[] = "Brittany";
// $a[] = "Cinderella";
// $a[] = "Diana";

$username=array("Anna","Brittany","Cinderella","Diana");

$name=array("lion","tiger","King");

$college=array("VJTI","VESIT","SPIT","KJ S","COEP");

// get the q parameter from URL
$q="";
$id="";
if(!empty($_REQUEST["q"]))
$q = $_REQUEST["q"];
if(!empty($_REQUEST["id"]))
$id= $_REQUEST["id"];
// echo strcmp($id,"1")==0;



$hint = "";

// lookup all hints from array if $q is different from ""
if(strcmp($id,"1")==0){
    if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
        foreach($username as $name) {
            if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
            }
        }
    }
}
else if(strcmp($id,"2")==0){
    if ($q !== "") {
        $q = strtolower($q);
        $len=strlen($q);
            foreach($name as $name) {
                if (stristr($q, substr($name, 0, $len))) {
                if ($hint === "") {
                    $hint = $name;
                } else {
                    $hint .= ", $name";
                }
                }
            }
        }
}
else if(strcmp($id,"5")==0){
    if ($q !== "") {
        $q = strtolower($q);
        $len=strlen($q);
            foreach($college as $name) {
                if (stristr($q, substr($name, 0, $len))) {
                if ($hint === "") {
                    $hint = $name;
                } else {
                    $hint .= ", $name";
                }
                }
            }
        }
}

echo $hint;

// Output "no suggestion" if no hint was found or output correct values

?>