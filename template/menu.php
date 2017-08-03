<div id="mobile_fixed_menu">

	<?php if ( isset( $elements['phone'] ) ) : ?>

        <div class="menu-phone mfm-col-<?php echo $cont_items; ?>">
            <a href="tel:<?php echo $elements['phone']; ?>">
                <span class="phone"></span>
            </a>
        </div>

	<?php endif; ?>


	<?php if ( isset( $elements['email'] ) ) : ?>

        <div class="menu-email mfm-col-<?php echo $cont_items; ?>">
            <a href="mailto:<?php echo $elements['email']; ?>">
                <span class="email"></span>
            </a>
        </div>

	<?php endif; ?>


	<?php if ( isset( $elements['whatsapp'] ) ) : ?>

        <div class="menu-whatsapp mfm-col-<?php echo $cont_items; ?>">
            <a href="https://api.whatsapp.com/send?phone=<?php echo $elements['whatsapp']; ?>">
                <span class="whatsapp"></span>
            </a>
        </div>

	<?php endif; ?>


	<?php if ( isset( $elements['google_map_link'] ) ) : ?>

        <div class="menu-map mfm-col-<?php echo $cont_items; ?>">
            <a href="<?php echo $elements['google_map_link']; ?>">
                <span class="map"></span>
            </a>
        </div>

	<?php endif; ?>

</div>