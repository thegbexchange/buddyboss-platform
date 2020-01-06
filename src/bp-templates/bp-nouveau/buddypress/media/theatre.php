<?php
/**
 * BuddyBoss - Media Theatre
 *
 * @since BuddyBoss 1.0.0
 */
?>
<div class="bb-media-model-wrapper bb-internal-model" style="display: none;">

    <a data-balloon-pos="left" data-balloon="<?php _e( 'Close', 'buddyboss' ); ?>" class="bb-close-media-theatre bb-close-model" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="14" height="14"><path fill="none" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 1L1 13m12 0L1 1" opacity=".7"/></svg></a>

    <div id="bb-media-model-container" class="bb-media-model-container">
        <div class="bb-media-model-inner">
            <div class="bb-media-section">
                <a class="theater-command bb-prev-media" href="#previous">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="30"><path fill="none" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 29L1 15 15 1" opacity=".7"/></svg>
                </a>

                <a class="theater-command bb-next-media" href="#next">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="30"><path fill="none" stroke="#FFF" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l14 14L1 29" opacity=".7"/></svg>
                </a>

                <figure class="">
                    <img src="" alt="" />
                </figure>

	            <div class="bb-dropdown-wrap">
		            <?php $privacy_options = BP_Media_Privacy::instance()->get_visibility_options(); ?>
		            <div class="bb-media-privacy-wrap" style="display: none;">
			            <span class="bp-tooltip privacy-wrap" data-bp-tooltip-pos="up" data-bp-tooltip=""><span class="privacy selected"></span></span>
			            <ul class="media-privacy">
				            <?php foreach( $privacy_options as $item_key => $privacy_item ) {
					            ?><li data-value="<?php echo $item_key; ?>" class="<?php echo $item_key; ?>"><?php echo $privacy_item; ?></li><?php
				            } ?>
			            </ul>
		            </div>
	            </div>

            </div>
            <div class="bb-media-info-section">
                <ul class="activity-list item-list bp-list"><span><i class="bb-icon-spin5 animate-spin"></i></span></ul>
            </div>
        </div>
    </div>

</div>
