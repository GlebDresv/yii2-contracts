<?php
/**
 * Created by PhpStorm.
 * User: Hlib Dresviannikov
 * Date: 19.11.2019
 * Time: 5:16
 */

namespace yii2_gd_contracts;

interface ILanguageHelper
{
    /** @return string */
    public static function getCurrentLanguageLocale();
}