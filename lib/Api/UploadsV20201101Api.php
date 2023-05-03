<?php
/**
 * UploadsV20201101Api
 * PHP version 7.3
 *
 * @category Class
 * @package  SellingPartnerApi
 */

/**
 * Selling Partner API for Uploads
 *
 * The Uploads API lets you upload files that you can programmatically access using other Selling Partner APIs, such as the A+ Content API and the Messaging API.
 *
 * The version of the OpenAPI document: 2020-11-01
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.0.1
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace SellingPartnerApi\Api;

use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7\MultipartStream;
use GuzzleHttp\Psr7\Request;
use SellingPartnerApi\ApiException;
use SellingPartnerApi\ObjectSerializer;

/**
 * UploadsV20201101Api Class Doc Comment
 *
 * @category Class
 * @package  SellingPartnerApi
 */
class UploadsV20201101Api extends BaseApi
{
    /**
     * Operation createUploadDestinationForResource
     *
     * @param  string[] $marketplace_ids A list of marketplace identifiers. This specifies the marketplaces where the upload will be available. Only one marketplace can be specified. (required)
     * @param  string $content_md5 An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit. (required)
     * @param  string $resource The resource for the upload destination that you are creating. For example, if you are creating an upload destination for the createLegalDisclosure operation of the Messaging API, the &#x60;{resource}&#x60; would be &#x60;/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure&#x60;, and the entire path would be &#x60;/uploads/2020-11-01/uploadDestinations/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure&#x60;. If you are creating an upload destination for an Aplus content document, the &#x60;{resource}&#x60; would be &#x60;aplus/2020-11-01/contentDocuments&#x60; and the path would be &#x60;/uploads/v1/uploadDestinations/aplus/2020-11-01/contentDocuments&#x60;. (required)
     * @param  string $content_type The content type of the file to be uploaded. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return \SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse
     */
    public function createUploadDestinationForResource($marketplace_ids, $content_md5, $resource, $content_type = null)
    {
        $response = $this->createUploadDestinationForResourceWithHttpInfo($marketplace_ids, $content_md5, $resource, $content_type);
        return $response;
    }

    /**
     * Operation createUploadDestinationForResourceWithHttpInfo
     *
     * @param  string[] $marketplace_ids A list of marketplace identifiers. This specifies the marketplaces where the upload will be available. Only one marketplace can be specified. (required)
     * @param  string $content_md5 An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit. (required)
     * @param  string $resource The resource for the upload destination that you are creating. For example, if you are creating an upload destination for the createLegalDisclosure operation of the Messaging API, the `{resource}` would be `/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`, and the entire path would be `/uploads/2020-11-01/uploadDestinations/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`. If you are creating an upload destination for an Aplus content document, the `{resource}` would be `aplus/2020-11-01/contentDocuments` and the path would be `/uploads/v1/uploadDestinations/aplus/2020-11-01/contentDocuments`. (required)
     * @param  string $content_type The content type of the file to be uploaded. (optional)
     *
     * @throws \SellingPartnerApi\ApiException on non-2xx response
     * @throws \InvalidArgumentException
     * @return array of \SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse, HTTP status code, HTTP response headers (array of strings)
     */
    public function createUploadDestinationForResourceWithHttpInfo($marketplace_ids, $content_md5, $resource, $content_type = null)
    {
        $request = $this->createUploadDestinationForResourceRequest($marketplace_ids, $content_md5, $resource, $content_type);
        $signedRequest = $this->config->signRequest(
            $request
        );

        $this->writeDebug($signedRequest);
        $this->writeDebug((string) $signedRequest->getBody());

        try {
            $options = $this->createHttpClientOption();
            try {
                $response = $this->client->send($signedRequest, $options);
                $this->writeDebug($response);
                $this->writeDebug((string) $response->getBody());
            } catch (RequestException $e) {
                $hasResponse = !empty($e->hasResponse());
                $body = (string) ($hasResponse ? $e->getResponse()->getBody() : '[NULL response]');
                $this->writeDebug($e->getResponse());
                $this->writeDebug($body);
                return $e->getCode();
                throw new ApiException(
                    "[{$e->getCode()}] {$body}",
                    $e->getCode(),
                    $hasResponse ? $e->getResponse()->getHeaders() : [],
                    $body
                );
            }

            $statusCode = $response->getStatusCode();

            if ($statusCode < 200 || $statusCode > 299) {
                throw new ApiException(
                    sprintf(
                        '[%d] Error connecting to the API (%s)',
                        $statusCode,
                        $signedRequest->getUri()
                    ),
                    $statusCode,
                    $response->getHeaders(),
                    $response->getBody()->getContents()
                );
            }

            $responseBody = $response->getBody();
            switch($statusCode) {
                case 201:
                    if ('\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse', $response->getHeaders());
                case 400:
                    if ('\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse', $response->getHeaders());
                case 403:
                    if ('\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse', $response->getHeaders());
                case 404:
                    if ('\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse', $response->getHeaders());
                case 413:
                    if ('\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse', $response->getHeaders());
                case 415:
                    if ('\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse', $response->getHeaders());
                case 429:
                    if ('\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse', $response->getHeaders());
                case 500:
                    if ('\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse', $response->getHeaders());
                case 503:
                    if ('\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse' === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse', $response->getHeaders());
            }

            $returnType = '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse';
            $responseBody = $response->getBody();
            if ($returnType === '\SplFileObject') {
                $content = $responseBody; //stream goes to serializer
            } else {
                $content = (string) $responseBody;
            }

            return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());

        } catch (ApiException $e) {
            switch ($e->getCode()) {
                case 201:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 400:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 403:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 404:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 413:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 415:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 429:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 500:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
                case 503:
                    $data = ObjectSerializer::deserialize(
                        $e->getResponseBody(),
                        '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse',
                        $e->getResponseHeaders()
                    );
                    $e->setResponseObject($data);
                    break;
            }
            $this->writeDebug($e);
            throw $e;
        }
    }

    /**
     * Operation createUploadDestinationForResourceAsync
     *
     * 
     *
     * @param  string[] $marketplace_ids A list of marketplace identifiers. This specifies the marketplaces where the upload will be available. Only one marketplace can be specified. (required)
     * @param  string $content_md5 An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit. (required)
     * @param  string $resource The resource for the upload destination that you are creating. For example, if you are creating an upload destination for the createLegalDisclosure operation of the Messaging API, the `{resource}` would be `/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`, and the entire path would be `/uploads/2020-11-01/uploadDestinations/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`. If you are creating an upload destination for an Aplus content document, the `{resource}` would be `aplus/2020-11-01/contentDocuments` and the path would be `/uploads/v1/uploadDestinations/aplus/2020-11-01/contentDocuments`. (required)
     * @param  string $content_type The content type of the file to be uploaded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createUploadDestinationForResourceAsync($marketplace_ids, $content_md5, $resource, $content_type = null)
    {
        return $this->createUploadDestinationForResourceAsyncWithHttpInfo($marketplace_ids, $content_md5, $resource, $content_type);;
    }

    /**
     * Operation createUploadDestinationForResourceAsyncWithHttpInfo
     *
     * 
     *
     * @param  string[] $marketplace_ids A list of marketplace identifiers. This specifies the marketplaces where the upload will be available. Only one marketplace can be specified. (required)
     * @param  string $content_md5 An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit. (required)
     * @param  string $resource The resource for the upload destination that you are creating. For example, if you are creating an upload destination for the createLegalDisclosure operation of the Messaging API, the `{resource}` would be `/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`, and the entire path would be `/uploads/2020-11-01/uploadDestinations/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`. If you are creating an upload destination for an Aplus content document, the `{resource}` would be `aplus/2020-11-01/contentDocuments` and the path would be `/uploads/v1/uploadDestinations/aplus/2020-11-01/contentDocuments`. (required)
     * @param  string $content_type The content type of the file to be uploaded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Promise\PromiseInterface
     */
    public function createUploadDestinationForResourceAsyncWithHttpInfo($marketplace_ids, $content_md5, $resource, $content_type = null)
    {
        $returnType = '\SellingPartnerApi\Model\UploadsV20201101\CreateUploadDestinationResponse';
        $request = $this->createUploadDestinationForResourceRequest($marketplace_ids, $content_md5, $resource, $content_type);
        $signedRequest = $this->config->signRequest(
            $request
        );

        $this->writeDebug($signedRequest);
        $this->writeDebug((string) $signedRequest->getBody());

        return $this->client
            ->sendAsync($signedRequest, $this->createHttpClientOption())
            ->then(
                function ($response) use ($returnType) {
                    $this->writeDebug($response);
                    $responseBody = $response->getBody();
                    if ($returnType === '\SplFileObject') {
                        $content = $responseBody; //stream goes to serializer
                    } else {
                        $content = (string) $responseBody;
                    }

                    return ObjectSerializer::deserialize($content, $returnType, $response->getHeaders());
                },
                function ($exception) {
                    $response = $exception->getResponse();
                    $hasResponse = !empty($response);
                    $body = (string) ($hasResponse ? $response->getBody() : '[NULL response]');
                    $this->writeDebug($response);
                    $statusCode = $hasResponse ? $response->getStatusCode() : $exception->getCode();
                    throw new ApiException(
                        sprintf(
                            '[%d] Error connecting to the API (%s)',
                            $statusCode,
                            $exception->getRequest()->getUri()
                        ),
                        $statusCode,
                        $hasResponse ? $response->getHeaders() : [],
                        $body
                    );
                }
            );
    }

    /**
     * Create request for operation 'createUploadDestinationForResource'
     *
     * @param  string[] $marketplace_ids A list of marketplace identifiers. This specifies the marketplaces where the upload will be available. Only one marketplace can be specified. (required)
     * @param  string $content_md5 An MD5 hash of the content to be submitted to the upload destination. This value is used to determine if the data has been corrupted or tampered with during transit. (required)
     * @param  string $resource The resource for the upload destination that you are creating. For example, if you are creating an upload destination for the createLegalDisclosure operation of the Messaging API, the `{resource}` would be `/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`, and the entire path would be `/uploads/2020-11-01/uploadDestinations/messaging/v1/orders/{amazonOrderId}/messages/legalDisclosure`. If you are creating an upload destination for an Aplus content document, the `{resource}` would be `aplus/2020-11-01/contentDocuments` and the path would be `/uploads/v1/uploadDestinations/aplus/2020-11-01/contentDocuments`. (required)
     * @param  string $content_type The content type of the file to be uploaded. (optional)
     *
     * @throws \InvalidArgumentException
     * @return \GuzzleHttp\Psr7\Request
     */
    public function createUploadDestinationForResourceRequest($marketplace_ids, $content_md5, $resource, $content_type = null)
    {
        // verify the required parameter 'marketplace_ids' is set
        if ($marketplace_ids === null || (is_array($marketplace_ids) && count($marketplace_ids) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $marketplace_ids when calling createUploadDestinationForResource'
            );
        }
        if (count($marketplace_ids) > 1) {
            throw new \InvalidArgumentException('invalid value for "$marketplace_ids" when calling UploadsV20201101Api.createUploadDestinationForResource, number of items must be less than or equal to 1.');
        }

        // verify the required parameter 'content_md5' is set
        if ($content_md5 === null || (is_array($content_md5) && count($content_md5) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $content_md5 when calling createUploadDestinationForResource'
            );
        }
        // verify the required parameter 'resource' is set
        if ($resource === null || (is_array($resource) && count($resource) === 0)) {
            throw new \InvalidArgumentException(
                'Missing the required parameter $resource when calling createUploadDestinationForResource'
            );
        }

        $resourcePath = '/uploads/2020-11-01/uploadDestinations/{resource}';
        $formParams = [];
        $queryParams = [];
        $headerParams = [];
        $httpBody = '';
        $multipart = false;

        // query params
        if (is_array($marketplace_ids)) {
            $marketplace_ids = ObjectSerializer::serializeCollection($marketplace_ids, 'form', true);
        }
        if ($marketplace_ids !== null) {
            $queryParams['marketplaceIds'] = $marketplace_ids;
        }

        // query params
        if (is_array($content_md5)) {
            $content_md5 = ObjectSerializer::serializeCollection($content_md5, '', true);
        }
        if ($content_md5 !== null) {
            $queryParams['contentMD5'] = $content_md5;
        }

        // query params
        if (is_array($content_type)) {
            $content_type = ObjectSerializer::serializeCollection($content_type, '', true);
        }
        if ($content_type !== null) {
            $queryParams['contentType'] = $content_type;
        }

        // path params
        if ($resource !== null) {
            $resourcePath = str_replace(
                '{' . 'resource' . '}',
                ObjectSerializer::toPathValue($resource, true),
                $resourcePath
            );
        }

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
        if (count($formParams) > 0) {
            if ($multipart) {
                $multipartContents = [];
                foreach ($formParams as $formParamName => $formParamValue) {
                    $formParamValueItems = is_array($formParamValue) ? $formParamValue : [$formParamValue];
                    foreach ($formParamValueItems as $formParamValueItem) {
                        $multipartContents[] = [
                            'name' => $formParamName,
                            'contents' => $formParamValueItem
                        ];
                    }
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

}
