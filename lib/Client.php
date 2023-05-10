
<?php

namespace SnapTrade;


class Client
{
    public readonly \SnapTrade\Api\AccountInformationApi $accountInformation;
    public readonly \SnapTrade\Api\APIDisclaimerApi $apiDisclaimer;
    public readonly \SnapTrade\Api\APIStatusApi $apiStatus;
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
    public function __construct(\SnapTrade\Configuration $config = null, string $clientId, string $consumerKey)
    {
        if ($config == null) {
            $config = \SnapTrade\Configuration::getDefaultConfiguration();
        } else {
            $config = new \SnapTrade\Configuration(
                clientId: $clientId,
                consumerKey: $consumerKey
            );
        }
        $this->accountInformation = new \SnapTrade\Api\AccountInformationApi($config);
        $this->apiDisclaimer = new \SnapTrade\Api\APIDisclaimerApi($config);
        $this->apiStatus = new \SnapTrade\Api\APIStatusApi($config);
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
