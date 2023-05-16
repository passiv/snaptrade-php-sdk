<?php

namespace SnapTrade;

class Client
{
    public readonly \SnapTrade\Api\AccountInformationApi $accountInformation;
    public readonly \SnapTrade\Api\ApiDisclaimerApi $apiDisclaimer;
    public readonly \SnapTrade\Api\ApiStatusApi $apiStatus;
    public readonly \SnapTrade\Api\AuthenticationApi $authentication;
    public readonly \SnapTrade\Api\ConnectionsApi $connections;
    public readonly \SnapTrade\Api\ErrorLogsApi $errorLogs;
    public readonly \SnapTrade\Api\OptionsApi $options;
    public readonly \SnapTrade\Api\PortfolioManagementApi $portfolioManagement;
    public readonly \SnapTrade\Api\ReferenceDataApi $referenceData;
    public readonly \SnapTrade\Api\TradingApi $trading;
    public readonly \SnapTrade\Api\TransactionsAndReportingApi $transactionsAndReporting;

    /**
     * Constructor
     */
    public function __construct(
        string $consumerKey = null,
        string $clientId = null,
        string $Signature = null,
        string $timestamp = null,
        string $host = 'https://api.snaptrade.com/api/v1',
        \SnapTrade\Configuration $config = null
    )
    {
        if ($config == null) {
            $config = new \SnapTrade\Configuration(
                consumerKey: $consumerKey,
                clientId: $clientId,
                Signature: $Signature,
                timestamp: $timestamp,
            );
            $config->setHost($host);
        }
        $this->accountInformation = new \SnapTrade\Api\AccountInformationApi($config);
        $this->apiDisclaimer = new \SnapTrade\Api\ApiDisclaimerApi($config);
        $this->apiStatus = new \SnapTrade\Api\ApiStatusApi($config);
        $this->authentication = new \SnapTrade\Api\AuthenticationApi($config);
        $this->connections = new \SnapTrade\Api\ConnectionsApi($config);
        $this->errorLogs = new \SnapTrade\Api\ErrorLogsApi($config);
        $this->options = new \SnapTrade\Api\OptionsApi($config);
        $this->portfolioManagement = new \SnapTrade\Api\PortfolioManagementApi($config);
        $this->referenceData = new \SnapTrade\Api\ReferenceDataApi($config);
        $this->trading = new \SnapTrade\Api\TradingApi($config);
        $this->transactionsAndReporting = new \SnapTrade\Api\TransactionsAndReportingApi($config);
    }
}
