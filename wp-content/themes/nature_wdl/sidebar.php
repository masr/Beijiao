	<div id="sidebar" class="sidebars">
		<ul>
		<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar(1) ){
			?>
			<?
			} else { ?>	
            
			<li class="widget_categories">
                <h2>Pages</h2>
                <ul>
                    <?php wp_list_pages('sort_column=menu_order&title_li='); ?>
                </ul>
            </li>
            
			<li class="widget_categories">
                <h2>Category</h2>
                <ul>
                    <?php wp_list_cats('sort_column=name&optioncount=1'); ?>
                </ul>
            </li>

			<li class="widget_archives"><h2>Archives</h2>
				<ul>
				<?php wp_get_archives('type=monthly'); ?>
				</ul>
			</li>
            
			<?php wp_list_bookmarks(); ?>
            
		<?php } ?>
        </ul>
	</div>

