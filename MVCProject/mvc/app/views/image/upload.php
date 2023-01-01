<?php
    /**
     * This view is a proof of concept site that is only available when logged in
     */
?>
<div class = "row">
<h1>Upload your pictures here</h1>
    <!-- PREVIEW UPLOAD -->
    <div class="card col" style="width:60%; container-fluid;">
        <div class="card-body">
            <h6 class="card-text"><?=$_SESSION['user']['email']?></h6>
        </div>       
            <img src="https://via.placeholder.com/1000?text=Preview" id="b64img" class="card-img-top-bot" alt="...">       
        <div class="card-body">            
            <h5 class="card-title" id="titlepreview">Title</h5>            
            <p class="card-text" id="descpreview">Description</p>  
            <p class="card-text text-muted">Now</p>
        </div>       
    </div>


    <!-- UPLOAD IMAGE FORM -->
    
    <div id="content" class="col">
    
      <form method="post" action="/image/upload" enctype="multipart/form-data">
      
          <!-- INPUT IMAGE -->
          <div>
            <input 
                type="file" 
                name="image" 
                accept="image/*" 
                onchange="base64img(this)" 
                class="form-control" >   
            
          </div> 

          <!-- INPUT TITLE -->
          <div class="form-floating">
            <input 
                onkeyup="base64title(this)" 
                name="title" 
                placeholder="Add a title!" 
                autocomplete="off" 
                class="card-title form-control">
                <label for="floatingTextarea">Title</label>
            
          </div>

      
          <!-- INPUT DESCRIPTION -->
          <div class="form-floating">
          <textarea 
              onkeyup="base64desc(this)"
              id="desc" 
              style="height: 100px"
              cols="40" 
              rows="4" 
              name="image_text" 
              placeholder="Say something about this image..."
              class="form-control"
              > 
              </textarea> 
              <label for="floatingTextarea">Description</label>
          </div>

          <!-- SUBMIT BUTTON -->
          <div>
              <button type="submit" class="btn btn-primary">POST</button>
          </div>

      </form>

  
  
      <!-- PREVIEW UPLOAD SCRIPTS -->
      <script>
        function base64img(obj)
        {
            var reader = new FileReader();
            reader.readAsDataURL(obj.files[0]);
            reader.onload = function()
            {
                document.getElementById('b64img').src = reader.result;
            }
        }

        function base64title(obj)
        {
            let title = obj.value;
            document.getElementById('titlepreview').innerText = title;
        }

        function base64desc(obj)
        {
            let desc = obj.value;
            document.getElementById('descpreview').innerText = desc;
        }
      </script>
    </div>

</div>


