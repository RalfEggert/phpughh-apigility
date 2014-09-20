<?php
return array(
    'router' => array(
        'routes' => array(
            'user.rest.users' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/users[/:users_id]',
                    'defaults' => array(
                        'controller' => 'User\\V1\\Rest\\Users\\Controller',
                    ),
                ),
            ),
            'user.rest.user-contacts' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user-contacts[/:user_contacts_id]',
                    'defaults' => array(
                        'controller' => 'User\\V2\\Rest\\UserContacts\\Controller',
                    ),
                ),
            ),
            'user.rest.user-profile' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/user-profile[/:user_id]',
                    'defaults' => array(
                        'controller' => 'User\\V2\\Rest\\UserProfile\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'user.rest.users',
            1 => 'user.rest.user-contacts',
            2 => 'user.rest.user-contacts',
            3 => 'user.rest.user-profile',
        ),
        'default_version' => 2,
    ),
    'zf-rest' => array(
        'User\\V1\\Rest\\Users\\Controller' => array(
            'listener' => 'User\\V1\\Rest\\Users\\UsersResource',
            'route_name' => 'user.rest.users',
            'route_identifier_name' => 'users_id',
            'collection_name' => 'users',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '10',
            'page_size_param' => null,
            'entity_class' => 'User\\V1\\Rest\\Users\\UsersEntity',
            'collection_class' => 'User\\V1\\Rest\\Users\\UsersCollection',
            'service_name' => 'users',
        ),
        'User\\V2\\Rest\\Users\\Controller' => array(
            'listener' => 'User\\V2\\Rest\\Users\\UsersResource',
            'route_name' => 'user.rest.users',
            'route_identifier_name' => 'users_id',
            'collection_name' => 'users',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => '10',
            'page_size_param' => '',
            'entity_class' => 'User\\V2\\Rest\\Users\\UsersEntity',
            'collection_class' => 'User\\V2\\Rest\\Users\\UsersCollection',
            'service_name' => 'users',
        ),
        'User\\V2\\Rest\\UserProfile\\Controller' => array(
            'listener' => 'User\\V2\\Rest\\UserProfile\\UserProfileResource',
            'route_name' => 'user.rest.user-profile',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'user_profile',
            'entity_http_methods' => array(
                0 => 'GET',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
            ),
            'collection_query_whitelist' => array(
                0 => 'user_id',
            ),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'User\\V2\\Rest\\UserProfile\\UserProfileEntity',
            'collection_class' => 'User\\V2\\Rest\\UserProfile\\UserProfileCollection',
            'service_name' => 'UserProfile',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'User\\V1\\Rest\\Users\\Controller' => 'HalJson',
            'User\\V2\\Rest\\Users\\Controller' => 'HalJson',
            'User\\V2\\Rest\\UserProfile\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'User\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'User\\V2\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v2+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'User\\V2\\Rest\\UserProfile\\Controller' => array(
                0 => 'application/vnd.user.v2+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'User\\V1\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v1+json',
                1 => 'application/json',
            ),
            'User\\V2\\Rest\\Users\\Controller' => array(
                0 => 'application/vnd.user.v2+json',
                1 => 'application/json',
            ),
            'User\\V2\\Rest\\UserProfile\\Controller' => array(
                0 => 'application/vnd.user.v2+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'User\\V1\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'User\\V1\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => true,
            ),
            'User\\V2\\Rest\\Users\\UsersEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.users',
                'route_identifier_name' => 'users_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'User\\V2\\Rest\\Users\\UsersCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.users',
                'route_identifier_name' => 'users_id',
                'is_collection' => '1',
            ),
            'User\\V2\\Rest\\UserProfile\\UserProfileEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.user-profile',
                'route_identifier_name' => 'user_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ClassMethods',
            ),
            'User\\V2\\Rest\\UserProfile\\UserProfileCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'user.rest.user-profile',
                'route_identifier_name' => 'user_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'User\\V1\\Rest\\Users\\UsersResource' => array(
                'adapter_name' => 'MysqlAdapter',
                'table_name' => 'users',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'User\\V1\\Rest\\Users\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'User\\V1\\Rest\\Users\\UsersResource\\Table',
            ),
            'User\\V2\\Rest\\Users\\UsersResource' => array(
                'adapter_name' => 'MysqlAdapter',
                'table_name' => 'users',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'User\\V2\\Rest\\Users\\Controller',
                'entity_identifier_name' => 'id',
                'table_service' => 'User\\V2\\Rest\\Users\\UsersResource\\Table',
            ),
        ),
    ),
    'zf-content-validation' => array(
        'User\\V1\\Rest\\Users\\Controller' => array(
            'input_filter' => 'User\\V1\\Rest\\Users\\Validator',
        ),
        'User\\V2\\Rest\\Users\\Controller' => array(
            'input_filter' => 'User\\V2\\Rest\\Users\\Validator',
        ),
        'User\\V2\\Rest\\UserProfile\\Controller' => array(
            'input_filter' => 'User\\V2\\Rest\\UserProfile\\Validator',
        ),
    ),
    'input_filter_specs' => array(
        'User\\V1\\Rest\\Users\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => false,
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\Int',
                        'options' => array(),
                    ),
                ),
                'description' => 'User identifier',
                'error_message' => 'The user identifier must be an integer value.',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
            1 => array(
                'name' => 'name',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '32',
                            'min' => '3',
                        ),
                    ),
                ),
                'description' => 'User name',
                'error_message' => 'The user name must be a string with a minimum of 3 and a maximum of 32 chars.',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
            2 => array(
                'name' => 'email',
                'required' => true,
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\EmailAddress',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '255',
                        ),
                    ),
                ),
                'description' => 'User email',
                'error_message' => 'The user email must be a valid email address.',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
        ),
        'User\\V2\\Rest\\Users\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => '',
                'filters' => array(),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\I18n\\Validator\\Int',
                        'options' => array(),
                    ),
                ),
                'description' => 'User identifier',
                'error_message' => 'The user identifier must be an integer value.',
                'allow_empty' => '',
                'continue_if_empty' => '',
            ),
            1 => array(
                'name' => 'name',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '32',
                            'min' => '3',
                        ),
                    ),
                ),
                'description' => 'User name',
                'error_message' => 'The user name must be a string with a minimum of 3 and a maximum of 32 chars.',
                'allow_empty' => '',
                'continue_if_empty' => '',
            ),
            2 => array(
                'name' => 'email',
                'required' => '1',
                'filters' => array(
                    0 => array(
                        'name' => 'Zend\\Filter\\StringTrim',
                        'options' => array(),
                    ),
                ),
                'validators' => array(
                    0 => array(
                        'name' => 'Zend\\Validator\\EmailAddress',
                        'options' => array(),
                    ),
                    1 => array(
                        'name' => 'Zend\\Validator\\StringLength',
                        'options' => array(
                            'max' => '255',
                        ),
                    ),
                ),
                'description' => 'User email',
                'error_message' => 'The user email must be a valid email address.',
                'allow_empty' => '',
                'continue_if_empty' => '',
            ),
        ),
        'User\\V2\\Rest\\UserProfile\\Validator' => array(
            0 => array(
                'name' => 'id',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'description' => 'User identifier',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
            1 => array(
                'name' => 'name',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'description' => 'User name',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
            2 => array(
                'name' => 'email',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'description' => 'User email',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
            3 => array(
                'name' => 'contacts',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'description' => 'User contacts',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
            4 => array(
                'name' => 'websites',
                'required' => false,
                'filters' => array(),
                'validators' => array(),
                'description' => 'User websites',
                'allow_empty' => false,
                'continue_if_empty' => false,
            ),
        ),
    ),
    'zf-mvc-auth' => array(
        'authorization' => array(
            'User\\V1\\Rest\\Users\\Controller' => array(
                'entity' => array(
                    'GET' => false,
                    'POST' => false,
                    'PATCH' => false,
                    'PUT' => true,
                    'DELETE' => true,
                ),
                'collection' => array(
                    'GET' => false,
                    'POST' => true,
                    'PATCH' => false,
                    'PUT' => false,
                    'DELETE' => false,
                ),
            ),
            'User\\V2\\Rest\\Users\\Controller' => array(
                'entity' => array(
                    'GET' => '',
                    'POST' => '',
                    'PATCH' => '',
                    'PUT' => '1',
                    'DELETE' => '1',
                ),
                'collection' => array(
                    'GET' => '',
                    'POST' => '1',
                    'PATCH' => '',
                    'PUT' => '',
                    'DELETE' => '',
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'User\\V2\\Rest\\UserProfile\\UserProfileResource' => 'User\\V2\\Rest\\UserProfile\\UserProfileResourceFactory',
            'User\\V2\\Rest\\UserProfile\\Table\\UserTable' => 'User\\V2\\Rest\\UserProfile\\Table\\UserTableFactory',
            'User\\V2\\Rest\\UserProfile\\Table\\WebsiteTable' => 'User\\V2\\Rest\\UserProfile\\Table\\WebsiteTableFactory',
        ),
    ),
);
