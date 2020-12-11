<section class="flexible-inner-section bbh-inner-section map-contact-info">
    <div class="contact-info-container">
        <?php // Check rows exists.
            if( have_rows('map_contact_info') ):

                // Loop through rows.
                while( have_rows('map_contact_info') ) : the_row();
                $icomoon = get_sub_field('icomoon');
                $contact_info = get_sub_field('contact_info');
                ?>
                <div class="contact-card">
                    <span class="<?php echo $icomoon ?>"></span>
                    <?php echo $contact_info; ?>
                </div>
                <?php endwhile;
            endif;
    //  ?>
    </div>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d50873.6709915573!2d9.566202076247052!3d55.70081172258161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x464c83d78f06afd5%3A0x55cb0f8dd10e3f91!2sBusinessBuddy%20ApS!5e0!3m2!1sda!2sdk!4v1604303133553!5m2!1sda!2sdk" width="100%" height="500" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</section>
