<html> 
<head> 
<title> 
聊天室 
</title> 
</head> 
<META HTTP-EQUIV=Refresh CONTENT="5; URL=top.php"> 
<body bgcolor="#EFEFEF"> 
<?php 
$handle=fopen("msg.txt","r"); 
//$oldmsg = array(); 
while ($content = fgets($handle)){ 
//$oldmsg[] = $content; 
//++$tot; 
echo $content; 
} 
?> 
</body> 
</html> 
