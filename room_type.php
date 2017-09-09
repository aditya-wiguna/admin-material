<?php
  include "header.php";
?>
<main>
  <div class="container">
    <div class="row">
      <br>
      <button data-target="modal1" class="btn modal-trigger blue">Add Room Type</button>

      <div id="modal1" class="modal">
        <div class="modal-content">
          <div class="card-content grey lighten-5">

            <div id="test4"><div class="card">
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Input Room Type</span><br>

                <div class="row">

                  <form class="col s12" action="" method="post">
                    <div class="row">

                    <div class="row">
                      <div class="input-field col s12">
                        <input id="roomtype" type="text" class="" name="type" length="20">
                        <label for="type">Room Type</label>
                      </div>
                    </div>

                     <input type="submit" name="submit" class="btn blue" value="Save">
                  </form>
                </div>
              </div>
            </div>
          </div></div>



          </div>
        </div>
        <div class="modal-footer">
          <a href="#!" class=" modal-action modal-close btn blue">Close</a>
        </div>
      </div>

      <!-- end of modal -->

      <div id="test5"><div class="card">
        <div class="card-content">
          <span class="card-title activator grey-text text-darken-4">Room Type</span><br>
          <table>
           <thead>
             <tr>
                 <th data-field="id">Type</th>
                 <th data-field="">Action</th>
             </tr>
           </thead>

           <tbody>
             <tr>
               <td>type</td>
               <td><a href="" class="btn btn-floating red"><i class="material-icons">delete</i></a></td>
             </tr>

           </tbody>
         </table>
        </div>
      </div></div>

    </div>


    </div>
  </div>
</main>
<?php
  include "footer.php";
?>
