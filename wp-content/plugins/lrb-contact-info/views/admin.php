<!-- This file is used to markup the administration form of the widget. -->

<div class="widget-content">
   <p><label for="<?php echo $this->get_field_id('title'); ?>">Title:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('lrb_phone'); ?>">Phone:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('lrb_phone'); ?>" name="<?php echo $this->get_field_name('lrb_phone'); ?>" type="text" value="<?php echo $lrb_phone; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('lrb_email'); ?>">Email:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('lrb_email'); ?>" name="<?php echo $this->get_field_name('lrb_email'); ?>" type="text" value="<?php echo $lrb_email; ?>">
   </p>

   <p><label for="<?php echo $this->get_field_id('lrb_address'); ?>">Address:</label>
		<input class="widefat" id="<?php echo $this->get_field_id('lrb_address'); ?>" name="<?php echo $this->get_field_name('lrb_address'); ?>" type="text" value="<?php echo $lrb_address; ?>">
   </p>

</div>
