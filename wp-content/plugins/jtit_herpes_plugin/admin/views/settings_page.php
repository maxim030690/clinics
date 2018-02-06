<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 26.12.2016
 * Time: 14:37
 */
$option = get_option('jtit_tests');
//Dump::out($option, 'option');
?>
<br>
<br>
<div class="row">
    <form action="" method="post">
        <div class="menu-edit ">
            <div id="nav-menu-header">
                affiliate ID
            </div>
            <br>
            <div class="major-publishing-actions wp-clearfix">
                <label for="order_url">affiliate ID </label>
                <input type="text" class="text" id="affiliate_ID" name="affiliate_ID" value="<?php echo  get_option('affiliate_ID')?>">
            </div>
            <br>
            <input type="hidden" name="jtit_action" value="save_affiliate_ID">
            <button type="submit">Save</button>
            <br>
        </div>
    </form>
</div>
<br>
<br>
<div class="row">
    <form action="" method="post">
        <div class="menu-edit ">
            <div id="nav-menu-header">
                Change city name
            </div>
            <br>
            <div class="major-publishing-actions wp-clearfix">
                <label for="order_url">City name </label>
                <input type="text" class="text" id="city_name" name="city_name" value="<?php echo  get_option('city_name')?>">
            </div>
            <br>
            <input type="hidden" name="jtit_action" value="save_city_name">
            <button type="submit">Save</button>
            <br>
        </div>
    </form>
</div>

<br>

<br>
<br>
<div class="row">
    <form action="" method="post">
        <div class="menu-edit ">
            <div id="nav-menu-header">
                Change order URL
            </div>
            <br>
            <div class="major-publishing-actions wp-clearfix">
                <label for="order_url">URL </label>
                <input type="url" class="text" id="order_url" name="order_url" value="<?php echo  get_option('order_url')?>">
            </div>
            <br>
            <input type="hidden" name="jtit_action" value="save_order_url">
            <button type="submit">Save</button>
            <br>
        </div>
    </form>
</div>

<br>

<form action="" method="post">
    <div class="menu-edit ">
        <div id="nav-menu-header">
            Add tests prices
        </div>
        <div class="major-publishing-actions wp-clearfix">

        </div>
        <table class="form-table">
            <tbody>
                <tr>
                    <th scope="row">
                        <label for="chlamydia">Chlamydia</label>
                    </th>
                    <td>
                        <input type="text" class="small-text" id="chlamydia" name="chlamydia" value="<?php echo $option['chlamydia']?>">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="Gonorrhea">Gonorrhea</label>
                    </th>
                    <td>
                        <input type="text" class="small-text" id="Gonorrhea" name="gonorrhea" value="<?php echo $option['gonorrhea']?>">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="herpes_1">Herpes 1</label>
                    </th>
                    <td>
                        <input type="text" class="small-text" id="herpes_1" name="herpes_1" value="<?php echo $option['herpes_1']?>">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="herpes_2">Herpes 2</label>
                    </th>
                    <td>
                        <input type="text" class="small-text" id="herpes_2" name="herpes_2" value="<?php echo $option['herpes_2']?>">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="HIV_1">HIV 1</label>
                    </th>
                    <td>
                        <input type="text" class="small-text" id="HIV_1" name="HIV_1" value="<?php echo $option['HIV_1']?>">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="hepatitis_B">Hepatitis A</label>
                    </th>
                    <td>
                        <input type="text" class="small-text" id="Chlamydia" name="hepatitis_A" value="<?php echo $option['hepatitis_A']?>">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="hepatitis_B">Hepatitis B</label>
                    </th>
                    <td>
                        <input type="text" class="small-text" id="Chlamydia" name="hepatitis_B" value="<?php echo $option['hepatitis_B']?>">
                    </td>
                </tr>

                <tr>
                    <th scope="row">
                        <label for="hepatitis_C">Hepatitis C</label>
                    </th>
                    <td>
                        <input type="text" class="small-text" id="hepatitis_C" name="hepatitis_C" value="<?php echo $option['hepatitis_C']?>">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="syphilis">Syphilis</label>
                    </th>
                    <td>
                        <input type="text" class="small-text" id="syphilis" name="syphilis"  value="<?php echo $option['syphilis']?>">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="HIV_2">HIV 2</label>
                    </th>
                    <td>
                        <input type="text" class="small-text" id="HIV_2" name="HIV_2" value="<?php echo $option['HIV_2']?>">
                    </td>
                </tr>
                <tr>
                <tr>
                    <th scope="row">
                        <label for="HIV_Antibody_Test">HIV Antibody Test</label>
                    </th>
                    <td>
                        <input type="text" class="small-text" id="HIV_Antibody_Test" name="HIV_Antibody_Test" value="<?php echo $option['HIV_Antibody_Test']?>">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="HIV_Antibody_Test">HIV Early Detection </label>
                    </th>
                    <td>
                        <input type="text" class="small-text" id="hiv-early" name="hiv-early" value="<?php echo $option['hiv-early']?>">
                    </td>
                </tr>
                <tr>
                    <th scope="row">
                        <label for="all_tests">10 Panel Comprehensive Test</label>
                    </th>
                    <td>
                        <input type="text" class="small-text" id="all_tests" name="all_tests"  value="<?php echo $option['all_tests']?>">
                    </td>
                </tr>
            </tbody>

        </table>
        <input type="hidden" name="jtit_action" value="save_tests_prices">
<button type="submit">Save</button>
    </div>
</form>
