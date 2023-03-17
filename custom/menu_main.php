
<nav class="main_menu">
	<ul>
		<?php foreach( $data_items_menu as $item ): ?>
			<?php
				$data_item_li = $item->id;
				$active = ( $item->link_href == basename( $_SERVER["PHP_SELF"]) ) ? "class='active' " : "";
			?>

			<?php if( $item->publish ): ?>
				<li <?php echo $active;  ?>data-itemid="<?php echo $data_item_li; ?>">
					<?php if( $item->link_href == basename( $_SERVER["PHP_SELF"]) ): ?>
						
						<span class="item separator">
							<span><?php echo $item->title; ?></span>
						</span>
					
					<?php else: ?>

						<a class="item" href="<?php echo $item->link_href?>" target="<?php echo $item->link_target; ?>">
							<span>
								<?php echo $item->title; ?>
							</span>
						</a>

					<?php endif; ?>

				</li>
			<?php endif ?>	
		<?php endforeach; ?>
	</ul>
</nav>