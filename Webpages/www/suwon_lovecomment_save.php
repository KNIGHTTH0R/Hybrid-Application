<!-- 서버&웹 개발자 : 조영호 -->
<!-- 저작권이 보호받는 페이지입니다 -->
<?php
include ("./loveboard_lib.php");

$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

$sql="insert into re3(cnum, cname, cc, ctime, ip) 
values('".$_POST["idxs"]."', '".$_SESSION["user_name"]."', '".$_POST["b_comment"]."', now(), '".$_POST["ip"]."' )";
sql_query($sql, $connect);
$url=$_SERVER["HTTP_REFERER"];
?>

</html>
<script>
location.replace("<?echo $url?>");
</script>
