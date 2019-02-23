<?php

if (!function_exists('app')) {
    function app() {
        return Yii::$app;
    }
}

if (!function_exists('request')) {
    function request() {
        return app()->request;
    }
}

if (!function_exists('get')) {
    function get($name, $defaultValue = null) {
        return request()->get($name, $defaultValue);
    }
}

if (!function_exists('post')) {
    function post($name, $defaultValue = null) {
        return request()->post($name, $defaultValue);
    }
}

/*if (!function_exists('body')) {

}*/

if (!function_exists('config')) {
    function config($key, $defaultValue = null) {
        return app()->params[$key] ?? $defaultValue;
    }
}

if (!function_exists('active_class')) {
    function active_class($url) {
        $route = app()->controller->getRoute();
        if ($url == $route) {
            return true;
        } else {
            return false;
        }
    }
}

if (!function_exists('HumanDate')) {
    function HumanDate($date) {
        return app()->formatter->asRelativeTime($date);
    }
}

if (!function_exists('NormalDate')) {
    function NormalDate($date, $lang = 'en') {
        switch ($lang) {
            case 'en':
                return app()->formatter->asDatetime($date, 'yyyy-MM-dd');
                break;
            case 'zh':
                return app()->formatter->asDatetime($date, 'yyyy 年 MM 月 dd 日');
                break;
            default:
                return app()->formatter->asDatetime($date, 'yyyy-MM-dd');
        }
    }
}