<?php

namespace Tests\Feature;

use PHPUnit\Framework\TestCase;
use WesleySAraujo\SolidPhp\SofSolid\GoodClassSite;

class GoodClassSiteTest extends TestCase
{
    public function testGoodClassSite()
    {
        $site = new GoodClassSite(
            'http://example.com',
            'example.com',
            'Example',
            'http://example.com/image/logo.png');

        $this->assertInstanceOf(GoodClassSite::class, $site);
    }

    public function testGetUrl()
    {
        $site = new GoodClassSite(
            'http://example.com',
            'example.com',
            'Example',
            'http://example.com/image/logo.png');

        $this->assertEquals('http://example.com', $site->getUrl());
    }

    public function testGetDescription()
    {
        $site = new GoodClassSite(
            'http://example.com',
            'example.com',
            'Example',
            'http://example.com/image/logo.png');

        $this->assertEquals('Example', $site->getDescription());
    }

    public function testGetImage()
    {
        $site = new GoodClassSite(
            'http://example.com',
            'example.com',
            'Example',
            'http://example.com/image/logo.png');

        $this->assertEquals('http://example.com/image/logo.png', $site->getPathLogo());
    }

    public function testGetData()
    {
        $site = new GoodClassSite(
            'http://example.com',
            'example.com',
            'Example',
            'http://example.com/image/logo.png');

        $this->assertEquals(
            [
                'url' => 'http://example.com',
                'title' => 'example.com',
                'description' => 'Example',
                'path_logo' => 'http://example.com/image/logo.png'
            ],
            $site->getData()
        );
    }
}