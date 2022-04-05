<?php

namespace Tests\Feature\LofSolid;

use PHPUnit\Framework\TestCase;
use WesleySAraujo\SolidPhp\LofSolid\GoodExample\PageMakeHtml;
use WesleySAraujo\SolidPhp\LofSolid\GoodExample\PageMakeMarkdown;

class GoodPageMakeTest extends TestCase
{
    /**
     * Observe como o objeto $page é construído usando a classe PageMakeHtml
     *
     * @test
     */
    public function testPageMakeHtml()
    {
        $page = new PageMakeHtml('Home', 'Welcome to my website');
        $page->make();

        $this->assertEquals(
            '<html>
                        <head>
                            <title>Home</title>
                        </head>
                        <body>Welcome to my website</body>
                       </html>',
            $page->getPage()
        );
    }

    /**
     * Agora nesse teste, observe que o objeto $page é construído usando a classe PageMakeMarkdown da mesma forma que é
     * feito no teste anterior.
     *
     * @return void
     */
    public function testPageMakeMarkdown()
    {
        $page = new PageMakeMarkdown('Home', 'Welcome to my website');
        $page->make();

        $this->assertEquals("## Home\n\nWelcome to my website", $page->getPage());
    }
}
