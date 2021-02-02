<?php declare(strict_types=1);

use \PHPUnit\Framework\TestCase;

class ExceptionsTest extends TestCase
{

    public function testCacheException()
    {
        $this->expectException("\Comodojo\Exception\CacheException");
        throw new \Comodojo\Exception\CacheException("Test Exception", 1);
    }

    public function testCookieException()
    {
        $this->expectException("\Comodojo\Exception\CookieException");
        throw new \Comodojo\Exception\CookieException("Test Exception", 1);
    }

    public function testDatabaseException()
    {
        $this->expectException("\Comodojo\Exception\DatabaseException");
        throw new \Comodojo\Exception\DatabaseException("Test Exception", 1);
    }

    public function testDispatcherException()
    {
        $this->expectException("\Comodojo\Exception\DispatcherException");
        throw new \Comodojo\Exception\DispatcherException("Test Exception", 1, null);
        try{
            throw new \Comodojo\Exception\DispatcherException("Test Exception", 1, null, $status, $headers);
        } catch (\Comodojo\Exception\DispatcherException $e) {
            $this->assertNull($e->getStatus());
            $this->assertEmpty($e->getHeaders());
            throw $e;
        }
    }

    public function testDispatcherExceptionCustomAttributes()
    {
        $headers = ["Allow" => "GET,PUT"];
        $status = 503;
        $this->expectException("\Comodojo\Exception\DispatcherException");
        try{
            throw new \Comodojo\Exception\DispatcherException("Test Exception", 1, null, $status, $headers);
        } catch (\Comodojo\Exception\DispatcherException $e) {
            $this->assertEquals($status, $e->getStatus());
            $this->assertEquals($headers, $e->getHeaders());
            throw $e;
        }
    }

    public function testHttpException()
    {
        $this->expectException("\Comodojo\Exception\HttpException");
        throw new \Comodojo\Exception\HttpException("Test Exception", 1);
    }

    public function testIOException()
    {
        $this->expectException("\Comodojo\Exception\IOException");
        throw new \Comodojo\Exception\IOException("Test Exception", 1);
    }

    public function testLdaphException()
    {
        $this->expectException("\Comodojo\Exception\LdaphException");
        throw new \Comodojo\Exception\LdaphException("Test Exception", 1);
    }

    public function testMetaWeblogException()
    {
        $this->expectException("\Comodojo\Exception\MetaWeblogException");
        throw new \Comodojo\Exception\MetaWeblogException("Test Exception", 1);
    }

    public function testRpcException()
    {
        $this->expectException("\Comodojo\Exception\RpcException");
        throw new \Comodojo\Exception\RpcException("Test Exception", 1);
    }

    public function testShellException()
    {
        $this->expectException("\Comodojo\Exception\ShellException");
        throw new \Comodojo\Exception\ShellException("Test Exception", 1);
    }

    public function testTaskException()
    {
        $current_timestamp = microtime(true);
        $this->expectException("\Comodojo\Exception\TaskException");
        try{
            throw new \Comodojo\Exception\TaskException("Test Exception", 1, null);
        } catch (\Comodojo\Exception\TaskException $e) {
            $this->assertGreaterThan($current_timestamp, $e->getEndTimestamp());
            $this->assertNull($e->getWorklogId());
            throw $e;
        }
    }

    public function testTaskExceptionCustomAttributes()
    {
        $wid = 42;
        $current_timestamp = microtime(true);
        $this->expectException("\Comodojo\Exception\TaskException");
        try{
            throw new \Comodojo\Exception\TaskException("Test Exception", 1, null, $wid);
        } catch (\Comodojo\Exception\TaskException $e) {
            $this->assertGreaterThan($current_timestamp, $e->getEndTimestamp());
            $this->assertEquals($wid, $e->getWorklogId());
            throw $e;
        }
    }

    public function testWPException()
    {
        $this->expectException("\Comodojo\Exception\WPException");
        throw new \Comodojo\Exception\WPException("Test Exception", 1);
    }

    public function testXMLException()
    {
        $this->expectException("\Comodojo\Exception\XMLException");
        throw new \Comodojo\Exception\XMLException("Test Exception", 1);
    }

    public function testXmlrpcException()
    {
        $this->expectException("\Comodojo\Exception\XmlrpcException");
        throw new \Comodojo\Exception\XmlrpcException("Test Exception", 1);
    }

    public function testZipException()
    {
        $this->expectException("\Comodojo\Exception\ZipException");
        throw new \Comodojo\Exception\ZipException("Test Exception", 1);
    }

    public function testComposerRetryException()
    {
        $this->expectException("\Comodojo\Exception\ComposerRetryException");
        throw new \Comodojo\Exception\ComposerRetryException("Test Exception", 1);
    }

    public function testComposerEventException()
    {
        $this->expectException("\Comodojo\Exception\ComposerEventException");
        throw new \Comodojo\Exception\ComposerEventException("Test Exception", 1);
    }

    public function testAuthenticationException()
    {
        $this->expectException("\Comodojo\Exception\AuthenticationException");
        throw new \Comodojo\Exception\AuthenticationException("Test Exception", 1);
    }

    public function testConfigurationException()
    {
        $this->expectException("\Comodojo\Exception\ConfigurationException");
        throw new \Comodojo\Exception\ConfigurationException("Test Exception", 1);
    }

    public function testInstallerException()
    {
        $this->expectException("\Comodojo\Exception\InstallerException");
        throw new \Comodojo\Exception\InstallerException("Test Exception", 1);
    }

    public function testInvalidCacheArgumentException()
    {
        $this->expectException("\Comodojo\Exception\InvalidCacheArgumentException");
        throw new \Comodojo\Exception\InvalidCacheArgumentException("Test Exception", 1);
    }

    public function testSimpleCacheException()
    {
        $this->expectException("\Comodojo\Exception\SimpleCacheException");
        throw new \Comodojo\Exception\SimpleCacheException("Test Exception", 1);
    }

    public function testInvalidSimpleCacheArgumentException()
    {
        $this->expectException("\Comodojo\Exception\InvalidSimpleCacheArgumentException");
        throw new \Comodojo\Exception\InvalidSimpleCacheArgumentException("Test Exception", 1);
    }
}
