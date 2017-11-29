<script>
	function get_search(){
		var d = document.getElementById('search_data').value;
		var c = document.getElementById('search_cate').value;
		if(d==""){
			alert("กรุณากรอกข้อมูล / Please Fill Data");
			return false;
		}	
		window.location = "./?c="+c+"&d="+d;
		return false;
	}
</script>

    <div class="col-lg-9">
        <div class="card mt-4">
            <div class="card-body" id="data">
        	
                 
    <div style="padding:10px;">
       
      
	<form enctype="multipart/form-data" onSubmit="return get_search();">
	 
     <div class="form-group row">
    <p>ค้นหาจาก / Search By :</p>&nbsp;&nbsp;
    
    <select id="search_cate" name="search_cate" class="form-control col-md-4">
        <?
		for($i=0;$i<=count($cate_value)-1;$i++){
			?>
        	<option value="<?=$cate_value[$i]?>" <? if($c==""){ if($cate_value[$i]=="company_1"){ echo 'selected="selected"'; } }?> <? if($c==$cate_value[$i]){ echo 'selected="selected"'; } ?>>
        		<?=$cate_name[$i]?>
        	</option>
        	<?
		}
		?>
      </select>&nbsp;&nbsp;
      <input type="text" id="search_data" name="search_data" class="form-control col-md-3" value="<?=$d?>" />&nbsp;&nbsp;
      <input type="submit" value="Search / ค้นหา" class="btn btn-primary"  />
      	</div>
      </form>

    </div>
    
    
    <hr />
    
    <div style="padding:10px 0;" id="data"> 
        <?
      	if($c!=""&&$d!=""){
			?>
  			<table class="table" cellpadding="5" cellspacing="2" border="1" style="border:1px solid #CCC; border-collapse:collapse;">
    			<tr style="background:#CC99FF;">
          			<td valign="middle" align="center">ชื่อ / NAME</td>
                  	<td valign="middle" align="center">ชื่อบริษัท / Company</td>
                  	<td valign="middle" align="center">ชื่อบริษัทรอง / Sub Company</td>
                  	<td valign="middle" align="center">มือถือ / Mobile</td>
                  	<td valign="middle" align="center">อีเมลล์ / Email</td>
                    <td valign="middle" align="center">Tool</td>
     			</tr>            
            	<?
      			$sql = mysqli_query($con,"SELECT * FROM `exhibitor` WHERE ".$c." LIKE '".$d."%' order by ".$c." ASC");
     			while($fa=mysqli_fetch_array($sql)){						
 					$new_url = str_replace("&","a1515a",$fa['company_1']);			
					?>
                	<tr>
                  		<td valign="middle" align="center"><?=$fa['name']?></td>
                  		<td valign="middle" align="center">
                    		<a href="./?page=data&com=<?=$new_url?>" style="color:#069; text-decoration:none;"><?=$fa['company_1']?></a>
                  		</td>
                  		<td valign="middle" align="center"><?=$fa['company_2']?></td>
                  		<td valign="middle" align="center"><?=$fa['phone']?></td>
                  		<td valign="middle" align="center"><?=$fa['email']?></td>
                        <td valign="middle" align="center"><a href="./?page=edit&com=<? echo $fa['name'].'&id='. $fa['id']  ?>">Edit</a>
                        <a href="JavaScript:if(confirm('ต้องการลบข้อมูล ?')==true){window.location='delete.php?id=<?php echo $fa["id"];?>';}">Delete</a>
                        </td>
                	</tr>
        			<?
  				}
    			?>
      		</table>
      		<?
		}	
 		?>
        </div>
        
		</div>
    </div>

		</div>
	</div>
</div>