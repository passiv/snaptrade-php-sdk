<?php
/**
 * SnapTradeHoldingsTotalValueTest
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


namespace SnapTrade\Test\Model;

use PHPUnit\Framework\TestCase;

/**
 * SnapTradeHoldingsTotalValueTest Class Doc Comment
 *
 * @category    Class
 * @description This field is deprecated. To get the brokerage reported total market value of the account, please refer to &#x60;account.balance.total&#x60;.  The total market value of the account. Note that this field is calculated based on the sum of the values of account positions and cash balances known to SnapTrade. It may not be accurate if the brokerage account has holdings that SnapTrade is not aware of. For example, if the brokerage account holds assets that SnapTrade does not support, the total value may be underreported. In certain cases, this value may also be double-counting cash-equivalent assets if those assets are represented as both cash and positions in the account.
 * @package     SnapTrade
 */
class SnapTradeHoldingsTotalValueTest extends TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown(): void
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass(): void
    {
    }

    /**
     * Test "SnapTradeHoldingsTotalValue"
     */
    public function testSnapTradeHoldingsTotalValue()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "value"
     */
    public function testPropertyValue()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }

    /**
     * Test attribute "currency"
     */
    public function testPropertyCurrency()
    {
        // TODO: implement
        $this->markTestIncomplete('Not implemented');
    }
}
