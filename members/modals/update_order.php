



<!-- edit -->
<div class="modal fade" id="cancel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Order</h4>
      </div>
      <div class="modal-body">
      <h4><strong>Do You Really Want to Cancel the Order</strong></h4>

      <?php
         echo $b_booking_no;
      ?>
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
        <a href="cancel_order?booking_no=<?php echo $b_booking_no; ?>" class="btn btn-danger">OK</a>
      </div>
    </div>
  </div>
</div>



