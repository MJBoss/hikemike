<div class="modal fade" id="del_<?php echo $item["user_id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Delete Data?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!-- <div class="modal-body"> -->
<form action="modal/function/Delete.php" method="POST">

<input type="hidden" name="id" value= "<?php echo $item["user_id"]; ?>">




      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="submit" class="btn btn-danger" name="Delete">Yes</button>
      </div>
      
    </form>
    </div>
  </div>
</div>
