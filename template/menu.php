<div id="mobile_fixed_menu">

	<?php if ( isset( $elements['phone'] ) ) : ?>

        <div class="menu-phone">
            <a href="tel:<?php echo $elements['phone']; ?>" class="mfm-col-<?php echo $cont_items; ?>">
                <span class="phone"></span>
            </a>
        </div>

	<?php endif; ?>


	<?php if ( isset( $elements['email'] ) ) : ?>

        <div class="menu-email">
            <a href="mailto:<?php echo $elements['email']; ?>" class="mfm-col-<?php echo $cont_items; ?>">
                <span class="email"></span>
            </a>
        </div>

	<?php endif; ?>


	<?php if ( isset( $elements['whatsapp'] ) ) : ?>

        <div class="menu-whatsapp">
            <a href="https://api.whatsapp.com/send?phone=<?php echo $elements['whatsapp']; ?>" class="mfm-col-<?php echo $cont_items; ?>">
                <span class="whatsapp"></span>
            </a>
        </div>

	<?php endif; ?>


	<?php if ( isset( $elements['google_map_link'] ) ) : ?>

        <div class="menu-map">
            <a href="<?php echo $elements['google_map_link']; ?>" class="mfm-col-<?php echo $cont_items; ?>">
                <span class="map"></span>
            </a>
        </div>

	<?php endif; ?>

</div>


</div>