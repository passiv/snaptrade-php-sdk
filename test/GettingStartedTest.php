<?php

namespace SnapTrade\Test\Api;


use PHPUnit\Framework\TestCase;


class GettingStartedTest extends TestCase
{

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
        $snaptrade->portfolioManagement->create(
            $userId,
            $userSecret,
            id: (string)time(),
            name: "MyPortfolio"
        );

        $response = $snaptrade->portfolioManagement->all($userId, $userSecret);
        print_r($response);

        $holdings = $snaptrade->accountInformation->getAllUserHoldings($userId, $userSecret);
        print_r($holdings);

        // 6) Delete the user
        $deletedResponse = $snaptrade->authentication->deleteSnapTradeUser($userId);
        print_r($deletedResponse);
    }

    public function testGetUserAccountBalance()
    {
        $snaptrade = new \SnapTrade\Client(
            clientId: getenv("SNAPTRADE_CLIENT_ID"),
            consumerKey: getenv("SNAPTRADE_CONSUMER_KEY")
        );
        $userId = getenv("SNAPTRADE_TEST_USER_ID");
        $userSecret = getenv("SNAPTRADE_TEST_USER_SECRET");
        $accounts = $snaptrade->accountInformation->listUserAccounts(
            $userId,
            $userSecret
        );
        $response = $snaptrade->accountInformation->getUserAccountBalance($userId, $userSecret, $accounts[0]->getId());
        print_r($response);
    }

    /**
     * Test case for setting portfolio targets
     *
     */
    public function testSetPortfolioTargets()
    {
        $this->markTestSkipped("Can't use listAssetClasses to get asset id");

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

        // 5) Create/list portfolio, accept disclaimer, and obtain account holding data
        $portfolioId = (string)time();
        $portfolioGroups = $snaptrade->portfolioManagement->create(
            $userId,
            $userSecret,
            id: $portfolioId,
            name: "MyPortfolio"
        );

        $assets = $snaptrade->portfolioManagement->listAssetClasses();
        print_r($assets);

        // $targetAssets = $snaptrade->portfolioManagement->setPortfolioTargets($portfolioGroups[0]->getId());
        // print_r($targetAssets);
        $targetAssets = $snaptrade->portfolioManagement->setPortfolioTargets($portfolioGroups[0]->getId(), [["id" =>  "2bcd7cc3-e922-4976-bce1-9858296801c3"]]);
        print_r($targetAssets);

        // 6) Delete the user
        $deletedResponse = $snaptrade->authentication->deleteSnapTradeUser($userId);
        print_r($deletedResponse);
    }
}
