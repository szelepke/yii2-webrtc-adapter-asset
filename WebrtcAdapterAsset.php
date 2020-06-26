<?php
/**
 * @copyright Copyright (c) 2020
 * @author Szelepcsényi Zsolt <szelepcsenyi.zsolt@e-vista.hu>
 * @package yii2-webrtc-adapter-asset
 */
namespace szelepke\webrtcadapter;
use yii\web\AssetBundle;
use yii\web\View;
/**
 * Class VueSmoothDndAsset
 * @package szelepke\yii2-webrtc-adapter-asset
 */
class WebrtcAdapterAsset extends AssetBundle
{
    public $sourcePath = '@npm/webrtc-adapter/dist';
    
    public $js = [
        'adapter_core.js'
    ];

    public $jsOptions = [
        'position' => View::POS_HEAD,
    ];
}