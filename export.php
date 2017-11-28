<?php  
//export.php  
$con = mysqli_connect("localhost", "root", "12345678", "project_exhibitor");
$output = '';
if(isset($_POST["export"]))
{
 $query = "SELECT * FROM exhibitor";
 $result = mysqli_query($con, $query);
 if(mysqli_num_rows($result) > 0)
 {
  $output .= '
   <table class="table" bordered="1">  
		<tr>  
			<td align="center" valign="middle" ><strong> id </strong></td>
			<td align="center" valign="middle" ><strong> company_1 </strong></td>
			<td align="center" valign="middle" ><strong> country_com </strong></td>
			<td align="center" valign="middle" ><strong> contactor </strong></td>
			<td align="center" valign="middle" ><strong> address </strong></td>
			<td align="center" valign="middle" ><strong> name </strong></td>
			<td align="center" valign="middle" ><strong> company_2 </strong></td>
			<td align="center" valign="middle" ><strong> position </strong></td>
			<td align="center" valign="middle" ><strong> country_2</strong></td>
			<td align="center" valign="middle" ><strong> phone </strong></td>
			<td align="center" valign="middle" ><strong> email </strong></td>
			<td align="center" valign="middle" ><strong> fax </strong></td>
			<td align="center" valign="middle" ><strong> hall </strong></td>
			<td align="center" valign="middle" ><strong> booth_no </strong></td>
			<td align="center" valign="middle" ><strong> doc_id </strong></td>
			<td align="center" valign="middle" ><strong> rank </strong></td>
			<td align="center" valign="middle" ><strong> status </strong></td>
		</tr>
  ';
  while($row = mysqli_fetch_array($result))
  {
   $output .= '
				<tr>  
                         <td>'.$row["id"].'</td>
						 <td>'.$row["company_1"].'</td>  
                         <td>'.$row["country_com"].'</td>  
                         <td>'.$row["contactor"].'</td> 
						 <td>'.$row["address"].'</td> 
       					 <td>'.$row["name"].'</td>  
       					 <td>'.$row["company_2"].'</td>
						 <td>'.$row["position"].'</td>
						 <td>'.$row["country_2"].'</td>
						 <td>'.$row["phone"].'</td>
						 <td>'.$row["email"].'</td>
						 <td>'.$row["fax"].'</td>
						 <td>'.$row["page"].'</td>
						 <td>'.$row["booth_no"].'</td>
						 <td>'.$row["doc_id"].'</td>
						 <td>'.$row["rank"].'</td>
						 <td>'.$row["status"].'</td>
				</tr>
   ';
  }
  $output .= '</table>';
  header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=exhibitor_data.xls');
  echo $output;
 }
}
?>