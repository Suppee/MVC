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
        <?php foreach($viewbag['users'][0] as $header => $value) : ?>
            <?php if($header !== 'password') : ?>
            <th><?=$header?></th>
            <?php endif; ?>
        <?php endforeach; ?>
        </tr>
    </thead>
    
    <?php foreach ($viewbag['users'] as $result) : ?>
    
        <tr>
            <?php foreach ($result as $key=>$value) : ?>
                <?php if($key !== 'password') : ?>
                <td><?=$value?></td>
                <?php endif; ?> 
            <?php endforeach; ?>
        </tr>
    
    <?php endforeach; ?>
</table>