<?php

namespace Vitelity;

use GuzzleHttp\Client;

class Core {
        
    /**
     * @var \GuzzleHttp\Client
     */
    protected $client;

    /**
     * @var string
     */
    protected $api_url;

    /**
     * @var string
     */
    protected $login;

    /**
     * @var string
     */
    protected $password;

    /**
     * @var int
     */
    protected $timeout;

    /**
     * @var array
     */
    protected $errors = [
        'missingdata' => 'Missing login, pass or cmd parameters in URL',
        'invalidauth' => 'Invalid username or password',
        'invalid' => 'Invalid parameters?',
        'missingrc' => 'Missing or invalid state or ratecenter',
        'unavailable' => 'Requested Number Unavailable',
        'none' => 'No Toll Free Numbers Available',
        'missingdid' => 'Missing did parameter'
    ];

    /**
     * Instantiate a new instance
     */
    public function __construct()
    {
        $this->api_url          = config('vitelity.url');
        $this->login            = config('vitelity.login');
        $this->password         = config('vitelity.password');

        $this->client = new Client([
            'base_uri'  => $this->api_url,
            'timeout'   => config('vitelity.timeout')
        ]);
    }

    /**
     * Respond to a Vitelity request
     * 
     * @param type 
     * @return string
     */
    public function submitRequest($data)
    {
        $data = $this->addDefaultParams($data);
        $response = $this->client->request('POST', '', [
            //'query' => $data,
            'form_params' => $data,
            'http_errors' => true,
            'verify' => false
        ]);

        return $this->handleResponse($response);
    }

    /**
     * Formats the response based on the set response_type
     *
     * @param object $response
     * @return mixed
     *
     * @throws \Exception
     */
    protected function handleResponse($response)
    {
        $ret = explode('[[', $response->getBody());
        if (!isset($ret[1])) {
            throw new \Exception(sprintf('Error in return Data: %s', $response->getBody()));
        }

        $res = trim($ret[1]);
        if (isset($this->errors[$res])) {
            throw new \Exception(sprintf('Got Non-Success Response: %s', $this->errors[$res]));
        }
        elseif ($res !== 'success') {
            $numList = explode("\n", $res);
            /*
             * Sometimes AT&T returns letters instead of numbers.  We normalize.
            */
            $patterns = ['/[a-cA-C]/', '/[d-fD-F]/', '/[g-iG-I]/', '/[j-lJ-L]/', '/[m-oM-O]/', '/[p-sP-S]/', '/[t-vT-V]/', '/[w-zW-Z]/'];
            $replacements = [2, 3, 4, 5, 6, 7, 8, 9];
            foreach ($numList as $k => $v) {
                if (strlen($v) === 10 && is_numeric(substr($v, 0, 3))) {
                    $numList[$k] = preg_replace($patterns, $replacements, $v);
                }
            }
            return $numList;
        }

        return 'success';
    }

    /**
     * @param array $params
     * @return array
     */
    public function addDefaultParams($params = [])
    {
        $params['login'] = $this->login;
        $params['pass'] = $this->password;

        return array_filter($params, function($value){return !is_null($value);});
    }

}