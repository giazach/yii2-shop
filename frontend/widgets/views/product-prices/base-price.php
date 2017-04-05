<?php
/**
 * If Shop module $enableCombinations property is false
 * or there are not product combinations and there not product prices
 * this view will be displayed.
 *
 * @var $product \xalberteinsteinx\shop\common\entities\Product
 * @var $form \yii\widgets\ActiveForm
 * @var $cart \xalberteinsteinx\shop\frontend\components\forms\CartForm
 * @var $defaultCombination \xalberteinsteinx\shop\common\entities\Combination
 * @var $notAvailableText string
 *
 * @author Albert Gainutdinov <xalbert.einsteinx@gmail.com>
 */
?>

<div class="prices-block">
        <?= $this->render('sum', [
            'oldPrice' => $product->oldPrice ?? 0,
            'newPrice' => $product->discountPrice ?? 0
        ]); ?>
</div>