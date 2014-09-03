<?php

class BaseController extends Controller {

    /**
     * Setup the layout used by the controller.
     *
     * @return void
     */
    protected $dataToPost = array();
    protected $apiResponse = array(
        'message' => false
    );

    protected $responseInfo = null;

    /**
     * @return null
     */
    public function getResponseInfo()
    {
        return $this->responseInfo;
    }
    /**
     * @param array $dataToPost
     */
    public function setDataToPost( array $dataToPost)
    {
        $this->dataToPost = $dataToPost;
    }

    /**
     * @return array
     */
    public function getApiResponse()
    {
        return $this->apiResponse;
    }

    public function setApiResponseHeader() {

        if($this->responseInfo) {
            $code = $this->responseInfo['http_code'];
            header($_SERVER["SERVER_PROTOCOL"]." $code");
            header("Content-Type: {$this->responseInfo['content_type']}");
        }

    }

    protected function setupLayout() {

        if (!is_null($this->layout)) {
            $this->layout = View::make($this->layout);
        }
    }

    public function submitPostToApi($uri = '') {
        $apiUrlPath = Config::get('api.mage_soap_api_url');
        $apiFullPath = $apiUrlPath.$uri;
        $h = curl_init();
        curl_setopt($h, CURLOPT_URL, $apiFullPath);
        curl_setopt($h, CURLOPT_POST, true);
        curl_setopt($h, CURLOPT_POSTFIELDS, $this->dataToPost);
        curl_setopt($h, CURLOPT_HEADER, false);
        curl_setopt($h, CURLOPT_RETURNTRANSFER, 1);
        $this->apiResponse = curl_exec($h);
        if(!curl_errno($h))
        {
            $this->responseInfo = curl_getinfo($h);
        }
        return $this;
    }
}