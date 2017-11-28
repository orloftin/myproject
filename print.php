
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style type="text/css">
	@page{
	margin-left: 0px;
	margin-right: 0px;
	margin-top: 0px;
	margin-bottom: 0px;
	}
</style>
</head>

<body style="padding:0; margin:0; font:normal 10pt Verdana, Geneva, sans-serif;">
<?
include('conn.inc.php');
	date_default_timezone_set("Asia/Bangkok");
	$mydate = date('Y-m-d');
	$mydatetime =date('Y-m-d H:i:s');
$id = $_GET['id'];
$al = $_GET['al'];
if($id!=""){
	$sql = mysqli_query($con, "SELECT * FROM `exhibitor` WHERE id='".$id."' LIMIT 1");	
	while( $fa = $sql->fetch_array() ){
    	$name = str_replace("&nbsp;"," ",$fa['name']);
		$com_1 = $fa['company_1'];
      	$com = $fa['company_2'];
   		$pos = $fa['position'];
		$country = $fa['country_com'];
		$lenstr = strlen($com);
		$len_name = strlen($name);
	}
	mysqli_query($con, "UPDATE `exhibitor` SET status='1', update_date='".$mydatetime."' WHERE id='".$id."' LIMIT 1");	
}		
?>
<div style="width:9cm; margin:0 <? if($al=="1"){ ?>auto<? } ?>; padding:0;" id="myprint">
	<div style="font-size:14pt; padding:0 20px; padding-top:200px;">
        <table cellpadding="3" cellspacing="3" border="0" width="100%">
        	<tr>
                <td valign="middle" align="center" style="padding-bottom:2px;">
                	<span style="<?php echo $retVal = ( $len_name >= "10" ) ? 'font-size:11pt;' : '' ; ?> text-transform: uppercase;" ><?=strtoupper($name)?></span>
                </td>
            </tr>
            <tr>
                <td valign="middle" align="center" style="padding-bottom:3px;"><span style="font-size:11pt;"><?echo strtoupper($pos)?></span></td>
            </tr>
            <tr>
                <td valign="middle" align="center" style="padding:0 10px; padding-bottom:2px; <? if($lenstr>=22){ ?>font-size:11pt; <? } ?>">
                	<span><?=strtoupper($com_1)?></span>
                </td>
            </tr>
            <tr>
                <td valign="middle" align="center"><span style="font-size:11pt;"><?=$country?></span></td>
            </tr>       
        </table>
	</div>
    <div style="clear:both;"></div>
</div>
</body>
</html>
<script>
function PrintWindow() { 
	window.print(); 
	CheckWindowState();
	window.close();
} 

function CheckWindowState() { 
	if(document.readyState=="complete") { 
		window.location='./?page=data&com=<?=$com_1?>'; 
	} else { 
		setTimeout("CheckWindowState()", 10) 
	} 
} 
window.onload=PrintWindow();
</script> 
