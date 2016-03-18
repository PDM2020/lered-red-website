<!-- This file is used to markup the public-facing widget. -->


<?php if( strlen(trim($lrb_phone)) >0 ) : ?>
  <div class="widget-contact-info">
    <p>
      <span class="lrb-widget-phone"><i class="fa fa-phone"></i></span> <?php echo $lrb_phone; ?>
        </p>
          <?php endif; ?>

            <?php if( strlen(trim($lrb_email)) >0 ) : ?>
              <p>
                <span class="lrb-widget-email"><i class="fa fa-envelope"></i></span>  <?php echo $lrb_email; ?>
                </p>
              <?php endif; ?>

            <?php if( strlen(trim($lrb_address)) >0 ) : ?>
        <p>
  <ul><li class="lrb-widget-address"> <?php echo $lrb_address; ?></li></ul>
  </p>
</div>
<?php endif; ?>
