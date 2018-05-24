<?php
/**
 * Date: 18.01.14
 * Time: 22:16
 */

namespace dssource\widget;

use yii\web\AssetBundle;


class AssetsJQueryAdapter extends AssetBundle{

	public $sourcePath = '@dssource/ckeditor/editor/adapters';

    public $js = [
        'jquery.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'dssource\ckeditor\Assets'
    ];
}
