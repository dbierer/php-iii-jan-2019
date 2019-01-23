<?php
return [
    'router' => [
        'routes' => [
            'user-api.rest.user' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/user[/:user_id]',
                    'defaults' => [
                        'controller' => 'UserAPI\\V1\\Rest\\User\\Controller',
                    ],
                ],
            ],
            'user-api.rest.user-profile' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/user_profile[/:user_profile_id]',
                    'defaults' => [
                        'controller' => 'UserAPI\\V1\\Rest\\UserProfile\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'zf-versioning' => [
        'uri' => [
            0 => 'user-api.rest.user',
            1 => 'user-api.rest.user-profile',
        ],
        'default_version' => 1,
    ],
    'zf-rest' => [
        'UserAPI\\V1\\Rest\\User\\Controller' => [
            'listener' => 'UserAPI\\V1\\Rest\\User\\UserResource',
            'route_name' => 'user-api.rest.user',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'user',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \UserAPI\V1\Rest\User\UserEntity::class,
            'collection_class' => \UserAPI\V1\Rest\User\UserCollection::class,
            'service_name' => 'user',
        ],
        'UserAPI\\V1\\Rest\\UserProfile\\Controller' => [
            'listener' => 'UserAPI\\V1\\Rest\\UserProfile\\UserProfileResource',
            'route_name' => 'user-api.rest.user-profile',
            'route_identifier_name' => 'user_profile_id',
            'collection_name' => 'user_profile',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \UserAPI\V1\Rest\UserProfile\UserProfileEntity::class,
            'collection_class' => \UserAPI\V1\Rest\UserProfile\UserProfileCollection::class,
            'service_name' => 'user_profile',
        ],
        'UserAPI\\V2\\Rest\\User\\Controller' => [
            'listener' => 'UserAPI\\V2\\Rest\\User\\UserResource',
            'route_name' => 'user-api.rest.user',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'user',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => \UserAPI\V2\Rest\User\UserEntity::class,
            'collection_class' => \UserAPI\V2\Rest\User\UserCollection::class,
            'service_name' => 'user',
        ],
        'UserAPI\\V2\\Rest\\UserProfile\\Controller' => [
            'listener' => 'UserAPI\\V2\\Rest\\UserProfile\\UserProfileResource',
            'route_name' => 'user-api.rest.user-profile',
            'route_identifier_name' => 'user_profile_id',
            'collection_name' => 'user_profile',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => '25',
            'page_size_param' => '',
            'entity_class' => \UserAPI\V2\Rest\UserProfile\UserProfileEntity::class,
            'collection_class' => \UserAPI\V2\Rest\UserProfile\UserProfileCollection::class,
            'service_name' => 'user_profile',
        ],
    ],
    'zf-content-negotiation' => [
        'controllers' => [
            'UserAPI\\V1\\Rest\\User\\Controller' => 'HalJson',
            'UserAPI\\V1\\Rest\\UserProfile\\Controller' => 'HalJson',
            'UserAPI\\V2\\Rest\\User\\Controller' => 'HalJson',
            'UserAPI\\V2\\Rest\\UserProfile\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'UserAPI\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.user-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'UserAPI\\V1\\Rest\\UserProfile\\Controller' => [
                0 => 'application/vnd.user-api.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'UserAPI\\V2\\Rest\\User\\Controller' => [
                0 => 'application/vnd.user-api.v2+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'UserAPI\\V2\\Rest\\UserProfile\\Controller' => [
                0 => 'application/vnd.user-api.v2+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'UserAPI\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.user-api.v1+json',
                1 => 'application/json',
            ],
            'UserAPI\\V1\\Rest\\UserProfile\\Controller' => [
                0 => 'application/vnd.user-api.v1+json',
                1 => 'application/json',
            ],
            'UserAPI\\V2\\Rest\\User\\Controller' => [
                0 => 'application/vnd.user-api.v2+json',
                1 => 'application/json',
            ],
            'UserAPI\\V2\\Rest\\UserProfile\\Controller' => [
                0 => 'application/vnd.user-api.v2+json',
                1 => 'application/json',
            ],
        ],
    ],
    'zf-hal' => [
        'metadata_map' => [
            \UserAPI\V1\Rest\User\UserEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'user-api.rest.user',
                'route_identifier_name' => 'user_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \UserAPI\V1\Rest\User\UserCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'user-api.rest.user',
                'route_identifier_name' => 'user_id',
                'is_collection' => true,
            ],
            \UserAPI\V1\Rest\UserProfile\UserProfileEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'user-api.rest.user-profile',
                'route_identifier_name' => 'user_profile_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \UserAPI\V1\Rest\UserProfile\UserProfileCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'user-api.rest.user-profile',
                'route_identifier_name' => 'user_profile_id',
                'is_collection' => true,
            ],
            \UserAPI\V2\Rest\User\UserEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'user-api.rest.user',
                'route_identifier_name' => 'user_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \UserAPI\V2\Rest\User\UserCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'user-api.rest.user',
                'route_identifier_name' => 'user_id',
                'is_collection' => '1',
            ],
            \UserAPI\V2\Rest\UserProfile\UserProfileEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'user-api.rest.user-profile',
                'route_identifier_name' => 'user_profile_id',
                'hydrator' => \Zend\Hydrator\ArraySerializable::class,
            ],
            \UserAPI\V2\Rest\UserProfile\UserProfileCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'user-api.rest.user-profile',
                'route_identifier_name' => 'user_profile_id',
                'is_collection' => '1',
            ],
        ],
    ],
    'zf-apigility' => [
        'db-connected' => [
            'UserAPI\\V1\\Rest\\User\\UserResource' => [
                'adapter_name' => 'localhost_mysql',
                'table_name' => 'user',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'UserAPI\\V1\\Rest\\User\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'UserAPI\\V1\\Rest\\User\\UserResource\\Table',
            ],
            'UserAPI\\V1\\Rest\\UserProfile\\UserProfileResource' => [
                'adapter_name' => 'localhost_mysql',
                'table_name' => 'user_profile',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'UserAPI\\V1\\Rest\\UserProfile\\Controller',
                'entity_identifier_name' => 'id',
            ],
            'UserAPI\\V2\\Rest\\User\\UserResource' => [
                'adapter_name' => 'localhost_mysql',
                'table_name' => 'user',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'UserAPI\\V2\\Rest\\User\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'UserAPI\\V2\\Rest\\User\\UserResource\\Table',
            ],
            'UserAPI\\V2\\Rest\\UserProfile\\UserProfileResource' => [
                'adapter_name' => 'localhost_mysql',
                'table_name' => 'user_profile',
                'hydrator_name' => \Zend\Hydrator\ArraySerializable::class,
                'controller_service_name' => 'UserAPI\\V2\\Rest\\UserProfile\\Controller',
                'entity_identifier_name' => 'id',
            ],
        ],
    ],
    'zf-content-validation' => [
        'UserAPI\\V1\\Rest\\User\\Controller' => [
            'input_filter' => 'UserAPI\\V1\\Rest\\User\\Validator',
        ],
        'UserAPI\\V1\\Rest\\UserProfile\\Controller' => [
            'input_filter' => 'UserAPI\\V1\\Rest\\UserProfile\\Validator',
        ],
        'UserAPI\\V2\\Rest\\User\\Controller' => [
            'input_filter' => 'UserAPI\\V2\\Rest\\User\\Validator',
        ],
        'UserAPI\\V2\\Rest\\UserProfile\\Controller' => [
            'input_filter' => 'UserAPI\\V2\\Rest\\UserProfile\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'UserAPI\\V1\\Rest\\User\\Validator' => [
            0 => [
                'name' => 'username',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => [
                            'adapter' => 'localhost_mysql',
                            'table' => 'user',
                            'field' => 'username',
                        ],
                    ],
                    1 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '32',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'auth_key',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '32',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'access_token',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '40',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'password_hash',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'oauth_client',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'oauth_client_user_id',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            6 => [
                'name' => 'email',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            7 => [
                'name' => 'registration_ip',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '50',
                        ],
                    ],
                ],
            ],
            8 => [
                'name' => 'status',
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            9 => [
                'name' => 'created_at',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            10 => [
                'name' => 'updated_at',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            11 => [
                'name' => 'logged_at',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            12 => [
                'name' => 'confirmation_token',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '50',
                        ],
                    ],
                ],
            ],
            13 => [
                'name' => 'confirmation_sent_at',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            14 => [
                'name' => 'confirmed_at',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            15 => [
                'name' => 'unconfirmed_email',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            16 => [
                'name' => 'recovery_token',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '32',
                        ],
                    ],
                ],
            ],
            17 => [
                'name' => 'recovery_sent_at',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            18 => [
                'name' => 'blocked_at',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            19 => [
                'name' => 'registered_from',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            20 => [
                'name' => 'logged_in_from',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
        ],
        'UserAPI\\V1\\Rest\\UserProfile\\Validator' => [
            0 => [
                'name' => 'firstname',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'middlename',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'lastname',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'avatar_path',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'avatar_base_url',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => \locale::class,
                'required' => true,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => 1,
                            'max' => '32',
                        ],
                    ],
                ],
            ],
            6 => [
                'name' => 'gender',
                'required' => false,
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
        ],
        'UserAPI\\V2\\Rest\\User\\Validator' => [
            0 => [
                'name' => 'username',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => 'ZF\\ContentValidation\\Validator\\DbNoRecordExists',
                        'options' => [
                            'adapter' => 'localhost_mysql',
                            'table' => 'user',
                            'field' => 'username',
                        ],
                    ],
                    1 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '32',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'auth_key',
                'required' => '1',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '32',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'access_token',
                'required' => '1',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '40',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'password_hash',
                'required' => '1',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'oauth_client',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => 'oauth_client_user_id',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            6 => [
                'name' => 'email',
                'required' => '1',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            7 => [
                'name' => 'registration_ip',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '50',
                        ],
                    ],
                ],
            ],
            8 => [
                'name' => 'status',
                'required' => '1',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            9 => [
                'name' => 'created_at',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            10 => [
                'name' => 'updated_at',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            11 => [
                'name' => 'logged_at',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            12 => [
                'name' => 'confirmation_token',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '50',
                        ],
                    ],
                ],
            ],
            13 => [
                'name' => 'confirmation_sent_at',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            14 => [
                'name' => 'confirmed_at',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            15 => [
                'name' => 'unconfirmed_email',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            16 => [
                'name' => 'recovery_token',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '32',
                        ],
                    ],
                ],
            ],
            17 => [
                'name' => 'recovery_sent_at',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            18 => [
                'name' => 'blocked_at',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            19 => [
                'name' => 'registered_from',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
            20 => [
                'name' => 'logged_in_from',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
        ],
        'UserAPI\\V2\\Rest\\UserProfile\\Validator' => [
            0 => [
                'name' => 'firstname',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            1 => [
                'name' => 'middlename',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            2 => [
                'name' => 'lastname',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            3 => [
                'name' => 'avatar_path',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            4 => [
                'name' => 'avatar_base_url',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '255',
                        ],
                    ],
                ],
            ],
            5 => [
                'name' => \locale::class,
                'required' => '1',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StringTrim::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                ],
                'validators' => [
                    0 => [
                        'name' => \Zend\Validator\StringLength::class,
                        'options' => [
                            'min' => '1',
                            'max' => '32',
                        ],
                    ],
                ],
            ],
            6 => [
                'name' => 'gender',
                'required' => '',
                'filters' => [
                    0 => [
                        'name' => \Zend\Filter\StripTags::class,
                    ],
                    1 => [
                        'name' => \Zend\Filter\Digits::class,
                    ],
                ],
                'validators' => [],
            ],
        ],
    ],
];
