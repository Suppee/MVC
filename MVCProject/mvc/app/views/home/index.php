<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<div style="margin:auto; width:60%;">
<div class="" style="width: 100%;height: 10%; display: flex; overflow-x: auto">
     <?php foreach ($viewbag['users'] as $postinfo) : 
    include dirname(__DIR__,1).'\partials\profile.php';
    endforeach; ?> 
    <?php foreach ($viewbag['users'] as $postinfo) : 
    include dirname(__DIR__,1).'\partials\profile.php';
    endforeach; ?> 
    </div>

<?php foreach ($viewbag['images'] as $postinfo) : 
include dirname(__DIR__,1).'\partials\post.php';
endforeach; ?>
  </div>
