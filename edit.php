<?
	ini_set('display_errors', 1);
	error_reporting(~0);

    include_once 'conn.inc.php';
	
	
	$con = mysqli_connect($host,$user,$pass,$DB);
	$query = "SELECT * from exhibitor where id ='".$id."'"; 
	$result = mysqli_query($con, $query) or die ( mysqli_error());
	$fa = mysqli_fetch_assoc($result);

?>
<div class="col-lg-9">
	<div class="card mt-4">
		<div class="card-body">
        
	<div style="margin:10px auto; border:1px solid #DDD; background:#FAFAFA;">
		<?
        if($com_name!="")
		{
            ?>
            <div style="padding:6px; background:#F1F1F1; margin:2px; font-weight:bold;" >
                คุณกำลังเปิดข้อมูลของ <?=$com_name?>
            </div>
            <?				
        }
        ?>
   </div>
        
        <script>
			function newsmember(){
				var name  = document.getElementById('name').value;
				if(name==""){ alert("กรุณาตรวจสอบชื่อ"); return false;}
				
			}
			function pagereload(){
				window.location.reload();
			}

		</script>
	<div style=" margin:5px auto; border:1px solid #DDD; background:#FAFAFA;">
		<div style="padding:6px; background:#F1F1F1; margin:2px; font-weight:bold;" >
			<h2 style="font-size:12pt; margin-bottom:4px; padding:5px; border-bottom:1px solid #333;"><strong>Edit Data / แก้ไขข้อมูล </strong></h2>
<?php
if(isset($_POST['new']) && $_POST['new']==1)
{
	  $id=$_GET['id'];
	  $com_1 = $_REQUEST['company_1'];
	  $com_2 = $_REQUEST['company_2'];
	  $name = $_REQUEST['name'];
	  $position = $_REQUEST['position'];
	  $country1 = $_REQUEST['country_com'];
	  $country2 = $_REQUEST['country_2'];
	  $address = $_REQUEST['address'];
	  $hall = $_REQUEST['page'];
	  $booth = $_REQUEST['booth_no'];
	  $doc = $_REQUEST['doc_id'];
	  $contact = $_REQUEST['contactor'];
	  $phone = $_REQUEST['phone'];
	  $fax = $_REQUEST['fax'];
	  $email = $_REQUEST['email'];

  	$update = "UPDATE exhibitor set name = '".$name."', company_1 = '".$com_1."', company_2 = '".$com_2."', position = '".$position."', country_com = '".$country1."', country_2 = '".$country2."', address = '".$address."', page = '".$hall."', booth_no = '".$booth."', doc_id = '".$doc."', contactor = '".$contact."', phone = '".$phone."', fax = '".$fax."', email = '".$email."' where id = '".$id."'";
mysqli_query($con, $update) or die(mysqli_error());
echo "<script>";
		echo " alert ('อัพเดทได้แล้วนะ');";
		echo "window.location.href='./?page';";
		echo "</script>";
}else {
?>
            
    <form id="form_upload" name="form_upload" action="" method="post" enctype="multipart/form-data" onSubmit="return newsmember();">
	<input type="hidden" name="new" value="1" />
    <input name="id" type="hidden" value="<?php echo $fa['id'];?>" />
   <p style="padding:4px;">
          <table width="100%" height="180" border="0">
          <tr>
            <td width="200" align="center">Company Name :</td>
            <td width="400"><input type="text" class="form-control" value="<? echo $fa['company_1']; ?>" id="company_1" name="company_1" /></td>
            <td width="200" align="center">Contry :</td>
            <td width="400"><input type="text" class="form-control" value="<? echo $fa['country_com']; ?>" id="country_com" name="country_com" /></td>
          </tr>
          <tr>
            <td align="center">Address :</td>
            <td colspan="3"><input type="text" class="form-control" value="<? echo $fa['address']; ?>" id="address" name="address" /></td>
            </tr>
          <tr>
          	<td align="center">Hall : </td>
            <td><input type="text" class="form-control " value="<? echo $fa['page']; ?>" id="page" name="page" /></td>
            <td align="center">Contact :</td>
            <td><input type="text" class="form-control" value="<? echo $fa['contactor']; ?>" id="contactor" name="contactor" /></td>
          </tr>
          <tr>
          <td align="center">Booth No. :</td>
            <td><input type="text" class="form-control" value="<? echo $fa['booth_no']; ?>" id="booth_no" name="booth_no" /></td>
            <td align="center">Document No. :</td>
            <td><input type="text" class="form-control" value="<? echo $fa['doc_id']; ?>" id="doc_id" name="doc_id" /></td>
          </tr>
        </table>
            </p>
    	</div>
    </div>
    
    <div style=" margin:5px auto; border:1px solid #DDD; background:#FAFAFA;">
        <div style="padding:6px; background:#F1F1F1; margin:2px; font-weight:bold;">
                <p style="padding:4px;">
  		<table width="100%" height="180" border="0">
          <tr>
            <td align="center"> Name : </td>
            <td ><input type="text" class="form-control" value="<? echo $fa['name']; ?>" id="name" name="name" /></td>
            <td align="center">Position :</td>
            <td ><input type="text" class="form-control" value="<? echo $fa['position']; ?>" id="position" name="position" /></td>
          </tr>
          <tr>
            <td align="center">Company Name :</td>
            <td ><input type="text" class="form-control" value="<? echo $fa['company_2']; ?>" id="company_2" name="company_2" /></td>
            <td align="center"> Contry :</td>
            <td ><input type="text" class="form-control" value="<? echo $fa['country_2']; ?>" id="country_2" name="country_2" /></td>
          </tr>
          <tr>
          	<td align="center">Phone : </td>
            <td><input type="text" class="form-control" value="<? echo $fa['phone']; ?>" id="phone" name="phone" /></td>
            
          </tr>
          <tr>
          <td align="center">Fax :</td>
           <td><input type="text" class="form-control" value="<? echo $fa['fax']; ?>" id="fax" name="fax" /></td>
           <td align="center">Email :</td>
           <td> <input type="text" class="form-control" value="<? echo $fa['email']; ?>" id="email" name="email" /></td>
          </tr>
        </table>
	</p>
    <p style="padding:3px;" align="center"><input type="submit" value="บันทึก" class="btn btn-danger col-md-5" /></p>
            </form>
        </div>
   	</div>

<? } ?>

   

        
