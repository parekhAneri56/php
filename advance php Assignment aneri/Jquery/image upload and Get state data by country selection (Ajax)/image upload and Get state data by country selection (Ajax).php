<div style="background-color: grey; text-align: center; color: antiquewhite;">Register with us</div>
<BR>
<form method="post" enctype="multipart/form-data">

          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="text" name="email" placeholder="Email *" required class="form-control">
          </div>
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="password" name="pass" placeholder="Password *" required class="form-control">
          </div>
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="password" name="cpass" placeholder="Confirm Password *" required class="form-control">
          </div>
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="text" name="name" placeholder="Name *" required class="form-control">
          </div>
          <div class="form-group mt-2 col-md-8 mx-auto">
          <label>Select gender</label>  
          Male :<input type="radio" name="gender" value="male" required>
          Female :<input type="radio" name="gender" value="female" required>          
        </div>
        <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="file" name="img" placeholder="Photo *" required class="form-control">
          </div>

          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="text" name="phone" placeholder="Phone *" required class="form-control">
          </div>

          <div class="form-group mt-2 col-md-8 mx-auto">
            <textarea name="address" placeholder="Address *" required class="form-control"></textarea>
          </div>
       
<div class="form-group mt-2 col-md-8 mx-auto">
            <select name="country" placeholder="country *" required class="form-control">
              <option value="">-select country-</option>
              <?php 
              foreach($country as $country1)
              {
              ?>
              <option value="<?php echo $country1["country_id"];?>"><?php echo $country1["country_name"];?></option>
             <?php 
              }
              ?>
            </select>
          </div>

          <div class="form-group mt-2 col-md-8 mx-auto">
            <select name="state" placeholder=" state *" required class="form-control">
            <option value="">-select state-</option>
            <?php 
              foreach($state as $state1)
              {
              ?>
              <option value="<?php echo $state1["state_id"];?>"><?php echo $state1["state_name"];?></option>
             <?php 
              }
              ?>
            </select>
          </div>
          <div class="form-group mt-2 col-md-8 mx-auto">
            <input type="submit" name="reg" class="btn btn-lg btn-info" value="Register">
            <input type="reset" name="reset" class="btn btn-lg btn-danger" value="Reset">
          
          </div>
          </form>
       