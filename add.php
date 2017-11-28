<?php
include('conn.inc.php');



if(isset($_POST['add']) && $_POST['add']==1)
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
	
	$add_query = " insert into exhibitor (`name`,`company_1`,`company_2`,`position`,`country_com`,`country_2`,`address`,`page`,`booth_no`,`doc_id`,`contactor`,`phone`,`fax`,`email`) values ('$name','$com_1','$com_2','$position','$country1','$country2','$address','$hall','$booth','$doc','$contact','$phone','$fax','$email')";
mysqli_query($con,$add_query) or die(mysqli_error());
echo "<script>";
		echo " alert ('เพิมข้อมูลสำเร็จ!!');";
		echo "window.location.href='./?page=data&com=';";
		echo "</script>";
}
?>

		<div class="col-lg-9">
          <div class="card mt-4">
            <div class="card-body">

            
            
<div style=" margin:10px auto; border:1px solid #DDD; background:#FAFAFA;">
		<?
        if($com_name!=""){
            ?>
            <div style="padding:6px; background:#F1F1F1; margin:2px; font-weight:bold;">
                คุณกำลังเปิดข้อมูลของ <span class="fa fa-arrow-right"></span> <?=$com_name?>  
                <input type="button" class="btn btn-info btn-sm" value="เพิ่มข้อมูล" style="padding:4px 7px;" 
                        onclick="window.location='./?page=add&com=<?=$com_name?>';" />
            </div>
            <?				
        }
        ?>
</div>

		<?
			$sql = mysqli_query($con , "SELECT * FROM `exhibitor` WHERE company_1='".$com_name."' LIMIT 1");
			while($fa=mysqli_fetch_array($sql)){
				$id = $fa['id'];
				$com_1 = $fa['company_1'];
				$com_2 = $fa['company_2'];	
				$country1 = $fa['country_com'];
				$country2 = $fa['country_2'];		
				$hall = $fa['page'];
				$booth = $fa['booth_no'];
				$contact = $fa['contactor'];
				$phone = $fa['phone'];
				$fax = $fa['fax'];
				$address = $fa['address'];
				$email = $fa['email'];
				$doc = $fa['doc_id'];	
			}
			?>
        
 <div style=" margin:5px auto; border:1px solid #DDD; background:#FAFAFA;">
	<div style="padding:6px; background:#F1F1F1; margin:2px; font-weight:bold;" >
    <div style="padding:10px; background:#F1F1F1; margin:10px;">
    <h5>ข้อมูลบริษัท</h5><hr/>
    <form class="col-lg-12" action="" method="post">
    <input type="hidden" name="add" value="1" />
     <p style="padding:4px;">
          <table width="100%" height="180" border="0">
          <tr>
            <td width="200" align="center">Company Name :</td>
            <td width="400"><input type="text" class="form-control" value="<?=$com_1?>" id="company_1" name="company_1" /></td>
            <td width="200" align="center">Contry :</td>
            <td width="400"><input type="text" class="form-control" value="<?=$country1 ?>" id="country_com" name="country_com" /></td>
          </tr>
          <tr>
            <td align="center">Address :</td>
            <td colspan="3"><input type="text" class="form-control" value="<?=$address?>" id="address" name="address" /></td>
            </tr>
          <tr>
          	<td align="center">Hall : </td>
            <td><input type="text" class="form-control " value="<?=$hall?>" id="page" name="page" /></td>
            <td align="center">Contact :</td>
            <td><input type="text" class="form-control" value="<?=$contact?>" id="contactor" name="contactor" /></td>
          </tr>
          <tr>
          <td align="center">Booth No. :</td>
            <td><input type="text" class="form-control" value="<?=$booth?>" id="booth_no" name="booth_no" /></td>
            <td align="center">Document No. :</td>
            <td><input type="text" class="form-control" value="<?=$doc?>" id="doc_id" name="doc_id" /></td>
          </tr>
        </table>
            </p>
    	</div>
    </div>
    
  	<div style="padding:6px; background:#F1F1F1; margin:2px; font-weight:bold;" >
    <div style="padding:10px; background:#F1F1F1; margin:10px;">
    <h5> เพิ่มข้อมูลพนักงาน </h5><hr/>
                <p style="padding:4px;">
  		<table width="100%" height="180" border="0">
          <tr>
            <td align="center"> Name : </td>
            <td ><input type="text" class="form-control" required="required" id="name" name="name" /></td>
            <td align="center">Position :</td>
            <td ><input type="text" class="form-control"  required="required" id="position" name="position" /></td>
          </tr>
          <tr>
            <td align="center">Company Name :</td>
            <td ><input type="text" class="form-control" value="<?=$com_2?>" id="company_2" name="company_2" /></td>
            <td align="center"> Contry :</td>
            <td ><input type="text" class="form-control" value="<?=$country2?>" id="country_2" name="country_2" /></td>
          </tr>
          <tr>
          	<td align="center">Phone : </td>
            <td><input type="text" class="form-control" id="phone" name="phone" /></td>
            <td align="center">Fax :</td>
           <td><input type="text" class="form-control"  id="fax" name="fax" /></td>
          </tr>
          <tr>
           <td align="center">Email :</td>
           <td> <input type="text" class="form-control"  id="email" name="email" /></td>
          </tr>
        </table>
	</p>
    <p style="padding:3px;" align="center"><input type="submit" value="บันทึก" class="btn btn-danger col-md-5" /></p>
    </div></div>

	</form>
</div>
<div style="margin:5px auto; border:1px solid #DDD; background:#FAFAFA;" class="round_all">
    	<div style="padding:6px; background:#F1F1F1; margin:2px;" class="round_all">
        	<h2 style="font-size:12pt; margin-bottom:4px; padding:5px; border-bottom:1px solid #333;">Emplyee Name Data</h2>
        	<table class="table table-hover table-sm">
            <thead>
            	<tr>
                	<th valign="middle" align="center">Name</th>
                     <th valign="middle" align="center">Position</th>
                     <th valign="middle" align="center">Company Name</th>  
                     <th valign="middle" align="center">Tel</th> 
                     <th valign="middle" align="center">Email</th>          
                </tr>
            </thead>
			<?
			$sql = mysqli_query($con , "SELECt * FROM `exhibitor` WHERE company_1='".$com_name."' order by name ASC");
			while($fa=mysqli_fetch_array($sql)){
				?>
				<tr class="list_tr_data1">
                	<td valign="middle"><?=$fa['name']?></td>
                    <td valign="middle"><?=$fa['position']?></td>
                    <td valign="middle"><?=$fa['company_2']?></td>
                    <td valign="middle"><?=$fa['phone']?></td>
                    <td valign="middle"><p style="width:180px; word-wrap:break-word;"><?=$fa['email']?></p></td>
                </tr>
                <?
			}
			?>
            </table>
            
            </div>
           </div>
		</div>