<?php

namespace WesleySAraujo\SolidPhp\SofSolid;

/**
 * Class BadClassSite
 * @description: Exemplo ruim de classe, pois não segue o princípio de responsabilidade única, ou seja, a entitdade
 * BadClassSite não lida somente com os atributos e métodos da classe,
 * mas também com os atributos e métodos da classe de serviço, que são os métodos relacionados a Html.
 * @package WesleySAraujo\SolidPhp\SofSolid
 */
class BadClassSite
{
    /**
     * @var string $url
     */
    private string $url;

    /**
     * @var string $title
     */
    private string $title;

    /**
     * @var string $description
     */
    private string $description;

    public function __construct(string $url, string $title, string $description)
    {
        $this->url = $url;
        $this->title = $title;
        $this->description = $description;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return BadClassSite
     */
    public function setDescription(string $description): BadClassSite
    {
        $this->description = $description;

        return $this;
    }

    public function getHtmlLink(): string
    {
        return "<a href='{$this->url}'>{$this->title}</a>";
    }

    public function getHtmlDescription(): string
    {
        return "<p>{$this->description}</p>";
    }

    public function getHtml(): string
    {
        return $this->getHtmlLink() . $this->getHtmlDescription();
    }

    public function getHtmlDescriptionWithLink(): string
    {
        return "<p><a href='{$this->url}'>{$this->title}</a> {$this->description}</p>";
    }
}