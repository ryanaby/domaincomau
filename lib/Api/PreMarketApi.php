<?php
/**
 * PreMarketApi
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
 * PreMarketApi Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class PreMarketApi
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
     * Operation preMarketGet
     *
     * Retrieves a pre-portal listing.
     *
     * @param  string $id Pre-portal listing ID. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\PreMarketV1ListingResponse
     */
    public function preMarketGet($id)
    {
        list($response) = $this->preMarketGetWithHttpInfo($id);
        return $response;
    }

    /**
     * Operation preMarketGetWithHttpInfo
     *
     * Retrieves a pre-portal listing.
     *
     * @param  string $id Pre-portal listing ID. (required)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\PreMarketV1ListingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function preMarketGetWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\PreMarketV1ListingResponse';
        $request = $this->preMarketGetRequest($id);

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
                        '\Swagger\Client\Model\PreMarketV1ListingResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PreMarketV1ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 409:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PreMarketV1ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PreMarketV1ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation preMarketGetAsync
     *
     * Retrieves a pre-portal listing.
     *
     * @param  string $id Pre-portal listing ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function preMarketGetAsync($id)
    {
        return $this->preMarketGetAsyncWithHttpInfo($id)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation preMarketGetAsyncWithHttpInfo
     *
     * Retrieves a pre-portal listing.
     *
     * @param  string $id Pre-portal listing ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function preMarketGetAsyncWithHttpInfo($id)
    {
        $returnType = '\Swagger\Client\Model\PreMarketV1ListingResponse';
        $request = $this->preMarketGetRequest($id);

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
     * Create request for operation 'preMarketGet'
     *
     * @param  string $id Pre-portal listing ID. (required)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function preMarketGetRequest($id)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling preMarketGet'
            );
        }

        $resourcePath = '/v2/premarket/listings/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
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
     * Operation preMarketPatch
     *
     * Patches a pre-portal listing.
     *
     * @param  string $id Pre-portal listing ID. (required)
     * @param  \Swagger\Client\Model\PreMarketV1ListingRequestJsonPatchDocument $body &#x60;&#x60;&#x60;
Examples:
[
{
	&quot;op&quot;: &quot;replace&quot;,
	&quot;path&quot;: &quot;/bedrooms&quot;,
	&quot;value&quot;: 3
   },
{
	&quot;op&quot;: &quot;replace&quot;,
	&quot;path&quot;: &quot;/listingStatus&quot;,
	&quot;value&quot;: &quot;sold&quot;
},
{
	&quot;op&quot;: &quot;remove&quot;,
	&quot;path&quot;: &quot;/StatementOfInformation&quot;
},
{
	&quot;op&quot;: &quot;add&quot;,
	&quot;path&quot;: &quot;/contacts/-&quot;,
	&quot;value&quot;: {
		&quot;firstName&quot;: &quot;lily&quot;,
		&quot;lastName&quot;: &quot;li&quot;,
		&quot;email&quot;: &quot;lily.li@domain.com.au&quot;,
		&quot;phone&quot;: &quot;0411111111&quot;,
		&quot;mobile&quot;: null,
		&quot;fax&quot;: null
	}
}
]
&#x60;&#x60;&#x60; (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\PreMarketV1ListingRequest
     */
    public function preMarketPatch($id, $body = null)
    {
        list($response) = $this->preMarketPatchWithHttpInfo($id, $body);
        return $response;
    }

    /**
     * Operation preMarketPatchWithHttpInfo
     *
     * Patches a pre-portal listing.
     *
     * @param  string $id Pre-portal listing ID. (required)
     * @param  \Swagger\Client\Model\PreMarketV1ListingRequestJsonPatchDocument $body &#x60;&#x60;&#x60;
Examples:
[
{
	&quot;op&quot;: &quot;replace&quot;,
	&quot;path&quot;: &quot;/bedrooms&quot;,
	&quot;value&quot;: 3
   },
{
	&quot;op&quot;: &quot;replace&quot;,
	&quot;path&quot;: &quot;/listingStatus&quot;,
	&quot;value&quot;: &quot;sold&quot;
},
{
	&quot;op&quot;: &quot;remove&quot;,
	&quot;path&quot;: &quot;/StatementOfInformation&quot;
},
{
	&quot;op&quot;: &quot;add&quot;,
	&quot;path&quot;: &quot;/contacts/-&quot;,
	&quot;value&quot;: {
		&quot;firstName&quot;: &quot;lily&quot;,
		&quot;lastName&quot;: &quot;li&quot;,
		&quot;email&quot;: &quot;lily.li@domain.com.au&quot;,
		&quot;phone&quot;: &quot;0411111111&quot;,
		&quot;mobile&quot;: null,
		&quot;fax&quot;: null
	}
}
]
&#x60;&#x60;&#x60; (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\PreMarketV1ListingRequest, HTTP status code, HTTP response headers (array of strings)
     */
    public function preMarketPatchWithHttpInfo($id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\PreMarketV1ListingRequest';
        $request = $this->preMarketPatchRequest($id, $body);

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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PreMarketV1ListingRequest',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PreMarketV1ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PreMarketV1ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PreMarketV1ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation preMarketPatchAsync
     *
     * Patches a pre-portal listing.
     *
     * @param  string $id Pre-portal listing ID. (required)
     * @param  \Swagger\Client\Model\PreMarketV1ListingRequestJsonPatchDocument $body &#x60;&#x60;&#x60;
Examples:
[
{
	&quot;op&quot;: &quot;replace&quot;,
	&quot;path&quot;: &quot;/bedrooms&quot;,
	&quot;value&quot;: 3
   },
{
	&quot;op&quot;: &quot;replace&quot;,
	&quot;path&quot;: &quot;/listingStatus&quot;,
	&quot;value&quot;: &quot;sold&quot;
},
{
	&quot;op&quot;: &quot;remove&quot;,
	&quot;path&quot;: &quot;/StatementOfInformation&quot;
},
{
	&quot;op&quot;: &quot;add&quot;,
	&quot;path&quot;: &quot;/contacts/-&quot;,
	&quot;value&quot;: {
		&quot;firstName&quot;: &quot;lily&quot;,
		&quot;lastName&quot;: &quot;li&quot;,
		&quot;email&quot;: &quot;lily.li@domain.com.au&quot;,
		&quot;phone&quot;: &quot;0411111111&quot;,
		&quot;mobile&quot;: null,
		&quot;fax&quot;: null
	}
}
]
&#x60;&#x60;&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function preMarketPatchAsync($id, $body = null)
    {
        return $this->preMarketPatchAsyncWithHttpInfo($id, $body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation preMarketPatchAsyncWithHttpInfo
     *
     * Patches a pre-portal listing.
     *
     * @param  string $id Pre-portal listing ID. (required)
     * @param  \Swagger\Client\Model\PreMarketV1ListingRequestJsonPatchDocument $body &#x60;&#x60;&#x60;
Examples:
[
{
	&quot;op&quot;: &quot;replace&quot;,
	&quot;path&quot;: &quot;/bedrooms&quot;,
	&quot;value&quot;: 3
   },
{
	&quot;op&quot;: &quot;replace&quot;,
	&quot;path&quot;: &quot;/listingStatus&quot;,
	&quot;value&quot;: &quot;sold&quot;
},
{
	&quot;op&quot;: &quot;remove&quot;,
	&quot;path&quot;: &quot;/StatementOfInformation&quot;
},
{
	&quot;op&quot;: &quot;add&quot;,
	&quot;path&quot;: &quot;/contacts/-&quot;,
	&quot;value&quot;: {
		&quot;firstName&quot;: &quot;lily&quot;,
		&quot;lastName&quot;: &quot;li&quot;,
		&quot;email&quot;: &quot;lily.li@domain.com.au&quot;,
		&quot;phone&quot;: &quot;0411111111&quot;,
		&quot;mobile&quot;: null,
		&quot;fax&quot;: null
	}
}
]
&#x60;&#x60;&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function preMarketPatchAsyncWithHttpInfo($id, $body = null)
    {
        $returnType = '\Swagger\Client\Model\PreMarketV1ListingRequest';
        $request = $this->preMarketPatchRequest($id, $body);

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
     * Create request for operation 'preMarketPatch'
     *
     * @param  string $id Pre-portal listing ID. (required)
     * @param  \Swagger\Client\Model\PreMarketV1ListingRequestJsonPatchDocument $body &#x60;&#x60;&#x60;
Examples:
[
{
	&quot;op&quot;: &quot;replace&quot;,
	&quot;path&quot;: &quot;/bedrooms&quot;,
	&quot;value&quot;: 3
   },
{
	&quot;op&quot;: &quot;replace&quot;,
	&quot;path&quot;: &quot;/listingStatus&quot;,
	&quot;value&quot;: &quot;sold&quot;
},
{
	&quot;op&quot;: &quot;remove&quot;,
	&quot;path&quot;: &quot;/StatementOfInformation&quot;
},
{
	&quot;op&quot;: &quot;add&quot;,
	&quot;path&quot;: &quot;/contacts/-&quot;,
	&quot;value&quot;: {
		&quot;firstName&quot;: &quot;lily&quot;,
		&quot;lastName&quot;: &quot;li&quot;,
		&quot;email&quot;: &quot;lily.li@domain.com.au&quot;,
		&quot;phone&quot;: &quot;0411111111&quot;,
		&quot;mobile&quot;: null,
		&quot;fax&quot;: null
	}
}
]
&#x60;&#x60;&#x60; (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function preMarketPatchRequest($id, $body = null)
    {
        // verify the required parameter 'id' is set
        if ($id === null || (is_array($id) && count($id) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $id when calling preMarketPatch'
            );
        }

        $resourcePath = '/v2/premarket/listings/{id}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;


        // path params
        if ($id !== null) {
            $resourcePath = str_replace(
                '{' . 'id' . '}',
                ObjectSerializer::toPathValue($id),
                $resourcePath
            );
        }

        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
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
            'PATCH',
            $this->config->getHost() . $resourcePath . ($query ? "?{$query}" : ''),
            $headers,
            $httpBody
        );
    }

    /**
     * Operation preMarketPost
     *
     * Creates or updates a pre-portal listing.
     *
     * @param  \Swagger\Client\Model\PreMarketV1ListingRequest $body Pre-portal listing request. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \Swagger\Client\Model\PreMarketV1CreateOrUpdateListingResponse
     */
    public function preMarketPost($body = null)
    {
        list($response) = $this->preMarketPostWithHttpInfo($body);
        return $response;
    }

    /**
     * Operation preMarketPostWithHttpInfo
     *
     * Creates or updates a pre-portal listing.
     *
     * @param  \Swagger\Client\Model\PreMarketV1ListingRequest $body Pre-portal listing request. (optional)
     *
     * @throws \Swagger\Client\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \Swagger\Client\Model\PreMarketV1CreateOrUpdateListingResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function preMarketPostWithHttpInfo($body = null)
    {
        $returnType = '\Swagger\Client\Model\PreMarketV1CreateOrUpdateListingResponse';
        $request = $this->preMarketPostRequest($body);

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
                case 202:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PreMarketV1CreateOrUpdateListingResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PreMarketV1ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\Swagger\Client\Model\PreMarketV1ProblemDetails',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            throw $e;
        }
    }

    /**
     * Operation preMarketPostAsync
     *
     * Creates or updates a pre-portal listing.
     *
     * @param  \Swagger\Client\Model\PreMarketV1ListingRequest $body Pre-portal listing request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function preMarketPostAsync($body = null)
    {
        return $this->preMarketPostAsyncWithHttpInfo($body)
            ->then(
                function ($response) {
                    return $response[0];
                }
            );
    }

    /**
     * Operation preMarketPostAsyncWithHttpInfo
     *
     * Creates or updates a pre-portal listing.
     *
     * @param  \Swagger\Client\Model\PreMarketV1ListingRequest $body Pre-portal listing request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function preMarketPostAsyncWithHttpInfo($body = null)
    {
        $returnType = '\Swagger\Client\Model\PreMarketV1CreateOrUpdateListingResponse';
        $request = $this->preMarketPostRequest($body);

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
     * Create request for operation 'preMarketPost'
     *
     * @param  \Swagger\Client\Model\PreMarketV1ListingRequest $body Pre-portal listing request. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    protected function preMarketPostRequest($body = null)
    {

        $resourcePath = '/v2/premarket/listings';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;



        // body params
        $_tempBody = null;
        if (isset($body)) {
            $_tempBody = $body;
        }

        if ($multipart) {
            $headers = $this->headerSelector->selectHeadersForMultipart(
                ['text/plain', 'application/json', 'text/json']
            );
        } else {
            $headers = $this->headerSelector->selectHeaders(
                ['text/plain', 'application/json', 'text/json'],
                ['application/json-patch+json', 'application/json', 'text/json', 'application/_*+json']
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
            'POST',
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