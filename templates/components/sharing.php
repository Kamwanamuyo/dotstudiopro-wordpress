<ul class='ds-sharepad'>
			          			<li>Share <i class='fa fa-share'></i></i></li>
			          			<li><a href='https://www.facebook.com/dialog/share?app_id=<?php echo get_option("ds_fb_app_id"); ?>&display=popup&href=<?php the_permalink() ?>&redirect_uri=<?php the_permalink() ?>' class='js-social-share buffer' target='_blank'><i class='fa fa-facebook'></i></a></li>
			          			<li><a href='https://twitter.com/share?url=<?php the_permalink() ?>' class='js-social-share buffer'><i class='fa fa-twitter' target='_blank'></i></a></li>
			          			<li><a href='https://plus.google.com/share?url=<?php the_permalink() ?>' class='js-social-share buffer' target='_blank'><i class='fa fa-google-plus'></i></a></li>
			          			<li><a href='https://www.tumblr.com/share/photo?source=http://image.myspotlight.tv/<?php echo $channel['for_meta']->image_id?>/640/360&posttype=photo&caption=<?php echo $headline_video->description ?> class='js-social-share buffer fa-shadow' target='_blank'><i class='fa fa-tumblr'></i></a></li>
			          			<li><a href='https://www.pinterest.com/pin/create/button/?url=<?php the_permalink() ?>&media=http://image.myspotlight.tv/<?php echo $channel['for_meta']->image_id?>/640/360&description=<?php echo $headline_video->description ?> class='js-social-share buffer'target='_blank' data-pin-config='none'><i class='fa fa-pinterest'></i></a></li>
			          		</ul>
