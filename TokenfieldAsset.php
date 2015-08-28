<?php

namespace akavov\tokenfield;

use yii\web\AssetBundle;
use Yii;

class TokenfieldAsset extends AssetBundle {

    public $sourcePath = '';

	public $css = [
        'bootstrap-tokenfield.css',
    ];

	public $js = [
        'bootstrap-tokenfield.min.js',
	];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

	/**
     * @inheritdoc
     */
    public function init() {
        $this->sourcePath = "@vendor/bower/bootstrap-tokenfield/bootstrap-tokenfield";
        parent::init();
    }
}

