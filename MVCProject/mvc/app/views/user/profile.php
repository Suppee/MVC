
    <div class="card-body row justify-content-start">
        <img src="/public/assets/avatar.png" class="card-img-top col-2" alt="..." style="width: auto; height: 40px; border-radius: 50%;">
        <h6 class="card-text col-6"><a href="/user/<?=$viewbag['user']['user_id']?>"><?=$viewbag['user']['username']?> </a></h6>
    </div>            
       

<h3> Opslag </h3>
<div style="  grid-template-columns: 100px 50px 100px;
  grid-template-rows: 80px auto 80px; 
  column-gap: 10px;
  row-gap: 15px;"> 
    <?php foreach ($viewbag['images'] as $postinfo) : ?>
    <a href="/image/<?=$postinfo['image_id']?>"><img src="<?=$postinfo['image']?>" class="profile-image ratio ratio-1x1 img-thumbnail " alt="..." style=" min-width: 30%; height: 100%; ">
        <br></a>
    <?php endforeach; ?>
</div>