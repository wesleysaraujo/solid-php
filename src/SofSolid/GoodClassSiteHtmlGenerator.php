<?php

namespace WesleySAraujo\SolidPhp\SofSolid;

/**
 * Class GoodClassSiteHtmlGenerator
 * @description Classe responsável por gerar o HTML de uma página de um site, para contornar o problema de amontoados que
 * não são pertinentes para a classe GoodClassSite, essa classe recebe um objeto GoodClassSite e gera as tags
 * HTML necessárias através dos seus métodos.
 * @package WesleySAraujo\SolidPhp\SofSolid
 * @author Wesley S Araujo <wsadesigner@gmail.com>
 */
class GoodClassSiteHtmlGenerator
{
    /**
     * @var GoodClassSite $site
     */
    private GoodClassSite $site;

    public function __construct(GoodClassSite $site)
    {
        $this->site = $site;
    }

    /**
     * @return string
     */
    public function getHtmlUrlLink(): string
    {
        return "<a href='{$this->site->getUrl()}'>{$this->site->getTitle()}</a>";
    }

    /**
     * @return string
     */
    public function getHtmlDescription(): string
    {
        return "<p>{$this->site->getDescription()}</p>";
    }

    /**
     * @return string
     */
    public function getHtml(): string
    {
        return $this->getHtmlUrlLink() . $this->getHtmlDescription();
    }
}