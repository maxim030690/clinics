<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.12.2016
 * Time: 18:37
 */

session_start();

$center = $_REQUEST['center'];

$_SESSION['center'] = $center;

if ($_SESSION['center'] && $_SESSION['product_id']){
    $redirect = site_url().'/get_tested_now';
}

?>
<script>
    var redirect = '<?php echo $redirect?$redirect:"";?>'
    if (redirect.length != 0 ){
        document.location.href=redirect;
    }
</script>
<form action="/get_tested_now" method="post">
    <input type="hidden" name="jtit_action" value="jtit_add_test">
    <input type="hidden" name="product_id" value="all_tests">
    <button type="submit" class="button order-now-btn">Order Now</button>
</form>
