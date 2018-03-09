<?php //$this->title = 'Одна статья'; ?>

<?php $this->beginBlock('block1'); ?>
<h1><?= $this->title; ?></h1>
<?php $this->endBlock(); ?>

<h1>Show Action</h1>

<?php debug($cats); ?>

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

