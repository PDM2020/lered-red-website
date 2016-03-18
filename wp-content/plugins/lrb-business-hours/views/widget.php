<!-- This file is used to markup the public-facing widget. -->


<?php if( strlen(trim($mon_fri)) >0 ) : ?>
  <div class="widget-business-hours">
    <p>
      <span class="widget-days">Monday to Friday:</span> <?php echo $mon_fri; ?>
        </p>
          <?php endif; ?>

            <?php if( strlen(trim($sat)) >0 ) : ?>
              <p>
                <span class="widget-days">Saturday:</span> <?php echo $sat; ?>
                </p>
              <?php endif; ?>

            <?php if( strlen(trim($sun)) >0 ) : ?>
        <p>
      <span class="widget-days">Sunday:</span> <?php echo $sun; ?>
    </p>
</div>
<?php endif; ?>
