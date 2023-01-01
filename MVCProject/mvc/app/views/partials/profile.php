<?php foreach ($postinfo as $key=>$value) : 

        if($key == 'username') :
        $name = $value;
        endif; ?>

<?php endforeach; ?>

 <div class="text-center " style="width: auto; height: auto; margin: 10px; ">
        <img src="/public/assets/avatar.png" class="card-img-top" alt="..." style="width: 40px; height: 40px;">
        <br>
        <a href="/user/<?=$name?>"> <?=$name?> </a>
 </div>   
 