 <?php
  include "header.php";
?>
 <main>
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <div class="card">
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Re-Shedule</span>
                  <div class="row">

                    <form class="col s12" action="" method="post">
                     <div class="row">
                        <div class="input-field col s6 m6">
                          <input class="datepicker" type="text" class="" name="checkin" value="">
                          <label for="">Check In</label>
                        </div>
                        <div class="input-field col s6 m6">
                          <input class="datepicker" type="text" class="" name="checkout" value="">
                          <label for="">Check Out</label>
                        </div>
                      </div>

                      <div class="input-field">
                         <select name="room">
                           <option value="" selected>Room dipilih</option>
                           <option value="">List Room</option>
                         </select>
                         <label>Room</label>
                       </div>

                      <div class="row">
                       <div class="input-field col s9">
                         <select name="name">
                           <option value="" selected>Tamu yg dipilih</option>
                            <option value="">Nama tamu</option>
                         </select> 
                         <label>Name</label>
                       </div>
                       <br><button data-target="modal1" class="btn modal-trigger blue">Add Guest</button>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                        <label class="pay">Payment</label><br>
                           <p class="gender">
                            <input class="with-gap" name="biaya" type="radio" id="yes" value="Yes" />
                            <label for="yes">Yes</label>
                          </p>
                          <p class="gender">
                            <input class="with-gap" name="biaya" type="radio" id="no" value="No"/>
                            <label for="no">No</label>
                          </p>
                        </div>
                      </div>

                      <div class="row">
                       <div class="input-field col s12">
                         <input id="" type="text" class="" name="event" value="">
                         <label for="">Event</label>
                       </div>
                      </div>

                      <div class="row hide">
                       <div class="input-field col s12 hide">
                         <input id="" type="text" class="" name="id_karyawan" value="">
                         <label for="">Kode Karyawan</label>
                       </div>
                      </div>

                      <button type="submit" name="submit" class="btn blue">Booking</button>
                    </form>

                  </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </main>
<?php
  include "footer.php";
?>