<?php

namespace Tests\Feature\LofSolid;

use PHPUnit\Framework\TestCase;
use WesleySAraujo\SolidPhp\LofSolid\BadExample\PageMakeHtml;
use WesleySAraujo\SolidPhp\LofSolid\BadExample\PageMakeMarkdown;

class BadPageMakeTest extends TestCase
{
    /**
     * Observe como o objeto $page é construído usando a classe PageMakeHtml, o conteúdo da página é
     * gerado através do método
     * makeHtml().
     *
     * @test
     */
    public function testPageMakeHtml()
    {
        $page = new PageMakeHtml('Welcome to my website', 'Home');
        $page->makeHtml();

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
     * Já no momento de construir o objeto $page do tipo markDown, objserve que o comportamento da classe
     * é totalmente diferente. O conteúddo do objeto não é resgatador através do método getPage() e sim no
     * método makeMarkdown().
     * Esse exemplo ruim, além de ferir o princípio da substituição de Liskov, ele também fere o princípio Open/Closed,
     * pois a classe BadExample/PageMakeMarkdown embora extenda PageTemplateMake ela modifica seu comportamento
     * ao adicionar o método makeMarkdown().
     *
     * @return void
     */
    public function testPageMakeMarkdown()
    {
        $page = new PageMakeMarkdown('Welcome to my website', 'Home');

        $this->assertEquals("## Home\n\nWelcome to my website", $page->makeMarkdown());
    }
}
