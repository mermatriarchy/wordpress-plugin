<?php
// Template for email form
?>
<script type="text/javascript">
var ajaxurl = "<?php echo admin_url('admin-ajax.php'); ?>";
</script>

<!-- Feel free to change any of this -->
<div class="generic-email-widget">
  <h1>Sign up for our mailing list!</h1>
  <form id="email-form">
    <p>
      <input type="email" id="ge-email-address" placeholder="Email Address"/>
    </p>
    <p>
      <input type="checkbox" id="ge-optin-2"/>Get latest updates from Generic Corp.
    </p>
    <p>
      <input type="checkbox" id="ge-optin-3"/>Sign me up for great deals from GenericDealz.com
    </p>
    <p>
      <input type="submit" value="Submit">
    </p>
  </form>
<div>
