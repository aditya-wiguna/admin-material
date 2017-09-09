<?php
  include "header.php";
?>
<main>
      <div class="container">
        <div class="row">
          <div class="col s12 m12">
            <div class="card">
              <div class="card-content">
                <span class="card-title activator grey-text text-darken-4">Booking</span><br>
                <table class="highlight">
                    <thead>
                      <tr>
                          <th data-field="id">Check-In</th>
                          <th data-field="name">Check-Out</th>
                          <th data-field="price">Room</th>
                          <th data-field="price">ReBook</th>
                          <th data-field="price">Cancel</th>
                          <th data-field="price">Done</th>
                      </tr>
                    </thead>

                    <tbody>

                    <?php while ($row = mysqli_fetch_object($r_book)) { ?>
                      <tr>
                        <td><?php echo $row->checkin ?></td>
                        <td><?php echo $row->checkout ?></td>
                        <td><?php echo $row->room ?></td>
                        <td><a href="?edit=true&id=<?php echo $row->id ?>" class="btn-floating blue"><i class="material-icons">mode_edit</i></a></td>
                        <td><a href="" class="btn-floating red"><i class="material-icons">delete</i></a></td>
                        <td><a href="" class="btn-floating teal"><i class="material-icons">done</i></a></td>
                      </tr>
                    <?php } ?>

                    </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
<?php
  include "footer.php";
?>
