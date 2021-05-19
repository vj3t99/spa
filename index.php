<?php 
 include 'inc/header.php';
 include 'inc/slider.php';
?>
	

 <div class="main">
    <div class="content">
    	<div class="content_top">
    		<div class="heading">
    		<h3>Sản phẩm nổi bật</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
	      <div class="product">
	      <?php 
	      $product_type = $pd->getproductType();
	      if($product_type){
	          while ($result = $product_type->fetch_assoc()) {
	              
	          
	      
	      ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php"><img src="admin/upload/<?php echo $result['image'];?>" class="img-product" alt="" /></a>
					 <h2><?php echo $result['productName'];?> </h2>
					 <p><?php echo $fm->textShorten($result['productdesc'],80);?></p>
					 <p class="content-product"><span class="price"><?php echo $result['price']."  VNĐ";?></span></p>
				     <div class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>" class="details">Chi Tiết</a></span></div>
				</div>
				
				<?php 
	          }
	      }
	      ?>
			</div>
			<div>
			<?php 
			$product_all = $pd->show_Product();
			$page_count = mysqli_num_rows($product_all);
			$page = ceil($page_count/8);
			for ($i = 1; $i < $page; $i++) {
			    echo '<a href = "index.php?page='.$i.'">'.$i.'</a>';
			}
			?>
			</div>
			<div class="content_bottom">
    		<div class="heading">
    		<h3>Sản phẩm mới</h3>
    		</div>
    		<div class="clear"></div>
    	</div>
			<div class="section group">
				<?php 
	      $product_new = $pd->getproductNew();
	      if($product_new){
	          while ($result = $product_new->fetch_assoc()) {
	              
	          
	      
	      ?>
				<div class="grid_1_of_4 images_1_of_4">
					 <a href="details.php"><img src="admin/upload/<?php echo $result['image'];?>" width = "500" alt="" /></a>
					 <h2><?php echo $result['productName'];?> </h2>
					 <p><?php echo $fm->textShorten($result['productdesc'],80);?></p>
					 <p><span class="price"><?php echo $result['price']."  VNĐ";?></span></p>
				     <div id="button-product" class="button"><span><a href="details.php?proid=<?php echo $result['productId']?>" class="details">Chi Tiết</a></span></div>
				</div>
				
				<?php 
	          }
	      }
	      ?>
			</div>
    </div>
 </div>
 
<?php
include 'inc/footer.php'; 
?>
