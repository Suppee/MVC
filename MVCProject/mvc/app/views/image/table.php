<?php
    /**
     * This is an example of a generic table
     * which will print the content of the viewbag
     * without knowing what content to expect
     */
?>
    
    
    <table class="table table-striped">
        <thead class="thead-dark">
        <tr>
        <?php foreach($viewbag['images'][0] as $header => $value) : ?>
        
            <th><?=$header?></th>
        
        <?php endforeach; ?>
        </tr>
        </thead>
    
    <?php foreach ($viewbag['images'] as $result) : ?>
    
        <tr>
            <?php foreach ($result as $key=>$value) : ?>
                <td style =" word-wrap: break-word;">
                <?php if($key == 'image') : ?>
                    <img src=<?=$value?> style="height: 100px; width: 100px;">
            
                <?php else : ?>
                <?=$value?>
                <?php endif; ?>  
                
                
                </td>
            <?php endforeach; ?>
        </tr>
    
    <?php endforeach; ?>
</table>