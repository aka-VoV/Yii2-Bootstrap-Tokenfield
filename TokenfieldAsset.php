<?php

namespace akavov\tokenfield;

use yii\web\AssetBundle;
use Yii;

class TokenfieldAsset extends AssetBundle {
    public $sourcePath = '';

	public $css = [
        'bootstrap-tokenfield/bootstrap-tokenfield.css',
    ];

	public $js = [
		'bootstrap-tokenfield/bootstrap-tokenfield.min.js',
	];

    public $depends = [
        'yii\web\JqueryAsset'
    ];

	/**
     * @inheritdoc
     */
    public function init() {
        $this->sourcePath = '@bower/bootstrap-tokenfield';
        parent::init();
    }
}
