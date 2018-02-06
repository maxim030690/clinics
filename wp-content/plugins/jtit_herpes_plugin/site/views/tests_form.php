<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26.12.2016
 * Time: 11:28
 */

//Dump::out(get_the_title());
$prices = get_option('jtit_tests');
//Dump::out($prices);
Dump::out(session_id());
if(!session_id()){
    session_start();
}
$token = session_id();

switch (strtolower(get_the_title())) {
    case 'chlamydia':
        $tests['chlamydia']['price'] = $prices['chlamydia'];
        $tests['chlamydia']['label'] = 'Chlamydia';
        break;
    case 'gonorrhea': //Gonorrhea
        $tests['gonorrhea']['price'] = $prices['gonorrhea'];
        $tests['gonorrhea']['label'] = 'Gonorrhea';
        break;
    case 'syphilis': //Syphilis
        $tests['syphilis']['price'] = $prices['syphilis'];
        $tests['syphilis']['label'] = 'Syphilis';
        break;
    case 'hepatitis':
        $tests['hepatitis_A']['price'] = $prices['hepatitis_A'];
        $tests['hepatitis_A']['label'] = 'Hepatitis A';

        $tests['hepatitis_B']['price'] = $prices['hepatitis_B'];
        $tests['hepatitis_B']['label'] = 'Hepatitis B';

        $tests['hepatitis_C']['price'] = $prices['hepatitis_C'];
        $tests['hepatitis_C']['label'] = 'Hepatitis C';
        break;
    case 'herpes':
        $tests['herpes_1']['price'] = $prices['herpes_1'];
        $tests['herpes_1']['label'] = 'Herpes 1';

        $tests['herpes_2']['price'] = $prices['herpes_2'];
        $tests['herpes_2']['label'] = 'Herpes 2';
        break;
}

?>

<!--<div class="disease-info-section text-center light-grey-bg">-->
    <div class="disease-tests-and-pricing">
        <h4 class="text-left">Tests & Pricing </h4>
        <div class="bordered-box-content text-left">
            <p>Our doctors use a FDA-approved genital herpes test advanced enough to screen both HSV-1 (oral herpes) and HSV-2 (genital herpes) individually.  The herpes test requires a blood sample and only takes a few minutes, results in 1-2 days.</p>
            <h5>Please Select Your Test Below:</h5>

            <form class="" action="<?php echo  get_option('order_url')?>" accept-charset="UTF-8" method="post">
                <input name="utf8" type="hidden" value="&#x2713;" />
                <input type="hidden" name="authenticity_token" value="<?php echo $token?>" />
                <input type="hidden" name="jtit_action" value="jtit_add_test">
                <div class="test-option">
                    <input type="radio" name="product_id" value="all_tests" id="ten-panel-test">
                    <label for="ten-panel-test">  10 Panel Comprehensive Test <span class="price">$<?php echo $prices['all_tests']?></span></label>
                </div><br /><br />

                <?php if (isset($tests)):?>
                <?php foreach ($tests as $key => $test):?>
                <div class="test-option">
                    <input type="radio" name="product_id" value="<?php echo $key;?>" id="<?php echo $key;?>">
                    <label for="herpes1-test"> <?php echo $test['label'];?> <span class="price">$<?php echo $test['price'];?></span></label>
                </div>
                <?php endforeach;?>
                <?php endif;?>

                    <div class="test-submit text-right">
                    <input type="submit" class="get-tested-now-btn button" value="Get Tested Now" />
                </div>

            </form>
        </div>
    </div>
<!--</div>-->
