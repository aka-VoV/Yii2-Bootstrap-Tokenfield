<?php

namespace akavov\tokenfield;

use yii\web\AssetBundle;
use Yii;

class JqueryUiAsset extends AssetBundle {

    public $sourcePath = '';

	public $css = [
        '//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css',
    ];

	public $js = [
        '//code.jquery.com/ui/1.10.3/jquery-ui.js',

	];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

	/**
     * @inheritdoc
     */
    public function init() {
        parent::init();
    }
}
