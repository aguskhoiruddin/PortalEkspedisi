<?php
	$mode = '';
	if(array_key_exists('Mode', $_GET)){
		$mode = trim($_GET["Mode"]);
	}

	switch ($mode) {
    case "0":
		CompanyList();
        break;
    case "bar":
        echo "i is bar";
        break;
    case "cake":
        echo "i is cake";
        break;
	default:
		Info();
		break;
}	
?>
<?php
	//FUNCTION 
	function CompanyList(){
		
		$criteria = new CDbCriteria;
		
		if(array_key_exists('Condition', $_GET) )
			$criteria->condition = $_GET["Condition"];
		
		if(array_key_exists('Limit', $_GET) )
			$criteria->limit = $_GET["Limit"];
		
		$criteria->select = array('res_id','category_id','title','status','description','url','owner_name','email','hits','created_at','submit_code','address','city','state','zip','country','last_update','featured','featured_expired','seo_title','tag','user_id','ar_number_votes','ar_total_points','ar_dec_avg','ar_whole_avg','vote','reciprocal_url','last_checked_online','last_checked_reciprocal','online','reciprocal','phone','fax','logo','suspended','suspended_reason','listing_type','phone2','phone3');
		
		$lepResource = LepResource::model()->findAll($criteria);
		
		echo CJSON::encode($lepResource );
	}
	
	function Info(){
		$strInfo = "" .
		"<h3>Services for Ekspedisi.net </h3>" .
		"<b>Mode 0: Company List</b><br />" .
		"/Services?Mode=0" .
		"";
		echo $strInfo;
	}
	
?>