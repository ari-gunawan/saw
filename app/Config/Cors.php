<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class CORS extends BaseConfig
{
    public $allowedOrigins = ['*'];
    public $allowedMethods = ['GET', 'POST', 'OPTIONS'];
    public $allowCredentials = false;
    public $maxAge = 3600;
    public $allowedHeaders = [];
    public $exposedHeaders = [];
}
