<?php
return array(
    'router' => array(
        'routes' => array(
            'empregado-ldap.rest.empregado-ldap-rest' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/empregado-ldap-rest[/:empregado_ldap_rest_id]',
                    'defaults' => array(
                        'controller' => 'EmpregadoLdap\\V1\\Rest\\EmpregadoLdapRest\\Controller',
                    ),
                ),
            ),
            'empregado-ldap.rest.empregado-ldap' => array(
                'type' => 'Segment',
                'options' => array(
                    'route' => '/empregado_ldap[/:empregado_ldap_id]',
                    'defaults' => array(
                        'controller' => 'EmpregadoLdap\\V1\\Rest\\EmpregadoLdap\\Controller',
                    ),
                ),
            ),
        ),
    ),
    'zf-versioning' => array(
        'uri' => array(
            0 => 'empregado-ldap.rest.empregado-ldap-rest',
            1 => 'empregado-ldap.rest.empregado-ldap',
        ),
    ),
    'service_manager' => array(
        'factories' => array(
            'EmpregadoLdap\\V1\\Rest\\EmpregadoLdapRest\\EmpregadoLdapRestResource' => 'EmpregadoLdap\\V1\\Rest\\EmpregadoLdapRest\\EmpregadoLdapRestResourceFactory',
        ),
    ),
    'zf-rest' => array(
        'EmpregadoLdap\\V1\\Rest\\EmpregadoLdapRest\\Controller' => array(
            'listener' => 'EmpregadoLdap\\V1\\Rest\\EmpregadoLdapRest\\EmpregadoLdapRestResource',
            'route_name' => 'empregado-ldap.rest.empregado-ldap-rest',
            'route_identifier_name' => 'empregado_ldap_rest_id',
            'collection_name' => 'empregado_ldap_rest',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'EmpregadoLdap\\V1\\Rest\\EmpregadoLdapRest\\EmpregadoLdapRestEntity',
            'collection_class' => 'EmpregadoLdap\\V1\\Rest\\EmpregadoLdapRest\\EmpregadoLdapRestCollection',
            'service_name' => 'EmpregadoLdapRest',
        ),
        'EmpregadoLdap\\V1\\Rest\\EmpregadoLdap\\Controller' => array(
            'listener' => 'EmpregadoLdap\\V1\\Rest\\EmpregadoLdap\\EmpregadoLdapResource',
            'route_name' => 'empregado-ldap.rest.empregado-ldap',
            'route_identifier_name' => 'empregado_ldap_id',
            'collection_name' => 'empregado_ldap',
            'entity_http_methods' => array(
                0 => 'GET',
                1 => 'PATCH',
                2 => 'PUT',
                3 => 'DELETE',
            ),
            'collection_http_methods' => array(
                0 => 'GET',
                1 => 'POST',
            ),
            'collection_query_whitelist' => array(),
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => 'EmpregadoLdap\\V1\\Rest\\EmpregadoLdap\\EmpregadoLdapEntity',
            'collection_class' => 'EmpregadoLdap\\V1\\Rest\\EmpregadoLdap\\EmpregadoLdapCollection',
            'service_name' => 'empregado_ldap',
        ),
    ),
    'zf-content-negotiation' => array(
        'controllers' => array(
            'EmpregadoLdap\\V1\\Rest\\EmpregadoLdapRest\\Controller' => 'HalJson',
            'EmpregadoLdap\\V1\\Rest\\EmpregadoLdap\\Controller' => 'HalJson',
        ),
        'accept_whitelist' => array(
            'EmpregadoLdap\\V1\\Rest\\EmpregadoLdapRest\\Controller' => array(
                0 => 'application/vnd.empregado-ldap.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
            'EmpregadoLdap\\V1\\Rest\\EmpregadoLdap\\Controller' => array(
                0 => 'application/vnd.empregado-ldap.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ),
        ),
        'content_type_whitelist' => array(
            'EmpregadoLdap\\V1\\Rest\\EmpregadoLdapRest\\Controller' => array(
                0 => 'application/vnd.empregado-ldap.v1+json',
                1 => 'application/json',
            ),
            'EmpregadoLdap\\V1\\Rest\\EmpregadoLdap\\Controller' => array(
                0 => 'application/vnd.empregado-ldap.v1+json',
                1 => 'application/json',
            ),
        ),
    ),
    'zf-hal' => array(
        'metadata_map' => array(
            'EmpregadoLdap\\V1\\Rest\\EmpregadoLdapRest\\EmpregadoLdapRestEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'empregado-ldap.rest.empregado-ldap-rest',
                'route_identifier_name' => 'empregado_ldap_rest_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'EmpregadoLdap\\V1\\Rest\\EmpregadoLdapRest\\EmpregadoLdapRestCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'empregado-ldap.rest.empregado-ldap-rest',
                'route_identifier_name' => 'empregado_ldap_rest_id',
                'is_collection' => true,
            ),
            'EmpregadoLdap\\V1\\Rest\\EmpregadoLdap\\EmpregadoLdapEntity' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'empregado-ldap.rest.empregado-ldap',
                'route_identifier_name' => 'empregado_ldap_id',
                'hydrator' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
            ),
            'EmpregadoLdap\\V1\\Rest\\EmpregadoLdap\\EmpregadoLdapCollection' => array(
                'entity_identifier_name' => 'id',
                'route_name' => 'empregado-ldap.rest.empregado-ldap',
                'route_identifier_name' => 'empregado_ldap_id',
                'is_collection' => true,
            ),
        ),
    ),
    'zf-apigility' => array(
        'db-connected' => array(
            'EmpregadoLdap\\V1\\Rest\\EmpregadoLdap\\EmpregadoLdapResource' => array(
                'adapter_name' => 'pg_local_conn',
                'table_name' => 'empregado_ldap',
                'hydrator_name' => 'Zend\\Stdlib\\Hydrator\\ArraySerializable',
                'controller_service_name' => 'EmpregadoLdap\\V1\\Rest\\EmpregadoLdap\\Controller',
                'entity_identifier_name' => 'id',
            ),
        ),
    ),
);
