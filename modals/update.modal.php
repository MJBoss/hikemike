<div class="modal fade" id="edit_<?php echo $item["user_id"]; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <form action="../includes/user.update.php" method="post">

      <div class="modal-body">
      <input type="hidden" name ="uid" value="<?php echo $item["user_id"]; ?>" >
      <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">First Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name ="fname" value="<?php echo $item["firstName"]; ?>" >
    </div>

    <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="lname" value="<?php echo $item["lastName"]; ?>">
    </div>

    <div class="mb-3">
     <label for="exampleFormControlInput1" class="form-label">Email</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="email" value="<?php echo $item["email"]; ?>">
    </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="submit">Save changes</button>
      </div>
    </div>
    </form>
  </div>
</div>
