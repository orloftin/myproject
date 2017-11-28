<?
function call_country($id){
	if($id!=""){
		$sql = mysql_query("SELECT * FROM `regist_country` WHERE id='".$id."' LIMIT 1");
		while($fa=mysql_fetch_array($sql)){
			return $fa['country_name']; 
		}
	}
}

function myUrlEncode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($entities, $replacements, urlencode($string));
}
function myUrlDecode($string) {
    $entities = array('%21', '%2A', '%27', '%28', '%29', '%3B', '%3A', '%40', '%26', '%3D', '%2B', '%24', '%2C', '%2F', '%3F', '%25', '%23', '%5B', '%5D');
    $replacements = array('!', '*', "'", "(", ")", ";", ":", "@", "&", "=", "+", "$", ",", "/", "?", "%", "#", "[", "]");
    return str_replace($replacements, $entities, urlencode($string));
}

function getDateSet($value='')
{
    $retVal = ( ! empty( $_GET[$value] ) ) ? $_GET[$value] : '' ;
    return $retVal;
}


?>