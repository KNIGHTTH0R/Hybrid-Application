﻿<?
include ("./sellboard_lib.php");
$connect = sql_connect($db_host, $db_user, $db_pass, $db_name);

$sql = "update tb_board5 set b_title = '".$_POST["b_title"]."', b_contents = '".$_POST["b_contents"]."' where b_idx = '".$_POST["b_idx"]."'";
sql_query($sql);


?>
<script>
location.replace("./suwon_sellboard.php");
</script>
