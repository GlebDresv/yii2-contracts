<?php

namespace warkeeper\yii2_contracts;

use yii\base\Model;
use yii\base\ViewContextInterface;
use yii\widgets\ActiveField;
use yii\base\InvalidConfigException;

/**
 * Class FormBuilder
 * @package backend\components
 */
interface IFormBuilder extends ViewContextInterface
{
    const INPUT_CHECKBOX = 'checkbox';
    const INPUT_CHECKBOX_LIST = 'checkboxList';
    const INPUT_FILE = 'fileInput';
    const INPUT_HIDDEN = 'hiddenInput';
    const INPUT_INPUT = 'input';
    const INPUT_LIST_BOX = 'listBox';
    const INPUT_RADIO = 'radio';
    const INPUT_RADIO_LIST = 'radioList';
    const INPUT_TEXT = 'textInput';
    const INPUT_TEXTAREA = 'textarea';
    const INPUT_PASSWORD = 'passwordInput';
    const INPUT_DROPDOWN_LIST = 'dropdownList';
    const INPUT_WIDGET = 'widget';
    const INPUT_RAW = 'raw';

    /**
     * @param Model|IBackendModel $model
     * @return string|null
     * @throws InvalidConfigException
     */
    public function renderForm(Model $model);


    /**
     * @param Model|IBackendModel $model
     * @param string $attribute
     * @param array $options
     *
     * @return ActiveField
     * @throws InvalidConfigException
     */
    public function renderField(Model $model, $attribute, array $options = []);

    /**
     * @param Model $model
     * @param array $tabConfig
     * @return string
     * @throws InvalidConfigException
     */
    public function prepareRows(Model $model, array $tabConfig): string;
}
