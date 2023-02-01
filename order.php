<?php
include('header.php');
?>


<div class="container-fluid ">
    <div class="container">
      <div class="row my-5 ">
        <div class="col p-5">
          <form action="action.php" method="post">
            
            <div class="form-group">
              <label for="name">name</label>
              <input type="text" id="name" class="form-control" name="name" >
            </div>
            <div class="form-group">
              <label for="pnumber">phone number</label>
              <input type="text" name="pnumber" class="form-control" >
            </div>
            <div class="form-group">
              <label for="item_name">item name</label>
              <input type="text" value="saras gold" class="form-control" name="item_name" >
            </div>
            <div class="form-group">
              <label for="quantity">quantity</label>
              <input type="number" class="form-control" name="qty" >
            </div>
            <address class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address">
            </address>
            
            <button type="submit" name="order" class="btn btn-primary">Buy</button>
          </form>
         
        </div>
      </div>
    </div>
  </div>
  <?php
include('footer.php');
?>