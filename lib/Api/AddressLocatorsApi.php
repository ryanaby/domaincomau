<?php
/**
 * AddressLocatorsApi
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Domain Public API
 *
 * See https://developer.domain.com.au for more information
 *
 * OpenAPI spec version: latest
 * Contact: api@domain.com.au
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.50
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Api;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\RequestOptions;
use Swagger\Client\ApiException;
use Swagger\Client\Configuration;
use Swagger\Client\HeaderSelector;
use Swagger\Client\ObjectSerializer;

/**
 * AddressLocatorsApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class AddressLocatorsApi
{
    /**
     * @var ClientInterface
     */
    protected $client;

    /**
     * @var Configuration
     */
    protected $config;

    /**
     * @var HeaderSelector
     */
    protected $headerSelector;

    /**
     * @param ClientInterface $client
     * @param Configuration   $config
     * @param HeaderSelector  $selector
     */
    public function __construct(
        ClientInterface $client = null,
        Configuration $config = null,
        HeaderSelector $selector = null
    ) {
        $this->client = $client ?: new Client();
        $this->config = $config ?: new Configuration();
        $this->headerSelector = $selector ?: new HeaderSelector();
    }

    /**
     * @return Configuration
     */
    public function getConfig()
    {
        return $this->config;
    }

    /**
     * Operation addressLocatorsGet
     *
     * Retrieves matching ids for use in other services.
     *
     * @param  string $search_level Requested search level. Valid values are: &#x60;Address&#x60;, and &#x60;Suburb&#x60; (optional)
     * @param  string $unit_number Unit number (optional)
     * @param  string $street_number Street number (optional)
     * @param  string $street_name Street name (optional)
     * @param  string $street_type Street type (optional)
     * @param  string $suburb Suburb (optional)
     * @param  string $state State (optional)
     * @param  string $postcode Postcode (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\AddressLocatorsV1AddressDataModel[]
     */
    public function addressLocatorsGet($search_level = null, $unit_number = null, $street_number = null, $street_name = null, $street_type = null, $suburb = null, $state = null, $postcode = null)
    {
        list($response) = $this->addressLocatorsGetWithHttpInfo($search_level, $unit_number, $street_number, $street_name, $street_type, $suburb, $state, $postcode);
        return $response;
    }

    /**
     * Operation addressLocatorsGetWithHttpInfo
     *
     * Retrieves matching ids for use in other services.
     *
     * @param  string $search_level Requested search level. Valid values are: &#x60;Address&#x60;, and &#x60;Suburb&#x60; (optional)
     * @param  string $unit_number Unit number (optional)
     * @param  string $street_number Street number (optional)
     * @param  string $street_name Street name (optional)
     * @param  string $street_type Street type (optional)
     * @param  string $suburb Suburb (optional)
     * @param  string $state State (optional)
     * @param  string $postcode Postcode (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\AddressLocatorsV1AddressDataModel[], HTTP status code, HTTP response headers (array of strings)
     */
    public function addressLocatorsGetWithHttpInfo($search_level = null, $unit_number = null, $street_number = null, $street_name = null, $street_type = null, $suburb = null, $state = null, $postcode = null)
    {
        $returnType = '\Swagger\Client\Model\AddressLocatorsV1AddressDataModel[]';
        $request = $this->addressLocatorsGetRequest($search_level, $unit_number, $street_number, $street_name, $street_type, $suburb, $state, $postcode);

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($request, $options);
            } catch (RequestException $e) {
                throw new ApiException(
                    "[{$e->getCode()}] {$e->getMessage()}",
                    $e->getCode(),
                    $e->getResponse() ? $e->getResponse()->getHeaders() : null,
                    $e->getResponse() ? $e->getResponse()->getBody()->getContents() : null
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $request->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()
                );
            }

            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = $responseBody->getContents();
                if (!in_array($returnType, ['string','integer','bool'])) {
                    $content = json_decode($content);
                }
            }

            return [
                ObjectSerializer::deserialize($content, $returnType, []),
                $response->getStatusCode(),
                $response->getHeaders()
            ];

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 200:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\AddressLocatorsV1AddressDataModel[]',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                default:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation addressLocatorsGetAsync
     *
     * Retrieves matching ids for use in other services.
     *
     * @param  string $search_level Requested search level. Valid values are: &#x60;Address&#x60;, and &#x60;Suburb&#x60; (optional)
     * @param  string $unit_number Unit number (optional)
     * @param  string $street_number Street number (optional)
     * @param  string $street_name Street name (optional)
     * @param  string $street_type Street type (optional)
     * @param  string $suburb Suburb (optional)
     * @param  string $state State (optional)
     * @param  string $postcode Postcode (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addressLocatorsGetAsync($search_level = null, $unit_number = null, $street_number = null, $street_name = null, $street_type = null, $suburb = null, $state = null, $postcode = null)
    {
        return $this->addressLocatorsGetAsyncWithHttpInfo($search_level, $unit_number, $street_number, $street_name, $street_type, $suburb, $state, $postcode)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation addressLocatorsGetAsyncWithHttpInfo
     *
     * Retrieves matching ids for use in other services.
     *
     * @param  string $search_level Requested search level. Valid values are: &#x60;Address&#x60;, and &#x60;Suburb&#x60; (optional)
     * @param  string $unit_number Unit number (optional)
     * @param  string $street_number Street number (optional)
     * @param  string $street_name Street name (optional)
     * @param  string $street_type Street type (optional)
     * @param  string $suburb Suburb (optional)
     * @param  string $state State (optional)
     * @param  string $postcode Postcode (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function addressLocatorsGetAsyncWithHttpInfo($search_level = null, $unit_number = null, $street_number = null, $street_name = null, $street_type = null, $suburb = null, $state = null, $postcode = null)
    {
        $returnType = '\Swagger\Client\Model\AddressLocatorsV1AddressDataModel[]';
        $request = $this->addressLocatorsGetRequest($search_level, $unit_number, $street_number, $street_name, $street_type, $suburb, $state, $postcode);

        return $this->client
            ->sendAsync($request, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = $responseBody->getContents();
                        if ($returnType !== 'string') {
                            $content = json_decode($content);
                        }
                    }

                    return [
                        ObjectSerializer::deserialize($content, $returnType, []),
                        $response->getStatusCode(),
                        $response->getHeaders()
                    ];
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $statusCode = $response->getStatusCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $response->getHeaders(),
                        $response->getBody()
                    );
                }
            );
    }

    /**
     * Create request for operation 'addressLocatorsGet'
     *
     * @param  string $search_level Requested search level. Valid values are: &#x60;Address&#x60;, and &#x60;Suburb&#x60; (optional)
     * @param  string $unit_number Unit number (optional)
     * @param  string $street_number Street number (optional)
     * @param  string $street_name Street name (optional)
     * @param  string $street_type Street type (optional)
     * @param  string $suburb Suburb (optional)
     * @param  string $state State (optional)
     * @param  string $postcode Postcode (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function addressLocatorsGetRequest($search_level = null, $unit_number = null, $street_number = null, $street_name = null, $street_type = null, $suburb = null, $state = null, $postcode = null)
    {

        $resourcePath = '/v1/addressLocators';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if ($search_level !== null) {
            $queryParams['searchLevel'] = ObjectSerializer::toQueryValue($search_level, null);
        }
        // query params
        if ($unit_number !== null) {
            $queryParams['unitNumber'] = ObjectSerializer::toQueryValue($unit_number, null);
        }
        // query params
        if ($street_number !== null) {
            $queryParams['streetNumber'] = ObjectSerializer::toQueryValue($street_number, null);
        }
        // query params
        if ($street_name !== null) {
            $queryParams['streetName'] = ObjectSerializer::toQueryValue($street_name, null);
        }
        // query params
        if ($street_type !== null) {
            $queryParams['streetType'] = ObjectSerializer::toQueryValue($street_type, null);
        }
        // query params
        if ($suburb !== null) {
            $queryParams['suburb'] = ObjectSerializer::toQueryValue($suburb, null);
        }
        // query params
        if ($state !== null) {
            $queryParams['state'] = ObjectSerializer::toQueryValue($state, null);
        }
        // query params
        if ($postcode !== null) {
            $queryParams['postcode'] = ObjectSerializer::toQueryValue($postcode, null);
        }


        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['application/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['application/json'],
                []
            );
        }

        // for model (json/xml)
        if (isset($_tempBody)) {
            // $_tempBody is the method argument, if present
            $httpBody = $_tempBody;
            // \stdClass has no __toString(), so we should encode it manually
            if ($httpBody instanceof \stdClass && $headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($httpBody);
            }
        } elseif (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $multipartContents[] = [
                        'name' => $formParamName,
                        'contents' => $formParamValue
                    ];
                }
                // for HTTP post (form)
                $httpBody = new MultipartStream($multipartContents);

            } elseif ($headers['Content-Type'] === 'application/json') {
                $httpBody = \GuzzleHttp\json_encode($formParams);

            } else {
                // for HTTP post (form)
                $httpBody = \GuzzleHttp\Psr7\Query::build($formParams);
            }
        }

        // this endpoint requires API key authentication
        $apiKey = $this->config->getApiKeyWithPrefix('x-api-key');
        if ($apiKey !== null) {
            $headers['x-api-key'] = $apiKey;
        }
        // this endpoint requires OAuth (access token)
        if ($this->config->getAccessToken() !== null) {
            $headers['Authorization'] = 'Bearer ' . $this->config->getAccessToken();
        }

        $defaultHeaders = [];
        if ($this->config->getUserAgent()) {
            $defaultHeaders['User-Agent'] = $this->config->getUserAgent();
        }

        $headers = array_merge(
            $defaultHeaders,
            $headerParams,
            $headers
        );

        $query = \GuzzleHttp\Psr7\Query::build($queryParams);
        return new Request(
            'GET',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Create http client option
     *
     * @throws \RuntimeException on file opening failure
     * @return array of http client options
     */
    protected function createHttpClientOption()
    {
        $options = [];
        if ($this->config->getDebug()) {
            $options[RequestOptions::DEBUG] = fopen($this->config->getDebugFile(), 'a');
            if (!$options[RequestOptions::DEBUG]) {
                throw new \RuntimeException('Failed to open the debug file: ' . $this->config->getDebugFile());
            }
        }

        return $options;
    }
}
