<?php
/* @var $this \yii\web\View */
?>
<h1>
    Show View
</h1>
    <p>
        <?= $myVar ?>
    </p>
<button class="btn btn-success">Click me!</button>

<?php
//    $this->registerJsFile('@web/js/scripts.js',
//        [
//            'depends' => 'yii\web\YiiAsset',
//            'position' => \yii\web\View::POS_END
//        ]);
        $js = <<<JS
            $('.btn').on('click', function() {
              $.ajax({
                url: 'index.php?r=post/index',
                data: {test: '123'},
                type: 'POST',
                success: function(res) {
                  console.log(res);
                },
                error: function() {
                  alert('Error');
                }
              })
            })
JS;

        $this->registerJs($js, \yii\web\View::POS_LOAD);
//        $this->registerCss('.container { background: #ccc; }');
?>