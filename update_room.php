<?php
  include "header.php";
?>
<main><div class="container">
  <div id="test1"><div class="card">
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Input Room</span><br>
        <div class="row">

      <div class="col s12"><form action="" method="post">
        <div class="row">

        <div class="row">
          <div class="input-field col s12">
            <input id="room" type="text" class="" name="room" length="20" value="">
            <label for="room">Room(Name)</label>
          </div>
        </div>

        <div class="input-field">
            <select name="type">
              <option value="" selected>seelected</option>
              <option value="">type</option>
            </select>
            <label for="type">Room Type</label>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <label class="pay">Status</label><br>
                <p class="gender">
                  <input class="with-gap" name="status" type="radio" id="available" value="Available">
                  <label for="available">Available</label>
                </p>
                <p class="gender">
                  <input class="with-gap" name="status" type="radio" id="reserved" value="Reserved">
                  <label for="reserved">Reserved</label>
                </p>
                 <p class="gender">
                  <input class="with-gap" name="status" type="radio" id="full" value="Full">
                  <label for="full">Full</label>
                </p>
            </div>
          </div>
                     

          <br>
          <input type="submit" class="btn blue" name="" value="Save">
      </form></div>
      </div>
    </div>
  </div>
</div></div>
</div></main>
<?php
  include "footer.php";
?>