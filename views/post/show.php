<?php use app\components\MyWidget; ?>

<?php $this->beginBlock('block1'); ?>
    <h1><?= $this->title; ?></h1>
<?php $this->endBlock(); ?>

    <h1>Show Action</h1>
<?php //echo MyWidget::widget(['name' => null]); ?>
<?php MyWidget::begin(); ?>
    <h1>привет, мир!</h1>
<?php MyWidget::end(); ?>

<?php //debug($cats); ?>
<?php //echo count($cats[0]->products); ?>
<?php //debug($cats); ?>

<?php /*foreach ($cats as $cat) {
    echo '<ul>';
    echo '<li>' . $cat['title'] . '</li>';
    $products = $cat['products'];
    foreach ($products as $product) {
        echo '<ul>';
        echo '<li>' . $product['title'] . '</li>';
        echo '</ul>';
    }
    echo '</ul>';
} */?>

    <button class="btn btn-success" id="btn">Click me...</button>
<?php //$this->registerJsFile('@web/js/scripts.js', ['depends' => 'yii\web\YiiAsset']); ?>
<?php //$this->registerJs("$('.container').append('<p>SHOW!!!</p>');", \yii\web\View::POS_LOAD); ?>
<?php //$this->registerCss('.container {background: #ccc;}');

$js = <<< JS
$('#btn').on('click', function() {
  $.ajax({
      url: 'index.php?r=post/index',
      data: {test: '123'},
      type: 'POST',
      success: function(res) {
        console.log(res);
      },
      error: function() {
          alert('Error!');
      }
  })
});
JS;

$this->registerJs($js);

