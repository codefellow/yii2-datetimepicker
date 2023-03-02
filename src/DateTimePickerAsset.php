<?php

namespace codefellow\datetimepicker;

use yii\web\AssetBundle;
use yii\bootstrap\BootstrapAsset;
use yii\web\JqueryAsset;

class DateTimePickerAsset extends AssetBundle
{
    public $sourcePath = '@cfdatetimepicker/assets/';
    public $js = [
        'js/tempus-dominus.js',
    ];
    public $css = [
        'css/tempus-dominus.min.css',
    ];
    public $depends = [
        JqueryAsset::class,
        BootstrapAsset::class,
        MomentAsset::class,
    ];
}
