<a href="index.php?category=sport">Sport news</a> | <a href="index.php?category=politics">Politic news</a><br/><br/>
<a href="index.php?category=sport&format=json">Sport news (JSON)</a> | <a href="index.php?category=politics&format=json">Politic news (JSON)</a><br/><br/>

<?php
$categoryFromRequest = $_REQUEST["category"];
$JSON = $_REQUEST["format"];
$news = ["sport"=>["C. Ronaldo has scored three goals in last five matches","Golovkin has won match for title"],"politics"=>["Trump has cancelled his visit to North Corea, because of sanction","N. Nazarbayev has approved new version of alphabet"]];
if($JSON == "json"){
    echo json_encode($news[$categoryFromRequest]);
}
else{
    echo $news[$categoryFromRequest][0] , '<br/>';  
    echo $news[$categoryFromRequest][1];
}
/* Write your code here */
?>