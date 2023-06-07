<?php
class Product{
	private $host  = 'localhost';
    private $user  = 'root';
    private $password   = "";
    private $database  = "software";
	private $productTable = 'products';    
	private $dbConnect = false;
    public function __construct(){
        if(!$this->dbConnect){ 
            $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if($conn->connect_error){
                die("Error failed to connect to MySQL: " . $conn->connect_error);
            }else{
                $this->dbConnect = $conn;
            }
        }
    }
	private function getData($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$data= array();
		while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
			$data[]=$row;            
		}
		return $data;
	}
	private function getNumRows($sqlQuery) {
		$result = mysqli_query($this->dbConnect, $sqlQuery);
		if(!$result){
			die('Error in query: '. mysqli_error());
		}
		$numRows = mysqli_num_rows($result);
		return $numRows;
	}	
	public function cleanString($str){
		return str_replace(' ','_',$str);
	}
	public function getCategories() {		
		$sqlQuery = "
			SELECT category_id, category_name
			FROM ".$this->productTable." 
			GROUP BY category_name";
        return  $this->getData($sqlQuery);
	}
	public function getcountry () {
		$sql = '';
		if(isset($_POST['category']) && $_POST['category']!="") {
			$category = $_POST['category'];
			$sql.=" WHERE category_id IN ('".implode("','",$category)."')";
		}
		$sqlQuery = "
			SELECT distinct country
			FROM ".$this->productTable." 
			$sql GROUP BY country";
        return  $this->getData($sqlQuery);
	}
	public function getarea () {
		$sql = '';
		if(isset($_POST['country']) && $_POST['country']!="") {
			$country = $_POST['country'];
			$sql.=" WHERE country IN ('".implode("','",$country)."')";
		}
		$sqlQuery = "
			SELECT distinct area
			FROM ".$this->productTable." 
			$sql GROUP BY area";
        return  $this->getData($sqlQuery);
	}
	public function getage () {
		$sql = '';
		if(isset($_POST['country']) && $_POST['country']!="") {
			$country = $_POST['country'];
			$sql.=" WHERE country IN ('".implode("','",$country)."')";
		}
		$sqlQuery = "
			SELECT distinct age
			FROM ".$this->productTable." 
			$sql GROUP BY age";
        return  $this->getData($sqlQuery);
	}
	public function getTotalProducts () {
		$sql= "SELECT distinct id FROM ".$this->productTable."  WHERE avail != 0";
		if(isset($_POST['category']) && $_POST['category']!="") {
			$category = $_POST['category'];
			$sql.=" AND category_id IN ('".implode("','",$category)."')";
		}
		if(isset($_POST['country']) && $_POST['country']!="") {
			$country = $_POST['country'];
			$sql.=" AND country IN ('".implode("','",$country)."')";
		}
		if(isset($_POST['area']) && $_POST['area']!="") {
			$area = $_POST['area'];
			$sql.=" AND area IN ('".implode("','",$area)."')";
		}
		if(isset($_POST['age']) && $_POST['age']!="") {
			$age = $_POST['age'];
			$sql.=" AND age IN (".implode(',',$age).")";
		}		
		$productPerPage = 9;		
		$rowCount = $this->getNumRows($sql);
		$totalData = ceil($rowCount / $productPerPage);
		return $totalData;
	}		
	public function getProducts() {
		$productPerPage = 9;	
		$totalRecord  = strtolower(trim(str_replace("/","",$_POST['totalRecord'])));
		$start = ceil($totalRecord * $productPerPage);		
		$sql= "SELECT * FROM ".$this->productTable." WHERE avail != 0";	
		if(isset($_POST['category']) && $_POST['category']!=""){			
			$sql.=" AND category_id IN ('".implode("','",$_POST['category'])."')";
		}
		if(isset($_POST['country']) && $_POST['country']!=""){			
			$sql.=" AND country IN ('".implode("','",$_POST['country'])."')";
		}
		if(isset($_POST['area']) && $_POST['area']!="") {			
			$sql.=" AND area IN ('".implode("','",$_POST['area'])."')";
		}		
		if(isset($_POST['age']) && $_POST['age']!="") {			
			$sql.=" AND age IN (".implode(',',$_POST['age']).")";
		}
		
		if(isset($_POST['sorting']) && $_POST['sorting']!="") {
			$sorting = implode("','",$_POST['sorting']);			
			if($sorting == 'newest' || $sorting == '') {
				$sql.=" ORDER BY id DESC";
			} else if($sorting == 'low') {
				$sql.=" ORDER BY price ASC";
			} else if($sorting == 'high') {
				$sql.=" ORDER BY price DESC";
			}
		} else {
			$sql.=" ORDER BY id DESC";
		}		
		$sql.=" LIMIT $start, $productPerPage";		
		$products = $this->getData($sql);
		$rowcount = $this->getNumRows($sql);
		$productHTML = '';
		if(isset($products) && count($products)) {			
            foreach ($products as $key => $product) {				
                $productHTML .= '<article class="col-md-4 col-sm-6">';
                $productHTML .= '<div class="thumbnail product">';
                $productHTML .= '<figure>';
                $productHTML .= '<a href="#"><img src="images/'.$product['image'].'" alt="'.$product['product_name'].'" /></a>';
                $productHTML .= '</figure>';
                $productHTML .= '<div class="caption">';
                $productHTML .= '<a href="" class="product-name">'.$product['product_name'].'</a>';
                $productHTML .= '<div class="price">$'.$product['price'].'</div>';
                $productHTML .= '<h6>country : '.$product['country'].'</h6>';
                $productHTML .= '<h6>area : '.$product['area'].'</h6>';
                $productHTML .= '<h6>age : '.$product['age'].'</h6>';
                $productHTML .= '</div>';
                $productHTML .= '</div>';
                $productHTML .= '</article>';				
			}
		}
		return 	$productHTML;	
	}	
}
?>