<div class="container-fluid">
      <!-- Breadcrumbs-->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="manage-records.php">Manage Records</a>
        </li>
        <li class="breadcrumb-item active">View Record</li>
      </ol>
      <div class="row container">
        <div class="view-record col-12">
          <?php if ((bool)$userCases == true): ?>
            <?php foreach ($userCases as $key): ?>
              <h2><?php echo $key['header_description']; ?></h2>
              <p><?php echo $key['description']; ?></p>
            <?php endforeach; ?>
            <hr>
            <h4>Add Remarks</h4>
            <div class="message form-group">
              <textarea placeholder="Write your description here" class="form-control" style="height:150px;" id="add-description"></textarea>
            </div>
            <button class="btn btn-sm btn-primary ticket-reply m-l">Reply</button>
            <button class="btn btn-sm btn-default cancel-ticket-reply">Cancel</button>
            &nbsp;
          <?php else: ?>
            <h3>No Guidance Records found for <strong><?php echo $profile['firstname'].' '.$profile['lastname'] ?></strong></h3>
          <?php endif; ?>

        </div>
      </div>
    </div>