<?php
namespace craft\commerce\models;

use craft\commerce\base\Model;

/**
 * Settings model.
 *
 * @property string $weightUnits
 * @property string $dimensionUnits
 * @property string $emailSenderAddress
 * @property string $emailSenderName
 * @property string $orderPdfPath
 * @property string $orderPdfFilenameFormat
 *
 * @property string cartCookieDuration
 * @property mixed paymentMethodSettings
 * @property bool purgeInactiveCarts
 * @property bool purgeInactiveCartsDuration
 * @property string gatewayPostRedirectTemplate
 * @property bool sendCartInfoToGateways
 * @property bool requireEmailForAnonymousPayments
 * @property bool useBillingAddressForTax
 * @property bool requireShippingAddressAtCheckout
 *
 * @author    Pixel & Tonic, Inc. <support@pixelandtonic.com>
 * @copyright Copyright (c) 2015, Pixel & Tonic, Inc.
 * @license   https://craftcommerce.com/license Craft Commerce License Agreement
 * @see       https://craftcommerce.com
 * @package   craft.plugins.commerce.models
 * @since     1.0
 */
class Settings extends Model
{
    /**
     * @var string Weight Units
     */
    public $weightUnits = 'g';

    /**
     * @var string Dimension Units
     */
    public $dimensionUnits = 'mm';

    /**
     * @var string Sender's email address
     */
    public $emailSenderAddress;

    /**
     * @var string Sender's name
     */
    public $emailSenderName;

    /**
     * @var string Order PDF Path
     */
    public $orderPdfPath;

    /**
     * @var string Order PDF file name format
     */
    public $orderPdfFilenameFormat;

    /**
     * @var string
     */
    public $emailSenderAddressPlaceholder;

    /**
     * @var string
     */
    public $emailSenderNamePlaceholder;

    /**
     * @var string
     */
    public $cartCookieDuration = 'P3M';

    /**
     * @var array
     */
    public $paymentMethodSettings = [];

    /**
     * @var bool
     */
    public $purgeInactiveCarts = true;

    /**
     * @var string
     */
    public $purgeInactiveCartsDuration = 'P3M';

    /**
     * @var string
     */
    public $gatewayPostRedirectTemplate = '';

    /**
     * @var bool
     */
    public $sendCartInfoToGateways = true;

    /**
     * @var bool
     */
    public $requireEmailForAnonymousPayments = false;

    /**
     * @var bool
     */
    public $useBillingAddressForTax = false;

    /**
     * @var bool
     */
    public $requireShippingAddressAtCheckout = false;

    /**
     * @return array
     */
    public function getWeightUnitsOptions()
    {
        return [
            'g' => Craft::t('commerce', 'commerce', 'Grams (g)'),
            'kg' => Craft::t('commerce', 'commerce', 'Kilograms (kg)'),
            'lb' => Craft::t('commerce', 'commerce', 'Pounds (lb)')
        ];
    }

    /**
     * @return array
     */
    public function getDimensionUnits()
    {
        return [
            'mm' => Craft::t('commerce', 'commerce', 'Millimeters (mm)'),
            'cm' => Craft::t('commerce', 'commerce', 'Centimeters (cm)'),
            'm' => Craft::t('commerce', 'commerce', 'Meters (m)'),
            'ft' => Craft::t('commerce', 'commerce', 'Feet (ft)'),
            'in' => Craft::t('commerce', 'commerce', 'Inches (in)'),
        ];
    }
}