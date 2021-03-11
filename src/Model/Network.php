<?php
declare(strict_types=1);

namespace GenoBankio\Certificates\Model;

/**
 * An enumeration of available network environments
 * @package GenoBankio\Certificates
 */
 class Network {
    public /*string*/ $namespacePrefix;
    public /*string*/ $certificateUrlBase;
    public /*string*/ $apiUrlBase;
    public /*string*/ $genoBankAddress;
  
    private function __construct(
        string $namespacePrefix,
        string $certificateUrlBase,
        string $apiUrlBase,
        string $genoBankAddress
    ) {
        $this->namespacePrefix = $namespacePrefix;
        $this->certificateUrlBase = $certificateUrlBase;
        $this->apiUrlBase = $apiUrlBase;
        $this->genoBankAddress = $genoBankAddress;
    }

    static function getTest(): Network {
        return new self(
            'io.genobank.test',
            'https://genobank.io/test/certificates/verify-certificate-v1',
            'https://api-test.genobank.io',
            '0x795faFFc58648e435E3bD3196C4F75F8EFc4b30'
        );
    }

    static function getProduction(): Network {
        return new self(
            'io.genobank',
            'https://genobank.io/certificates/verify-certificate-v1#',
            'https://api.genobank.io/',
            '0x633F5500A87C3DbB9c15f4D41eD5A33DacaF4184'
        );
    }
}