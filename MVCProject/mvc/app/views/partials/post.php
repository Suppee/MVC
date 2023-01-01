<?php foreach ($postinfo as $key=>$value) : 

        if($key == 'image') :
        $img = $value;
        elseif($key == 'user') :
        $user = $value;
        elseif($key == 'title') :
        $title = $value;
        elseif($key == 'description'):
        $desc = $value;
        elseif($key == 'releasetime'):
        $time = $value;
        endif; ?>

<?php endforeach; ?>

<div class="card mb-3" style="container-fluid;">
    <div class="card-body row justify-content-start">
        <img src="/public/assets/avatar.png" class="card-img-top col-2" alt="..." style="width: auto; height: 40px;">
           <h6 class="card-text col-6"><a href="/user/<?=$user?>"><?=$user?> </a></h6>
        </div>    
        <img src=<?=$img?> class="card-img-top" alt="...">
        
        <div class="card-body">
        <!-- BUTTON BAR -->
        <div class="btn-toolbar justify-content-between" role="toolbar" aria-label="Toolbar with button groups">        
            <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-light fa-regular fa-heart"></button>
                <button type="button" class="btn btn-light fa-regular fa-comment"></button>
                <button type="button" class="btn btn-light fa-regular fa-paper-plane"></button>
            </div>
            <div class="btn-group" role="group" aria-label="Third group">
                <button type="button" class="btn btn-light fa-regular fa-bookmark"></button>
            </div>
        </div>
        <!-- BUTTON BAR END -->
            
        <!-- TITLE -->
        <h5 class="card-title"><?=$title?></h5>
        
        <!-- DESCRIPTION -->
        <p class="card-text"><b><?=$user?></b> <?=$desc?></p>

        <!-- TIME STAMP -->        
        <p class="card-text text-muted"><?=$time?></p>

            
        </div>

        <div class="input-group ">
            <button type="button" class="btn btn-light fa-regular fa-face-smile" id="button-addon2"></button>
            <input class="form-control" type="text" placeholder="Default input" aria-label="default input example" aria-describedby="button-addon2">
            <button type="button" class="btn btn-light" id="button-addon2"> Post</button>
        </div>

 
    </div>