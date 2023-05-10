<?php

namespace SnapTrade\Test\Api;


use PHPUnit\Framework\TestCase;


class GettingStartedTest extends TestCase
{

    protected \SnapTrade\Client $snaptrade;

    /**
     * Setup before running any test cases
     */
    public static function setUpBeforeClass(): void
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp(): void
    {
        $this->snaptrade = new \SnapTrade\Client(
            clientId: getenv("SNAPTRADE_CLIENT_ID"),
            consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
        );
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
     * Test case for getting started flow
     *
     */
    public function testGettingStarted()
    {
        // 1) Initialize a client with your clientID and consumerKey.
        $snaptrade = new \SnapTrade\Client(
            clientId: getenv("SNAPTRADE_CLIENT_ID"),
            consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
        );

        // 2) Check that the client is able to make a request to the API server.
        $response = $snaptrade->apiStatus->check();
        print_r($response);

        // 3) Create a new user on SnapTrade
        $userId = (string)time();
        $registerResponse = $snaptrade->authentication->registerSnapTradeUser($userId);
        $userSecret = $registerResponse->getUserSecret();

        // 4) Get a redirect URI. Users will need this to connect
        // their brokerage to the SnapTrade server.
        $redirectUri = $snaptrade->authentication->loginSnapTradeUser($userId, $userSecret);
        print_r($redirectUri);

        // 5) Create/list portfolio, accept disclaimer, and obtain account holding data
        $snaptrade->portfolioManagement->create($userId, $userSecret, [
            "id" => (string)time(),
            "name" => "MyPortfolio"
        ]);

        $response = $snaptrade->portfolioManagement->all($userId, $userSecret);
        print_r($response);

        $snaptrade->apiDisclaimer->accept($userId, $userSecret, [
            "accepted" => true
        ]);

        $holdings = $snaptrade->accountInformation->getAllUserHoldings($userId, $userSecret);
        print_r($holdings);

        // 6) Delete the user
        $deletedResponse = $snaptrade->authentication->deleteSnapTradeUser($userId);
        print_r($deletedResponse);
    }
}
