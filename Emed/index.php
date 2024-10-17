<?php    include 'header.php';  ?>

    
<h2>Ordering process from Emeds</h2>
<div class="order">
  <marquee class="marquee"direction="left">
  <p>Emeds online medicine shop.      Order now.    Original product.     Best offer comming.   Keep buying form our shop and keep supporting.    Use the discount cuppon.      24/7 customer service    </p></marquee>
  <p>Pay less, get more. 
Saving patients time and money,helping your savings as you care for your body.</p>


  <div class="flt"> <h2>Select prodect and click Order button</h2><img src="image/order.jpg"></div>
  <div class="flt"><h2>Choose your payment method</h2><img src="image/pyment.jpg"></div>
  <div class="flt"><h2>Fast delivery with in a day</h2><img src="image/logo.jpg"></div>
</div>

<div class="catego">
  <section class="categos">
    <div class="initial">
      <h2>
        <span>Our Products</span>
      </h2>
      </div> 
  
  <div class="maincat"></div>


    <?php
    include 'connections/connection.php';

    $sql = "SELECT * FROM items";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result)>0){

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<img src='images/uploads/".$row['image']." 'style='width:300px;height:300px;'><br>" .$row['itemName']. "<br>" . $row['price']."<br>";
            if (isset($_SESSION['admin'])) {
                ?>
                <a href="connections/insertItems.php?update=<?php echo $row['id']; ?>">Update item</a> <br>
                <a href="connections/updateItems.php?delete=<?php echo $row['id']; ?>">Delete item</a> <br>
                
                <?php    
            }
            elseif (isset($_SESSION['email'])) {
                ?>
                <a href="cart.php?cart=<?php echo $row['id']; ?>">Add to cart</a> <br>
                <?php
            }
        }
    }else{
        echo "No items to show";
    }
    
?>

</section>
</div>

<div class="fimg">

    <img class="fimg" src="image/map.jpg">
    <p>Fastest delivery all over the country. Online medicine shop. 24/7 service. Easy to order. Open account in our website and enjoy discount. Become member of our Family. Use code. Thanks for the supprot. </p>
  </div>

<?php    include 'footer.php';  ?>

  <!-- <a href="">
    <div class="catbox">
      <div class="catname">PainKillers</div>
    </div>
  </a>
  <a href=""><div class="catbox">
      <div class="catname">Insulin</div>
    </div></a>
  <a href=""></a>
  <a href=""><div class="catbox">
      <div class="catname">Liquid</div>
    </div></a>
  <a href=""></a>
  <a href=""><div class="catbox">
      <div class="catname">Alcohol</div>
    </div></a>
  <a href=""></a>
  <a href=""><div class="catbox">
      <div class="catname">Pads</div>
    </div></a>
    <a href=""><div class="catbox">
      <div class="catname">Diapers</div>
    </div></a> -->