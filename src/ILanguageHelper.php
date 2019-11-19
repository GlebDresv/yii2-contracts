<?php
/**
 * Created by PhpStorm.
 * User: Hlib Dresviannikov
 * Date: 19.11.2019
 * Time: 5:16
 */

namespace warkeeper\yii2_contracts;

interface ILanguageHelper
{
    /** @return string */
    public static function getCurrentLanguageLocale();
}