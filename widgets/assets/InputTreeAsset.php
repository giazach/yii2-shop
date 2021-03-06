<?php

namespace albertgeeca\shop\widgets\assets;

use yii\web\AssetBundle;

/**
 * @author Albert Gainutdinov <xalbert.einsteinx@gmail.com>
 */
class InputTreeAsset extends AssetBundle
{
    public $sourcePath = '@vendor/albert-sointula/yii2-shop/widgets/assets/src';

    public $css = [
        'css/input-tree.css'
    ];
    public $js = [
        'js/input-tree.js'
    ];
    public $depends = [
        'yii\web\JqueryAsset',
    ];
}
