<?php

namespace akavov\tokenfield;

use yii\web\AssetBundle;
use Yii;

class TokenfieldAsset extends AssetBundle {

	public $css = [
        'vendor/bower/bootstrap-tokenfield/bootstrap-tokenfield/bootstrap-tokenfield.css',
        'vendor/akavov/yii2-tokenfield-for-bootstrap/assets/fix-token-height.css',
        '//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css',
        'vendor/akavov/yii2-tokenfield-for-bootstrap/assets/fix-token-height.css',
    ];

	public $js = [
        'vendor/bower/bootstrap-tokenfield/bootstrap-tokenfield/bootstrap-tokenfield.min.js',
		'vendor/bower/typeahead.js/dist/typeahead.bundle.min.js',
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


    // public $css = [
    //     'vendor/akavov/yii2-tokenfield-for-bootstrap/assets/bootstrap-tokenfield.min.css',
    //     'vendor/akavov/yii2-tokenfield-for-bootstrap/assets/tokenfield-typeahead.min.css',
    //     '//code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css',
    //     //'vendor/akavov/yii2-tokenfield-for-bootstrap/assets/fix-token-height.css',
    // ];

    // public $js = [
    //     'vendor/akavov/yii2-tokenfield-for-bootstrap/assets/bootstrap-tokenfield.min.js',
    //     '//code.jquery.com/ui/1.10.3/jquery-ui.js',
    // ];