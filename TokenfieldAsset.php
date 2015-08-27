<?php

namespace akavov\tokenfield;

use yii\web\AssetBundle;
use Yii;

class TokenfieldAsset extends AssetBundle {

	public $css = [
        'vendor/bower/bootstrap-tokenfield/bootstrap-tokenfield/bootstrap-tokenfield.css',
        'vendor/akavov/yii2-tokenfield-for-bootstrap/assets/fix-token-height.css',
    ];

	public $js = [
		'vendor/bower/bootstrap-tokenfield/bootstrap-tokenfield/bootstrap-tokenfield.min.js',
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
