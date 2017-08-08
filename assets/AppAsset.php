<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/bootstrap.min.css',
        'css/ambixo.css',
        'http://fonts.googleapis.com/css?family=Aclonica',
        'http://fonts.googleapis.com/css?family=Nothing+You+Could+Do',
        'http://fonts.googleapis.com/css?family=Signika',
        'http://fonts.googleapis.com/css?family=Signika:300',
        'font-awesome/css/font-awesome.min.css',

    ];
    public $js = [
        'js/bootstrap.min.js',
        'js/portfolio/modernizr.custom.js',
        'js/testimonial/jquery.quovolver.min.js',
        'js/services/jquery.easypiechart.min.js',
        'js/carousel/jquery.bxslider.min.js',
        'js/portfolio/grid.js',
        'js/isotope/jquery.isotope.min.js',
        'js/contact-form.js',
        'js/parallax/jquery.parallax-1.1.3.js',
        'js/parallax/jquery.localscroll-1.2.7-min.js',
        'js/parallax/jquery.scrollTo-min.js',
        'js/ambixo.js',
        'https://maps.googleapis.com/maps/api/js?key=AIzaSyDIQeP94DW5GuvpkgMN_Sbztg-DYCFjWq0&callback=initMap',
        'js/scripts.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
    ];
}
