<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 27.12.2016
 * Time: 14:42
 */
$_SESSION['center'];

$_SESSION['zip'];

//$selected = false;
?>

<?php if (empty($_SESSION['center'])):?>
<div class="lablistone checkout-section-content find-lab-section">
    <h6>Pick A Location <small><a href="/find_a_lab" style="background-color: transparent">View Map <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></small></h6>

    <input type="text" id="zip" name="zip" placeholder="Zip Code" class="zipcode-input" autocomplete="off" form="search">
    <button name="button" class="search-zip button" form="search">Search</button>
    <ul class="test-centers-lab-list text-left no-bullet list-bullet" style="display: none;">

    </ul>

</div>

<?php else:?>

    <div class="lablistone checkout-section-content find-lab-section">

        <?php echo $data['description_of_the_laboratory']; ?>

    </div>

<?php endif;?>

<script type="text/javascript" language="javascript">
$('#search').submit(

function (event) {
    event.preventDefault();
      var msg = $('#search').serialize();
        $.ajax({
          type: 'POST',
          url: '<?php echo JTIT_URL ?>lib/ajax/for_select_testing_center.php',
          data: msg,
          success: function(data) {
            var styles = {
            display : "block"
            };
            $('.list-bullet').css(styles);
            $('.list-bullet').html(data);
          },
          error:  function(xhr, str){
        alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
 
    });

function get_a_lab_zip(zip){
      $.ajax({
          type: 'POST',
          url: '<?php echo JTIT_URL ?>lib/ajax/ura.php',
          data: {"zip": zip},
          success: function(data) {
            $('.lablistone').html(data);
          },
          error:  function(xhr, str){
        alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
};
</script>