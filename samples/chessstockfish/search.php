<?php require_once('Connections/conn.php'); ?>
<?php
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

  $theValue = function_exists("mysql_real_escape_string") ? mysql_real_escape_string($theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}

$colname_rsView = "-1";
if (isset($_GET['fen'])) {
  $colname_rsView = $_GET['fen'];
}
mysql_select_db($database_conn, $conn);
$query_rsView = sprintf("SELECT * FROM games WHERE fen = %s ORDER BY id ASC", GetSQLValueString($colname_rsView, "text"));
$rsView = mysql_query($query_rsView, $conn) or die(mysql_error());
$row_rsView = mysql_fetch_assoc($rsView);
$totalRows_rsView = mysql_num_rows($rsView);

echo $query_rsView;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Chess</title>
<link rel="stylesheet" type="text/css" media="screen" href="css/chess.css"></link>
	<script type="text/javascript" src="js/ChessFen.js"></script>
	<style type="text/css" media="screen">
	body{
		font-family:"Trebuchet MS";
		font-size:0.9em;
		margin:0px;
	}

	#boardContainer{
		width:760px;

		padding:5px;
	}
	pre{
		font-family:Courier New, Courier New, Courier, monospace;
		color: #000;	
		font-size:0.75em;
		border:1px solid #317082;
		border-left:5px solid #317082;		
		padding:2px;
	}
	img{
		border:0px;
	}
	input{
		font-size:11px;
	}

	</style>
<script type="text/javascript">
	
	function displayFen(fenString)
	{
		try{
			chessObj.loadFen(fenString,'boardDiv');
			document.getElementById('fenInput').value = fenString;
			document.getElementById('fenString').innerHTML = fenString;
		}catch(e){
			alert('Invalid FEN');	
		}
	}
	
	
	</script>
</head>

<body>
<?php if ($totalRows_rsView > 0) { ?>
<div id="mainContainer">
	<div id="boardContainer">
		<p><b>My own FEN </b> ( <span id="fenString" style="font-size:0.9em;font-style:italic"></span> )</p>
		<div><table><tr><td>Type FEN in the field below:</td></tr>
		<tr><td><input type="text" id="fenInput" style="width:360px" onchange="displayFen(this.value)"></td></tr></table></div>
		<div id="boardDiv"></div>
	</div>
</div>

<script type="text/javascript">
var chessObj = new DHTMLGoodies.ChessFen( { pieceType:'alpha',squareSize:60 });
displayFen('<?php echo $row_rsView['fen']; ?>');




</script>
<?php } ?>
<table border="1" cellspacing="0" cellpadding="5">
	<?php do { ?>
		<tr>
			<td align="right"><a href="<?php echo $_SERVER['PHP_SELF']; ?>?fen=<?php echo $row_rsView['fen']; ?>&pid=<?php echo $row_rsView['id']; ?>"><?php echo $row_rsView['move']; ?></a>&nbsp;</td>
			<td><?php echo $row_rsView['fen']; ?>&nbsp;</td>
			<td><a href="chess.php?pid=<?php echo $row_rsView['pid']; ?>"><?php echo $row_rsView['pid']; ?></a>&nbsp;</td>
		</tr>
		<?php } while ($row_rsView = mysql_fetch_assoc($rsView)); ?>
</table>
</body>
</html>
<?php
mysql_free_result($rsView);
?>
