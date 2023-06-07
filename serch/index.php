<?php 
include("Product.php");
$product = new Product();
$categories = $product->getCategories();
$countries = $product->getcountry();
$areas = $product->getarea();
$ages = $product->getage();
$totalRecords = $product->getTotalProducts();
include('inc/header.php');
?>
<title>webdamn.com : Demo Product Search Filtering using Ajax, PHP & MySQL</title>
<link rel="stylesheet" type='text/css' href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/fontawesome.min.css">
<link rel="stylesheet" type='text/css' href="css/style.css">       
<?php include('inc/container.php');?>
<div class="content"> 
	<div class="container-fluid">
		<h2>Example: Product Search Filtering using Ajax, PHP & MySQL</h2>			
            <form method="post" id="search_form">               
                <div class="row">                    
                    <aside class="col-lg-3 col-md-4">						
						<div class="panel list">
                            <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#panelOne" aria-expanded="true">Categories</h3></div>
                            <div class="panel-body collapse in" id="panelOne">
                                <ul class="list-group">
                                <?php 
								foreach ($categories as $key => $category) {
                                    if(isset($_POST['category'])) {
                                        if(in_array($product->cleanString($category['category_id']),$_POST['category'])) {
                                            $categoryCheck ='checked="checked"';
                                        } else {
											$categoryCheck="";
                                        }
									}
                                ?>
								<li class="list-group-item">
									<div class="checkbox"><label><input type="checkbox" value="<?php echo $product->cleanString($category['category_id']); ?>" <?php echo @$categoryCheck; ?> name="category[]" class="sort_rang category"><?php echo ucfirst($category['category_name']); ?></label></div>
								</li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="panel list">
                            <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#panelOne" aria-expanded="true">country</h3></div>
                            <div class="panel-body collapse in" id="panelOne">
                                <ul class="list-group">
                                <?php 
								foreach ($countries as $key => $country) {
                                    if(isset($_POST['country'])) {
                                        if(in_array($product->cleanString($country['country']),$_POST['country'])) {
                                            $countryChecked ='checked="checked"';
                                        } else {
											$countryChecked="";
                                        }
									}
                                ?>
								<li class="list-group-item">
									<div class="checkbox"><label><input type="checkbox" value="<?php echo $product->cleanString($country['country']); ?>" <?php echo @$countryChecked; ?> name="country[]" class="sort_rang country"><?php echo ucfirst($country['country']); ?></label></div>
								</li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
						<div class="panel list">
                            <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#panelOne" aria-expanded="true">Sort By </h3></div>
                            <div class="panel-body collapse in" id="panelOne">
								<div class="radio disabled">
									<label><input type="radio" name="sorting" value="newest" <?php if(isset($_POST['sorting']) && ($_POST['sorting'] == 'newest' || $_POST['sorting'] == '')) {echo "checked";} ?> class="sort_rang sorting">Newest</label>
								</div> 
								<div class="radio">
									<label><input type="radio" name="sorting" value="low" <?php if(isset($_POST['sorting']) && $_POST['sorting'] == 'low') {echo "checked";} ?> class="sort_rang sorting">Price: Low to High</label>
								</div>
								<div class="radio">
									<label><input type="radio" name="sorting" value="high" <?php if(isset($_POST['sorting']) && $_POST['sorting'] == 'high') {echo "checked";} ?> class="sort_rang sorting">Price: High to Low</label>
								</div>								                              
                            </div>
                        </div>
                        <div class="panel list">
                            <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#panelTwo" aria-expanded="true"> Area</h3></div>
                            <div class="panel-body collapse in" id="panelTwo">
                                <ul class="list-group">
                                <?php 
								foreach ($areas as $key => $area) {
                                    if(isset($_POST['area'])) {
                                        if(in_array($product->cleanString($area['area']),$_POST['area'])) {
                                            $areaCheck='checked="checked"';
										} else { 
											$areaCheck="";
										}
                                    }
                                ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label><input type="checkbox" value="<?php echo $product->cleanString($area['area']); ?>" <?php echo @$areaCheck?>  name="area[]" class="sort_rang area"><?php echo ucfirst($area['area']); ?></label></div>
                                    </li>
                                <?php } ?>
                                </ul>
                            </div>
                        </div>
                        <div class="panel list">
                            <div class="panel-heading"><h3 class="panel-title" data-toggle="collapse" data-target="#panelFour" aria-expanded="true">Age</h3></div>
                            <div class="panel-body collapse in" id="panelFour">
                                <ul class="list-group">
                                    <?php foreach ($ages as $key => $age) {
                                        if(isset($_POST['age'])){
                                            if(in_array($age['age'],$_POST['age'])) {
                                                $ageCheck='checked="checked"';
                                            } else {
												$ageCheck="";
                                            }
                                        }
                                    ?>
                                    <li class="list-group-item">
                                        <div class="checkbox"><label><input type="checkbox" value="<?php echo $age['age']; ?>" <?php echo @$ageCheck; ?>  name="age[]" class="sort_rang age"><?php echo $age['age']; ?></label></div>
                                    </li>
									<?php } ?>
                                </ul>
                            </div>
                        </div>
                    </aside>
                    <section class="col-lg-9 col-md-8">
                        <div class="row">
                            <div id="results"></div>
                        </div>
                    </section>
                </div>
				<input type="hidden" id="totalRecords" value="<?php echo $totalRecords; ?>">
            </form>
        </div>        
    </div>        
<script src="js/script.js"></script>		
<?php include('inc/footer.php');?>
