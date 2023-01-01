<?php if(isset($_SESSION['logged_in'])) : ?>
<nav>
    
    <div> 
        <?php if(isset($_SESSION['logged_in'])) : ?>
            <a href="/home/" class="fa-brands fa-instagram"></a>
            <a href="/home/" class="fa-solid fa-house-chimney"></a>
            <i class="fa-solid fa-magnifying-glass"></i>
            <a href="/user/userlist" class="fa-solid fa-user-group"></a>
            <a href="/image/all_images" class="fa-regular fa-images"></a>
            <a href="/image/upload" class="fa-regular fa-square-plus" ></a>
            <a href="/user/<?=$_SESSION['user']['username']?>"><img src="/public/assets/avatar.png" class="card-img-top col-2" alt="..." style="width: auto; height: 20px;"></a>
            <a href="/user/logout">logout</a>   
        <?php endif; ?>        
    </div>
      
</nav>
<!-- Button trigger modal -->

<?php endif; ?>