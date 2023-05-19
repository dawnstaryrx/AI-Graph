<?php

namespace Volc\Service;

use Volc\Base\V4Curl;

class Visual extends V4Curl
{
    protected function getConfig(string $region = '')
    {
        return [
            'host' => 'https://visual.volcengineapi.com',
            'config' => [
                'timeout' => 10.0,
                'headers' => [
                    'Accept' => 'application/json'
                ],
                'v4_credentials' => [
                    'region' => 'cn-north-1',
                    'service' => 'cv',
                ],
            ],
        ];
    }

    public function JPCartoon(array $query = [])
    {
        $response = $this->request('JPCartoon', $query);
        return $response->getBody();
    }
    
    public function PotraitEffect(array $query = [])
    {
        $response = $this->request('PotraitEffect', $query);
        return $response->getBody();
    }

    public function ImageAnimation(array $query = [])
    {
       
        $response = $this->request('ImageAnimation', $query);
        return $response->getBody();
    }
    
    public function EmoticonEdit(array $query = [])
    {
        $response = $this->request('EmoticonEdit', $query);
        return $response->getBody();
    }
    
    
    public function AllAgeGeneration(array $query = [])
    {

        $response = $this->request('AllAgeGeneration', $query);
        return $response->getBody();
    }

    public function threeDGameCartoon(array $query = [])
    {
        $response = $this->request('3DGameCartoon', $query);
        return $response->getBody();
    }

    public function FaceSwap(array $query = [])
    {
        $response = $this->request('FaceSwap', $query);
        return $response->getBody();
    }

    public function HumanSegment(array $query = [])
    {
        $response = $this->request('HumanSegment', $query);
        return $response->getBody();
    }

    public function GeneralSegment(array $query = [])
    {
        $response = $this->request('GeneralSegment', $query);
        return $response->getBody();
    }

    public function EnhancePhoto(array $query = [])
    {
        $response = $this->request('EnhancePhoto', $query);
        return $response->getBody();
    }

    public function ConvertPhoto(array $query = [])
    {
        $response = $this->request('ConvertPhoto', $query);
        return $response->getBody();
    }

    public function OCRNormal(array $query = [])
    {
        $response = $this->request('OCRNormal', $query);
        return $response->getBody();
    }

    public function IDCard(array $query = [])
    {
        $response = $this->request('IDCard', $query);
        return $response->getBody();
    }

    public function BankCard(array $query = [])
    {
        $response = $this->request('BankCard', $query);
        return $response->getBody();
    }

    protected $apiList = [
        'JPCartoon' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'JPCartoon',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
          'PotraitEffect' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'PotraitEffect',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        
         'ImageAnimation' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ImageAnimation',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
      
      
      
      
         '3DGameCartoon' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => '3DGameCartoon',
                    'Version' => '2020-08-26',
                ],
            ],
        ],  
      
      
         'EmoticonEdit' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EmoticonEdit',
                    'Version' => '2020-08-26',
                ],
            ],
        ],  
       'AllAgeGeneration' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'AllAgeGeneration',
                    'Version' => '2022-08-31',
                ],
            ],
        ],    
        
        'FaceSwap' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'FaceSwap',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'HumanSegment' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'HumanSegment',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'GeneralSegment' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'GeneralSegment',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'EnhancePhoto' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'EnhancePhoto',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'ConvertPhoto' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'ConvertPhoto',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'OCRNormal' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'OCRNormal',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'IDCard' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'IDCard',
                    'Version' => '2020-08-26',
                ],
            ],
        ],
        'BankCard' => [
            'url' => '/',
            'method' => 'post',
            'config' => [
                'query' => [
                    'Action' => 'BankCard',
                    'Version' => '2020-08-26',
                ],
            ],
        ],

    ];
}
