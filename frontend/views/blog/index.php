<?php

use yii\helpers\Url;
?>

<table class="table">
<tr>
    <td></td>
</tr>

    <?php foreach ($blogs as $blog){?>
<tr>
    <td><a href="<?=Url::to(['/blog/view', 'id'=>$blog->slug])?>"> <?=$blog->title?> </a></td>
</tr>
<?php } ?>

</table>