<!-- edit -->
<div class="modal fade" id="<?php echo $inv_invoice_no ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Edit Order</h4>
      </div>
      <div class="modal-body">
      <h4><strong>Do You Really Want to Cancel this Invoice</strong></h4>

      <?php
         echo $inv_invoice_no;
      ?>
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
        <a href="cancel_invoice?invoice_no=<?php echo $inv_invoice_no; ?>" class="btn btn-danger">OK</a>
      </div>
    </div>
  </div>
</div>



