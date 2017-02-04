<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */
namespace justyork\uikit;

use Yii;
use yii\helpers\Html;
use yii\helpers\Json;
use yii\base\InvalidConfigException;
use yii\widgets\ActiveFormAsset;

class ActiveForm extends \yii\widgets\ActiveForm
{

    public $fieldClass = 'justyork\uikit\ActiveField';
    /**
     * @var string the form layout. Either 'default', 'horizontal' or 'stacked'.
     */
    public $layout = 'default';
    /**
     * @var string the form field size. Either 'large', 'small'.
     */
    public $field_size = false; 
    /**
     * @var string the form field width. Either 'full','large','medium', 'small', 'mini'.
     */
    public $field_width = false;

    public $inputOptions = [];

    public $scripts_inform = false;

    /**
     * @inheritdoc
     */
    public function init()
    {
        if (!in_array($this->layout, ['default', 'horizontal', 'stacked'])) {
            throw new InvalidConfigException('Invalid layout type: ' . $this->layout);
        }



        Html::addCssClass($this->options, 'uk-form');

        if ($this->layout !== 'default') {
            Html::addCssClass($this->options, 'uk-form-' . $this->layout);
        }

        if ($this->field_size) {

            if (!in_array($this->field_size, ['large', 'small'])) {
                throw new InvalidConfigException('Invalid size: ' . $this->layout.'. It must be large or small');
            }

            Html::addCssClass($this->inputOptions, 'uk-form-' . $this->field_size);
                     
        }

        if ($this->field_size) {
            if (!in_array($this->field_size, ['large', 'small'])) {
                throw new InvalidConfigException('Invalid size: ' . $this->layout.'. It must be large & small');
            }
            else {
                Html::addCssClass($this->inputOptions, 'uk-form-' . $this->field_size);
            }                       
        }

        if ($this->field_width) {
            if (!in_array($this->field_width, ['full','large','medium', 'small', 'mini'])) {
                throw new InvalidConfigException('Invalid width: ' . $this->field_width.'. It must be full, large, medium, small or mini');
            }
            else {
                Html::addCssClass($this->inputOptions, $this->field_width != 'full' ? 'uk-form-width-' . $this->field_width : 'uk-width-1-1');
            }                       
        }

        if (isset($this->inputOptions['class'])) {
            $this->fieldConfig['inputOptions'] = ['class' => $this->inputOptions['class']];
        }

        



        parent::init();
    }

  /*  public function run()
    {
        if (!empty($this->_fields)) {
            throw new InvalidCallException('Each beginField() should have a matching endField() call.');
        }
        if ($this->enableClientScript) {
            $id = $this->options['id'];
            $options = Json::htmlEncode($this->getClientOptions());
            $attributes = Json::htmlEncode($this->attributes);
            $view = $this->getView();
            ActiveFormAsset::register($view);
            if ($this->enableClientValidation) {
            
                if ($this->scripts_inform) {
                    echo "<script type=\"text/javascript\">jQuery(document).ready(function () { jQuery('#$id').yiiActiveForm($attributes, $options);});</script>";
                }
                else {
                    $view->registerJs("jQuery('#$id').yiiActiveForm($attributes, $options);");
                }

            }
        }
        echo Html::endForm();
    } */

    public function field($model, $attribute, $options = [])
    {
        return parent::field($model, $attribute, $options);
    }

}