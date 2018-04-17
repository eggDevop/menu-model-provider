<?php

namespace MenuProvider;

use MenuProvider\Base;

/**
 * @SWG\Definition(definition="Author", type="object", required={"name"})
 */
class Menu extends Base
{
    private $configs;
    private $serviceName = 'menu';

    // $config = [
    //     'url'    => 'http://ms-menu-api.develop:8001/',
    //     'login'  => 'menus/login',
    //     'create' => 'menus',
    // ];

    public function __construct($configs = null)
    {

        if (!empty($configs)) {
            $this->configs = $configs;
        } else {
            $this->configs = [
                'url'    => 'http://ms-menu-api.develop/',
                'login'  => 'menus/login',
                'create' => 'menus',
            ];
        }

        parent::__construct();
    }

    public function login($params)
    {
        //set curl
        $this->setCurl($this->configs['url']);

        $this->curl->post($this->configs['login'], $params);

        return $this->manageResponse($this->curl, $this->serviceName);
    }

    public function getMenuList($params)
    {
        //set curl
        $this->setCurl($this->configs['url']);

        $this->curl->get($this->configs['list'], $params);

        return $this->manageResponse($this->curl, $this->serviceName);
    }

    public function getMenuDetail($params)
    {
        //complete uri
        $uri = str_replace('[id]', $params['id'], $this->configs['detail']);

        //set curl
        $this->setCurl($this->configs['url']);

        $this->curl->get($uri, $params);

        return $this->manageResponse($this->curl, $this->serviceName);
    }

    public function createMenu($params)
    {
        //set curl
        $this->setCurl($this->configs['url']);

        $this->curl->post($this->configs['create'], $params);

        return $this->manageResponse($this->curl, $this->serviceName);
    }

    public function updateMenu($params)
    {
        //complete uri
        $uri = str_replace('[id]', $params['id'], $this->configs['update']);

        //set curl
        $this->setCurl($this->configs['url']);

        $this->curl->put($uri, $params, true);

        return $this->manageResponse($this->curl, $this->serviceName);
    }

    public function deleteMenu($params)
    {
        //complete uri
        $uri = str_replace('[id]', $params['id'], $this->configs['delete']);

        //set curl
        $this->setCurl($this->configs['url']);

        $this->curl->delete($uri, $params);

        return $this->manageResponse($this->curl, $this->serviceName);
    }

    public function changePassword($params)
    {
        //complete uri
        $uri = str_replace('[id]', $params['id'], $this->configs['change_password']);

        //set curl
        $this->setCurl($this->configs['url']);

        $this->curl->put($uri, $params);

        return $this->manageResponse($this->curl, $this->serviceName);
    }
}
