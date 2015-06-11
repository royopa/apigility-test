<?php
namespace EmpregadoLdap\V1\Rest\EmpregadoLdapRest;

class EmpregadoLdapRestResourceFactory
{
    public function __invoke($services)
    {
        return new EmpregadoLdapRestResource();
    }
}
