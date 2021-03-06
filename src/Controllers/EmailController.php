<?php
/*
 * FalconideAPIV10Lib
 *
 * This file was automatically generated by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace FalconideAPIV10Lib\Controllers;

use FalconideAPIV10Lib\APIException;
use FalconideAPIV10Lib\APIHelper;
use FalconideAPIV10Lib\Configuration;
use FalconideAPIV10Lib\Models;
use FalconideAPIV10Lib\Exceptions;
use FalconideAPIV10Lib\Http\HttpRequest;
use FalconideAPIV10Lib\Http\HttpResponse;
use FalconideAPIV10Lib\Http\HttpMethod;
use FalconideAPIV10Lib\Http\HttpContext;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class EmailController extends BaseController
{
    /**
     * @var EmailController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return EmailController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * `Sending Mails` – This API is used for sending emails. Falconide supports REST as well JSON formats
     * for the input
     *
     *
     * @param string  $apiKey       Your API Key
     * @param string  $from         From email address
     * @param string  $subject      Subject of the Email
     * @param string  $content      Email body in html (to use attributes to display dynamic values such as name,
     *                              account number, etc. for ex. [% NAME %] for ATT_NAME , [% AGE %] for ATT_AGE etc.)
     * @param string  $recipients   Email addresses for recipients (multiple values allowed)
     * @param string  $fromname     (optional) Email Sender name
     * @param string  $replytoid    (optional) Reply to email address
     * @param bool    $footer       (optional) Set '0' or '1' in order to include footer or not
     * @param integer $template     (optional) Email template ID
     * @param string  $attachmentid (optional) specify uploaded attachments id (Multiple attachments are allowed)
     * @param bool    $clicktrack   (optional) set ‘0’ or ‘1’ in-order to disable or enable the click-track
     * @param bool    $opentrack    (optional) set open-track value to ‘0’ or ‘1’ in-order to disable or enable
     * @param string  $bcc          (optional) Email address for bcc
     * @param string  $aTTNAME      (optional) Specify attributes followed by ATT_ for recipient to personalized email
     *                              for ex. ATT_NAME for name, ATT_AGE for age etc. (Multiple attributes are allowed)
     * @param string  $xAPIHEADER   (optional) Your defined unique identifier
     * @param string  $tags         (optional) To relate each message. Useful for reports.
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function getFalconapiWebSendRest(
        $apiKey,
        $from,
        $subject,
        $content,
        $recipients,
        $fromname = null,
        $replytoid = null,
        $footer = true,
        $template = null,
        $attachmentid = null,
        $clicktrack = true,
        $opentrack = true,
        $bcc = null,
        $aTTNAME = null,
        $xAPIHEADER = null,
        $tags = null
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/falconapi/web.send.rest';

        //process optional query parameters
        APIHelper::appendUrlWithQueryParameters($_queryBuilder, array (
            'api_key'      => $apiKey,
            'from'         => $from,
            'subject'      => $subject,
            'content'      => $content,
            'recipients'   => $recipients,
            'fromname'     => $fromname,
            'replytoid'    => $replytoid,
            'footer'       => (null != $footer) ? var_export($footer, true) : true,
            'template'     => $template,
            'attachmentid' => $attachmentid,
            'clicktrack'   => (null != $clicktrack) ? var_export($clicktrack, true) : true,
            'opentrack'    => (null != $opentrack) ? var_export($opentrack, true) : true,
            'bcc'          => $bcc,
            'ATT_NAME'     => $aTTNAME,
            'X-APIHEADER'  => $xAPIHEADER,
            'tags'         => $tags,
        ));

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::GET, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::get($_queryUrl, $_headers);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }

    /**
     * `Sending Mails` – This API is used for sending emails. Pepipost supports REST as well JSON formats
     * for the input. This is JSON API.
     *
     *
     * @param Models\Emailv1 $data Data in JSON format
     * @return void response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createFalconapiWebSendJson(
        $data
    ) {

        //the base uri for api requests
        $_queryBuilder = Configuration::$BASEURI;
        
        //prepare query string for API call
        $_queryBuilder = $_queryBuilder.'/falconapi/web.send.json';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl($_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => 'APIMATIC 2.0',
            'content-type'  => 'application/x-www-form-urlencoded; charset=utf-8'
        );

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, 'data='.Request\Body::Json($data));

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);
		return $response;
        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);
    }
}
