<?php

class ExceptionsTest extends \PHPUnit_Framework_TestCase {

    /**
     * @expectedException        Comodojo\Exception\CacheException
     */
    public function testCacheException() {

        throw new \Comodojo\Exception\CacheException("Test Exception", 1);

    }

    /**
     * @expectedException        Comodojo\Exception\CookieException
     */
    public function testCookieException() {

        throw new \Comodojo\Exception\CookieException("Test Exception", 1);

    }

    /**
     * @expectedException        Comodojo\Exception\DatabaseException
     */
    public function testDatabaseException() {

        throw new \Comodojo\Exception\DatabaseException("Test Exception", 1);

    }

    /**
     * @expectedException        Comodojo\Exception\HttpException
     */
    public function testHttpException() {

        throw new \Comodojo\Exception\HttpException("Test Exception", 1);

    }

    /**
     * @expectedException        Comodojo\Exception\LdaphException
     */
    public function testLdaphException() {

        throw new \Comodojo\Exception\LdaphException("Test Exception", 1);

    }

    /**
     * @expectedException        Comodojo\Exception\MetaWeblogException
     */
    public function testMetaWeblogException() {

        throw new \Comodojo\Exception\MetaWeblogException("Test Exception", 1);

    }

    /**
     * @expectedException        Comodojo\Exception\RpcException
     */
    public function testRpcException() {

        throw new \Comodojo\Exception\RpcException("Test Exception", 1);

    }

    /**
     * @expectedException        Comodojo\Exception\WPException
     */
    public function testWPException() {

        throw new \Comodojo\Exception\WPException("Test Exception", 1);

    }

    /**
     * @expectedException        Comodojo\Exception\XmlrpcException
     */
    public function testXmlrpcException() {

        throw new \Comodojo\Exception\XmlrpcException("Test Exception", 1);

    }

    /**
     * @expectedException        Comodojo\Exception\ZipException
     */
    public function testZipException() {

        throw new \Comodojo\Exception\ZipException("Test Exception", 1);

    }

}