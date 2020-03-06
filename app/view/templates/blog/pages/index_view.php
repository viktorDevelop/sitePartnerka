<div class="content-text">

	<?if(!empty($arResult)):?>
			<?foreach($arResult as $item):?>
						<div class="blog_item">
							<div class="row">
								<div class="col-md-12">
									<h3><a href="<?=URL?>article/<?=$item['title_en']?>"  > <?=$item['title'];?></a></h3>
								</div>
								<div class="col-md-4">
									<a href="/" target="_blank"><img src="http://www.hdpaperz.com/wallpaper/original/canada-winter-moraine-lake-alberta-hd-high-511002.jpg" alt="alt"></a>
								</div>
								<div class="col-md-8">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur blanditiis, omnis ipsa sunt aspernatur impedit consequatur quasi, molestiae eos magni, tempora nisi ipsam itaque quas esse aut perspiciatis quia, veniam!</p>
								</div>
							</div>
						</div>
		<?endforeach?>
 	<?else:?>
		<?=$error;?>
 	<?endif?>
		 		 	
</div>
					 
					  