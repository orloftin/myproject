	<?
	$new_url = str_replace("&","a1515a",$com_name);
	?>
     <div class="col-lg-9">
          <div class="card mt-4">
            <div class="card-body">
            
    	<div style="padding:5px;">
        	<div style="background:#BA55D3" class="btn"> <strong>THAILAND INDUSTRIAL FAIR</strong></div>
			<div style="background:#7FFFD4" class="btn"> <strong>FOODPACK THAILAND</strong></div>
            <div class="btn">
			<form method="post" action="export.php">
     		<input type="submit" name="export" class="btn btn-success" value="Export File" /></form>
    </div>
        </div>
    
        <div>
        
			<?
			if($com_name==""){
            	$sql = mysqli_query( $con , "SELECT id FROM `exhibitor` order by company_1 ASC, rank ASC, status ASC");
			}else{
				$sql = mysqli_query( $con , "SELECT id FROM `exhibitor` WHERE company_1='".($com_name)."' order by company_1 ASC, rank ASC, status ASC");
			}
			
            $page_set = 20;
            $range = 5;
            $pi = $pi;
            if($pi==""){ $pi="1";}
            $row_count = mysqli_num_rows($sql); // count record
            $totalpage = ceil($row_count/$page_set);
            $goto = ($pi-1)*$page_set;
            $start = $pi-$range;
            $end = $pi+$range;
            if($start<=1){ $start=1; }
            if($end>=$totalpage){ $end=$totalpage;}		
                                
            $page_tool = '';
            $page_tool .= '<div class="pages">Page '.$pi.' of '.$totalpage.' &nbsp;&nbsp;&nbsp;';							
            for($i=$start; $i<=$end; $i++){
                if($i==$pi){
                    $page_tool .= '<span>'.$i.'</span>';
                }else{
                    $page_tool .= '<a href="./?page=data&com='.$new_url.'&pi='.$i.'">'.$i.'</a>';
                }
            }
            $page_tool .= '</div>';	
            echo $page_tool;
				
			if($com_name!=""){
				$new_url = str_replace("&","a1515a",$com_name);
				?>
                <div style="padding:6px; background:#F1F1F1; margin:2px; font-weight:bold;" class="round_all">
                	คุณกำลังเปิดข้อมูลของ <?=$com_name?> <input type="button" class="btn btn-warning btn-sm" value="เพิ่มข้อมูล" style="padding:4px 7px;" 
                    onclick="window.location='./?page=add&com=<?=$new_url?>';" />
                </div>
                <?
				$new_url = "";				
			}
            ?>	
            		
            <div style="padding:10px 0;" id="data">
      			<table class="table table-sm " width="100%" cellpadding="5" cellspacing="2" border="1" style="border:1px ; border-collapse:collapse;">
        			<tr style="background:#DDD;">
                      <td valign="middle" align="center"><strong>ชื่อ / NAME</strong></td>
                      <td valign="middle" align="center"><strong>ชื่อบริษัท / Company</strong></td>
                      <td valign="middle" align="center"><strong>ชื่อบริษัทรอง / Sub Company</strong></td>
                      <td valign="middle" align="center"><strong>โทร / Tel</strong></td>
                      <td valign="middle" align="center" >&nbsp;</td>
        			</tr>
					<?php
                    $i = 0;
					if($com_name==""){
                    	$sql = mysqli_query( $con , "SELECT * FROM `exhibitor` order by status ASC, rank ASC, company_1 ASC LIMIT ".$goto.",".$page_set);
					}else{
						$sql = mysqli_query( $con , "SELECT * FROM `exhibitor` WHERE company_1='".$com_name."' order by status ASC, rank ASC, 
						company_1 ASC LIMIT ".$goto.",".$page_set);
					}
                    while($fa=mysqli_fetch_array($sql)){
                        $url_new = str_replace("&","a1515a",$fa['company_1']);
						$i++;
					    ?>
                        <tr style="font-size:8pt; <? if($fa['page']=='FAIR'){?>background:#e7d4ec;<? }else{ ?>background:#e9fffb; <? } ?>">
                            <td valign="middle" align="center" style="font-size:16px"><?=$fa['name']?></td>
                            <td valign="middle" align="center" style="font-size:16px">
                            <a href="./?page=data&com=<?=$url_new?>" style="color:#069; text-decoration:none;">
                                    <?=$fa['company_1']?>
                                </a>
                            </td>
                            <td valign="middle" align="center" style="font-size:16px"><?=$fa['company_2']?></td>
                            <td valign="middle" align="center" style="font-size:16px"><p style="width:90px; word-wrap:break-word;"><?=$fa['phone']?></p></td>
                            <td valign="middle" align="center" style="padding:0;">
                           <!--      <input type="button" class="button <? if($fa['status']=="0"){ ?>blue <? }else{ ?> red <? } ?>" 
                                onclick="window.location = 'print.php?id=<?=$fa['id']?>';" 
                                style="padding:7px; margin:2px;" value="Print-L" /> -->
                                
                                <!-- <input type="button" class="button <? if($fa['status']=="0"){ ?>blue <? }else{ ?> red <? } ?>" 
                                onclick="window.location = 'print.php?id=<?=$fa['id']?>&al=1';" 
                                style="padding:7px; margin:2px;" value="Print-C" /> -->


                                <input type="button" class="btn btn-sm <? if($fa['status']=="0"){ ?>blue <? }else{ ?> red <? } ?>"                                 onclick="window.location = 'print.php?id=<?=$fa['id']?>&al=1';" 
                                style="padding:7px; margin:2px;" value="Print-C" />
                                
                            </td>
                        </tr>
                        <?			                       
                    }
   					?>
      			</table>
 
    		</div>
    	</div>
	</div>
    
    	</div>
    </div>
</div>
    
    