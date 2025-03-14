
<?php

$uName = $_POST["name"];
$uId = $_POST["id"];
$uGender = $_POST["gender"];
$uBirthday = $_POST["birthday"];
$uAge = $_POST["age"];
$uPhone = $_POST["phone"];
$uCity = $_POST["city"];
$uComment = $_POST["comment"];

echo " 你的名字: " .$uName."<br>";
echo " 你的學號: " .$uId ."<br>";
echo " 你的性別: " .$uGender ."<br>";
echo " 你的生日: " .$uBirthday ."<br>";
echo " 你的年齡: " .$uAge ."<br>";
echo " 你的電話: " .$uPhone ."<br>";

$j = "";
if (isset($_POST["interest"])){
    $uInterest = $_POST["interest"];
    $lastOne = end($uInterest);
    foreach($uInterest as $i){
        if ( $i == $lastOne){
            $j = $j.$i;
        }else{
            $j = $j.$i."、";
        }
    }
}else{
    $j = "無興趣";
}
echo " 你的興趣是: " .$j ."<br>";


echo " 你是哪裡人: " .$uCity ."<br>";
echo " 你的意見是: " .nl2br(htmlentities($uComment));

?>