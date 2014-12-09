<?php

namespace LeagueTest;

use League\OAuth2\Server\OpenIdConnect;

/**
 * Description of OpenIdConnectTest
 *
 * @author aevangelista
 */
class OpenIdConnectTest extends \PHPUnit_Framework_TestCase
{
    public function testClassInstance()
    {
        $object = new OpenIdConnect();

        $this->assertTrue($object instanceof OpenIdConnect);
    }
}
