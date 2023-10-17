<?php 
use yii\helpers\Html;
use yii\widgets\LinkPager;



?>

<h1> Libros a la venta </h1>
<div class='row'>


<?php foreach($libros as $libro): ?>
    
    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
             
        <div class="card">
            <?= Html::img($libro->imagen, ['class' => 'card-img-top']); ?>
            <div class="card-body">
                <h4 class="card-title"><?= Html::encode("{$libro->titulo}")   ?></h4>
                <p class="card-text">Text</p>
            </div>
        </div>
    </div>
    
    

<?php endforeach; ?>


</div>