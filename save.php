<?
include('conn.inc.php');
date_default_timezone_set("Asia/Bangkok");
$mydate = date('Y-m-d');
$mydatetime =date('Y-m-d H:i:s');
$en_year = date('Y');
$th_year = $en_year+543;


$s = $_POST['s']; if($s==""){$s = $_GET['s'];}
$id = $_GET['id']; if($id==""){	$id = $_POST['id'];}


if($s=="update"){
				$com_1 = $_POST['company_1'];
				$com_2 = $_POST['company_2'];	
				$country1 = $_POST['country_com'];		
				$hall = $_POST['page'];
				$booth = $_POST['booth_no'];
				$contact = $_POST['contactor'];
				$phone = $_POST['phone'];
				$fax = $_POST['fax'];
				$address =$_POST['address'];
				$email = $_POST['email'];
				$doc = $_POST['doc_id'];
				$name = $_POST['name'];
				$position = $_POST['position'];
				$country2 = $_POST['country_2'];
	
	$sql = mysqli_query( $con ,"SELECT * FROM `exhibitor` WHERE id='".$id."' LIMIT 1");
	while($fa = mysqli_fetch_array($sql)){
				$id = $fa['id'];
				$com_1 = $fa['company_1'];
				$com_2 = $fa['company_2'];	
				$country1 = $fa['country_com'];		
				$hall = $fa['page'];
				$booth = $fa['booth_no'];
				$contact = $fa['contactor'];
				$phone = $fa['phone'];
				$fax = $fa['fax'];
				$address = $fa['address'];
				$email = $fa['email'];
				$doc = $fa['doc_id'];
				$name = $fa['name'];
				$position = $fa['position'];
				$country2 = $fa['country_2'];
	}
	mysqli_query( $con ," UPDATE `exhibitor` set name = '".$name."', company_1 = '".$com_1."', company_2 = '".$com_2."', position = '".$position."', country_com = '".$country1."', country_2 = '".$country2."', address = '".$address."', page = '".$hall."', booth_no = '".$booth."', doc_id = '".$doc."', contactor = '".$contact."', phone = '".$phone."', fax = '".$fax."', email = '".$email."' where no = '".$id."'");	
	?>

	<script language="JavaScript">
		<!--
		window.parent.pagereload();
		//-->
	</script>  
	<?		
}elseif($s=="checkin"){
	$data = explode(",",$id);
	for($i=0;$i<=count($data)-2;$i++){
		if($data[$i]!=""){
			mysqli_query( $con ,"UPDATE `exhibitor` SET status='5' WHERE id='".$data[$i]."' LIMIT 1");
		}
	}
}elseif($s=="cancel_chek"){
	mysqli_query( $con ,"UPDATE `exhibitor` SET status='1' WHERE id='".$id."' LIMIT 1");
	
	
}

?>