<?php
	$mode = '';
	if(array_key_exists('Mode', $_GET)){
		$mode = trim($_GET["Mode"]);
	}
	
	switch ($mode) {
    case "0":
		CompanyList();
        break;
    case "1":
		CategoryList();
        break;
    case "2":
		CommentList();
        break;
    case "3":
		EventList();
        break;
    case "4":
		ArticleList();
        break;
    case "5":
		ProductList();
        break;
    case "6":
		PromoList();
        break;
    case "7":
		InsertComment();
        break;
    case "8":
		Login();
        break;
	default:
		Info();
		break;
}	
?>
<?php
	//FUNCTION 
	
	function SetCriteria(){
	
		$criteria = new CDbCriteria;
		if(array_key_exists('Condition', $_GET) )
			$criteria->condition = $_GET["Condition"];
		
		if(array_key_exists('Limit', $_GET) )
			$criteria->limit = $_GET["Limit"];
		
		if(array_key_exists('Offset', $_GET) )
			$criteria->offset = $_GET["Offset"];
		
		return $criteria;
	}
	
	function CompanyList(){
		$criteria = SetCriteria();
		$criteria->select = array('res_id','category_id','title','status','description','url','owner_name','email','hits','created_at','submit_code','address','city','state','zip','country','last_update','featured','featured_expired','seo_title','tag','user_id','ar_number_votes','ar_total_points','ar_dec_avg','ar_whole_avg','vote','reciprocal_url','last_checked_online','last_checked_reciprocal','online','reciprocal','phone','fax','logo','suspended','suspended_reason','listing_type','phone2','phone3');
		$lepResource = LepResource::model()->findAll($criteria);
		echo CJSON::encode($lepResource );
	}
	function CategoryList() {
		$lepCategory = LepCategory::model()->findAll();
		echo CJSON::encode($lepCategory );
	}
	function CommentList(){
		$criteria = SetCriteria();
		$lepComment = LepComment::model()->findAll($criteria);
		foreach($lepComment as $m){
			$res = $m->getAttributes();
			$usr = LepUser::model()->findByAttributes(array("user_id"=>$m->user_id));
			$res["username"] = $usr->username;
			$result[] = $res;
		}
		echo json_encode($result);
	}
	function EventList(){
		$criteria = SetCriteria();
		$lepEvent = LepEvent::model()->findAll($criteria);
		echo CJSON::encode($lepEvent );
	}
	function ArticleList(){
		$criteria = SetCriteria();
		$lepArticle = LepArticle::model()->findAll($criteria);
		echo CJSON::encode($lepArticle );
	}
	function ProductList(){
		$criteria = SetCriteria();
		$lepProduct = LepProduct::model()->findAll($criteria);
		echo CJSON::encode($lepProduct );
	}
	function PromoList(){
		$criteria = SetCriteria();
		$lepPromo = LepPromo::model()->findAll($criteria);
		echo CJSON::encode($lepPromo );
	}
	function InsertComment(){
		$lepComment = new LepComment;
		$lepComment->unsetAttributes();
		$lepComment->setIsNewRecord(true);
        $lepComment->res_id = $_GET["Res_id"];
        $lepComment->user_id = $_GET["User_id"];
        $lepComment->comment = $_GET["Comment"];
        $lepComment->status = $_GET["Status"];
        $lepComment->created_at = date("m-d-Y");
        $lepComment->subject = $_GET["Subject"];
        $lepComment->rating = $_GET["Rating"];
        $lepComment->save();
		
		echo CVarDumper::Dump($lepComment->getErrors(),100,true);
		$res["result"] = "OK";
		echo json_encode($res);
	}
	function Login() {
		$usr = LepUser::model()->findByAttributes(array("username"=>$_GET["Username"], "password"=>md5($_GET["Password"])));
		if (count($usr) == 1){
			echo "ok ".$lepComment->user_id." ".$lepComment->user_id;
		}else{
			echo "failed".count($usr);
		}
	}
	function Info(){
		
		echo date("m-d-Y")."<br />";
	
		$strInfo = "" .
		"<h3>Services for Ekspedisi.net </h3>" .
		"<b>Mode 0: Company List</b><br />" .
		"/Services?<b>Mode</b>=0&<b>Condition</b>=[sqlCondition](optional)&<b>Limit</b>=[Limit](optional)&<b>Offset</b>=[Offset](optional)<br /><br />" .
		"".
		"<b>Mode 1: Category List</b><br />" .
		"/Services?<b>Mode</b>=1&<b>Condition</b><br /><br />" .
		"".
		"<b>Mode 2: Comment List</b><br />" .
		"/Services?<b>Mode</b>=2&<b>Condition</b>=[sqlCondition](optional)&<b>Limit</b>=[Limit](optional)&<b>Offset</b>=[Offset](optional)<br /><br />" .
		"".
		"<b>Mode 3: Event List</b><br />" .
		"/Services?<b>Mode</b>=3&<b>Condition</b>=[sqlCondition](optional)&<b>Limit</b>=[Limit](optional)&<b>Offset</b>=[Offset](optional)<br /><br />" .
		"".
		"<b>Mode 4: Article List</b><br />" .
		"/Services?<b>Mode</b>=4&<b>Condition</b>=[sqlCondition](optional)&<b>Limit</b>=[Limit](optional)&<b>Offset</b>=[Offset](optional)<br /><br />" .
		"".
		"<b>Mode 5: Product List</b><br />" .
		"/Services?<b>Mode</b>=5&<b>Condition</b>=[sqlCondition](optional)&<b>Limit</b>=[Limit](optional)&<b>Offset</b>=[Offset](optional)<br /><br />" .
		"".
		"<b>Mode 6: Promo List</b><br />" .
		"/Services?<b>Mode</b>=6&<b>Condition</b>=[sqlCondition](optional)&<b>Limit</b>=[Limit](optional)&<b>Offset</b>=[Offset](optional)<br /><br />" .
		"".
		"<b>Mode 7: Insert Comment</b><br />" .
		"/Services?<b>Mode</b>=7&<b>Res_id</b>=[Res_id]&<b>User_id</b>=[User_id]&<b>Comment</b>=[Comment]&<b>Status</b>=[Status]&<b>Subject</b>=[Subject]&<b>Rating</b>=[Rating]<br /><br />" .
		"".
		"<b>Mode 8: Login</b><br />" .
		"/Services?<b>Mode</b>=8&<b>Username</b>=[Username]&<b>Password</b>=[Password]<br /><br />" .
		"";
		echo $strInfo;
	}
	
?>