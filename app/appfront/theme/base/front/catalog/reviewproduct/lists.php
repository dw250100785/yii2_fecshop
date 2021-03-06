<div class="main container one-column">
	<div class="col-main">
		<div class="std">
			<div class="review_lists">
				<div class="review_list_product" style="width:100%">
					<div style="width:170px;float:left;">
						<a href="<?= $url ?>">
							<img src="<?= Yii::$service->product->image->getResize($main_img,[150,150],false) ?>">
						</a>
					</div>
					
					<div style="width:600px;float:left;">
						<div style="">
						<a class="product_name" href="<?= $url ?>">
							<?= $name ?>
						</a> </div>
						<div class="product_info review_add_price">
							<div class="price_info">
								<?php # �۸񲿷�
									$priceView = [
										'view'	=> 'catalog/product/index/price.php'
									];
									$priceParam = [
										'price_info' => $price_info,
									];
								?>
								<?= Yii::$service->page->widget->render($priceView,$priceParam); ?>
							</div>
						</div>
						<div style="margin:20px 0 0">
							<div class="rbc_cold">
								<span>
									<span class="average_rating">Average rating :</span>
									<span class="review_star review_star_5" style="font-weight:bold;" itemprop="average">5</span>  
									
									<a rel="nofollow" href="http://www.intosmile.com/fashion-long-sleeve-round-neck-striped-knitted-sweater-1.html">
										(<span itemprop="count">1 reviews</span>)
									</a>
								</span>
							</div>					
							<a href="<?= $url ?>"  class="submitbutton">
								<span><span> Add To Cart</span></span> 
							</a>
							
							<a style="margin-left:10px" href="<?= $addReviewUrl ?>" onclick="" class="submitbutton">
								<span><span> Add Review</span></span> 
							</a>	 
						</div>
					</div>
					<div class="clear"></div>
				</div>
				<div class="product-Reviews"> 
					<div class="clear"></div>
					
					<div class="product-Reviews_top">
						<?php  if(is_array($coll) && !empty($coll)){  ?>
						<ul id="review_description">
							<?php foreach($coll as $one){  ?>
							<li>
								<div class="review_description_left">
									<a href="#" class="review_star review_star_5" onclick="javascript:return false;"></a>
									<p>By <?= $one['name'] ?></p>
									<span><?= $one['review_date'] ? date('Y-m-d H:i:s',$one['review_date']) : '' ?></span>
								</div>
								<div class="review_description_right">
									<input id="review_url_407" value="" type="hidden">
									<span class="review_description_right_span"><b><?= $one['summary'] ?></b></span>
									<div class="review_description_centen">
										<div class="addsize"></div>
										<div class="review-content">
											<?= $one['review_content'] ?>
										</div>
										<br>
									</div>
								</div>
								<div class="clear"></div>
							</li>
							<?php } ?>
						</ul>
						<?php } ?>
					</div>
					<div class="pageToolbar">
						<label class="title">Page:</label><?= $pageToolBar ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>