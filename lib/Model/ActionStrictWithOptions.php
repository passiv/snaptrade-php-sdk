<?php
/**
 * ActionStrictWithOptions
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  SnapTrade
 * @author   Konfig
 * @link     https://konfigthis.com
 */

/**
 * SnapTrade
 *
 * Connect brokerage accounts to your app for live positions and trading
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: api@snaptrade.com
 * Generated by: https://konfigthis.com
 */


namespace SnapTrade\Model;
use \SnapTrade\ObjectSerializer;

/**
 * ActionStrictWithOptions Class Doc Comment
 *
 * @category Class
 * @description The action describes the intent or side of a trade. This is either &#x60;BUY&#x60; or &#x60;SELL&#x60; for Equity symbols or &#x60;BUY_TO_OPEN&#x60;, &#x60;BUY_TO_CLOSE&#x60;, &#x60;SELL_TO_OPEN&#x60; or &#x60;SELL_TO_CLOSE&#x60; for Options.
 * @package  SnapTrade
 */
class ActionStrictWithOptions
{
    /**
     * Possible values of this enum
     */
    public const BUY = 'BUY';

    public const SELL = 'SELL';

    public const BUY_TO_OPEN = 'BUY_TO_OPEN';

    public const BUY_TO_CLOSE = 'BUY_TO_CLOSE';

    public const SELL_TO_OPEN = 'SELL_TO_OPEN';

    public const SELL_TO_CLOSE = 'SELL_TO_CLOSE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::BUY,
            self::SELL,
            self::BUY_TO_OPEN,
            self::BUY_TO_CLOSE,
            self::SELL_TO_OPEN,
            self::SELL_TO_CLOSE
        ];
    }
}


