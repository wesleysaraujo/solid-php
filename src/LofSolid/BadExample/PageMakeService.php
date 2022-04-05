<?php

namespace WesleySAraujo\SolidPhp\LofSolid\BadExample;

class PageMakeService
{
    /**
     * Esse método gera uma página HTML a partir do método makeHtml do PageMakeHtml que herda o método do PageTemplateMake
     * Até aqui tudo bem!
     *
     * @param string $content
     * @param string $pageName
     * @return string
     */
    public function makeHtml(string $content, string $pageName): string
    {
        $html = new PageMakeHtml($content, $pageName);
        $html->makeHtml();

        return $html->getPage();
    }

    /**
     * Já nesse método, o objeto $markdown é uma instância de PageMakeMarkdown que embora também seja filho do PageTemplateMake,
     * não herda o método makeMarkdown, pelo contrário, o método PageMakeMarkdown é do tipo PageMakeTemplate, porém com comportamento diferente.
     * O princício da substituição de liskov dita que um objeto pode susbstituir sua classe por outra do mesmo tipo sem perder a característica de funcionamento.
     * Esse exemplo quebra totalmente esse princícpio, até o tipo de retorno é totalmente diferente.
     *
     * @param string $content
     * @param string $pageName
     * @return string
     */
    public function makeMarkdown(string $content, string $pageName): string
    {

        $markdown = new PageMakeMarkdown($content, $pageName);
        return $markdown->makeMarkdown();
    }
}