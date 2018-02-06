<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26.12.2016
 * Time: 17:46
 */



//
//Dump::out(session_id(), 'shoping card ses id');
//Dump::out($_SESSION);


?>

<!-- review order -->
<div class="small-12 large-5 columns">
    <div class="checkout-section">
        <h5><i class="fa fa-shopping-cart" area-hidden="true"></i> Shopping Cart</h5>

        <div class="checkout-section-content">

            <!-- shopping cart items -->
            <table class="checkout-shopping-cart-items">
                <tbody>
                <tr>
                    <th><h6>Product</h6></th>
                    <th><h6>Total</h6></th>
                </tr>
                <?php $total = 0;?>
                <?php $price = get_option('jtit_tests')?>
                <?php if (!empty($_SESSION['product_id'])):?>
                <?php if($_SESSION['product_id'] != 'all_tests'):?>
                <?php foreach ($_SESSION['product_id'] as $product):?>

                <tr>

                    <td><?php echo ucfirst(str_replace('_',' ', $product));?>
                        <a class="remove-test-link" href="/remove_test?product_id=<?php echo $product?>">
                            <i class="fa fa-times"></i>
                        </a>
                    </td>

                    <td>$<?php echo $price[$product];?></td>
                    <input multiple="multiple" value="<?php echo $product?>" type="hidden" name="order[product_ids][]" id="order_product_ids" />
                </tr>

                    <?php $total += $price[$product];?>
                <?php endforeach;?>
                <?php else :?>
                    <tr>
                        <td>10 Test Panel <a class="remove-test-link" href="/remove_test?product_id=all_tests"><i class="fa fa-times"></i></a></td>
                        <td>$<?php echo $price['all_tests'];?></td>
                        <?php $total = $price['all_tests'];?>
                        <input multiple="multiple" value="all_tests" type="hidden" name="order[product_ids][]" id="order_product_ids" />
                    </tr>

                <?php endif;?>



                <tr>
                    <td><strong>Order Total</strong></td>
                    <td><strong> $<?php echo $total;?></strong></td>
                </tr>
                <?php endif;?>
                <tbody>
            </table>




        </div>
    </div>
</div>
