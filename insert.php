<?php
include('conn.inc.php');

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
	
	$ins_query = " insert into exhibitor (`name`,`company_1`,`company_2`,`position`,`country_com`,`country_2`,`address`,`page`,`booth_no`,`doc_id`,`contactor`,`phone`,`fax`,`email`) values ('$name','$com_1','$com_2','$position','$country1','$country2','$address','$hall','$booth','$doc','$contact','$phone','$fax','$email')";
mysqli_query($con,$ins_query) or die(mysqli_error());
echo "<script>";
		echo " alert ('เพิมข้อมูลสำเร็จ!!');";
		echo "window.location.href='./?page=data&com=';";
		echo "</script>";
}
?>
<div class="col-lg-9">
        
          <div class="card mt-4">
            <div class="card-body">
            <div>
            
            
<div style="background:#EEE5DE;" class="btn"> <strong> เพิ่มข้อมูลใหม่ / ADD NEW DATA</strong></div>
<br />

<div>
<form name="form" method="post" action="" > 
  <input type="hidden" name="new" value="1" />
  <div style="padding:10px; background:#F1F1F1; margin:10px;">
	<h5>ข้อมูลบริษัท</h5><hr/>
  <table width="100%" height="180" border="0">
      <tr>
        <td width="200" align="center">Company Name :</td>
            <td width="400"><input type="text" class="form-control" required id="company_1" name="company_1" /></td>
            <td width="200" align="center">Contry :</td>
            <td width="400"><input type="text" class="form-control" required id="country_com" name="country_com" /></td>
  	  </tr>
   	   <tr>
            <td align="center">Address :</td>
            <td colspan="3"><input type="text" class="form-control" id="address" name="address" /></td>
            </tr>
          <tr>
          	<td align="center">Hall : </td>
            <td>
            <label class="radio-inline"><input type="radio" name="page" value="FAIR"> FAIR </label>
			<label class="radio-inline"><input type="radio" name="page" value="FOOD"> FOOD </label></td>
            <td align="center">Contact :</td>
            <td><input type="text" class="form-control" id="contactor" name="contactor" /></td>
          </tr>
          <tr>
          <td align="center">Booth No. :</td>
            <td><input type="text" class="form-control" id="booth_no" name="booth_no" /></td>
            <td align="center">Document No. :</td>
            <td><input type="text" class="form-control" id="doc_id" name="doc_id" /></td>
          </tr>
        </table>
</div>

<div style="padding:10px; background:#F1F1F1; margin:10px;">
	<h5>ข้อมูลพนักงาน</h5><hr/>
    <table width="100%" height="180" border="0">
     <tr>
            <td align="center"> Name : </td>
            <td ><input type="text" class="form-control" id="name" name="name" /></td>
            <td align="center">Position :</td>
            <td ><input type="text" class="form-control" id="position" name="position" /></td>
          </tr>
          <tr>
            <td align="center">Company Name :</td>
            <td ><input type="text" class="form-control" id="company_2" name="company_2" /></td>
            <td align="center"> Contry :</td>
            <td ><input type="text" class="form-control" id="country_2" name="country_2" /></td>
          </tr>
          <tr>
          	<td align="center">Phone : </td>
            <td><input type="text" class="form-control" id="phone" name="phone" /></td>
            <td align="center">Fax :</td>
           <td><input type="text" class="form-control" id="fax" name="fax" /></td>
          </tr>
          <tr>
           <td align="center">Email :</td>
           <td> <input type="text" class="form-control"  id="email" name="email" /></td>
          </tr>
    </table>
    
 <p style="padding:15px;" align="center"><input type="submit" value="บันทึก / SAVE" class="btn btn-outline-dark" /></p>
</div>

</form>
</div>
            
            </div>
           </div>

</div>