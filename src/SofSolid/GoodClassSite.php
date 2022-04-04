<?php

namespace WesleySAraujo\SolidPhp\SofSolid;

/**
 * Class GoodClassSite
 * @description Classe responsável apenas por exibir o site e seus atributos, ela não tem nenhum outro método que não
 * seja métodos responsáveis em gerenciar as propriedades da entidade GoodClassSite.
 *
 * @package WesleySAraujo\SolidPhp\SofSolid
 * @author Wesley S Araujo <wsadesigner@gmail.com>
 * @attribute-read string $url
 * @attribute-read string $name
 * @attribute-read string $description
 */
class GoodClassSite
{
    /**
     * @var string $url
     */
    private string $url;

    /**
     * @var string $logo
     */
    private string $pathLogo;

    /**
     * @var string $title
     */
    private string $title;

    /**
     * @var string $description
     */
    private string $description;

    public function __construct(string $url, string $title, string $description = "", string $pathLogo = "")
    {
        $this->url = $url;
        $this->title = $title;
        $this->description = $description;
        $this->pathLogo = $pathLogo;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return GoodClassSite
     */
    public function setUrl(string $url): GoodClassSite
    {
        $this->url = $url;

        return $this;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @param  string $title
     * @return GoodClassSite
     */
    public function setTitle(string $title): GoodClassSite
    {
        $this->title = $title;

        return $this;
    }

    /**
     * @return string $description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param  string $description
     * @return $this
     */
    public function setDescription(string $description): GoodClassSite
    {
        $this->description = $description;

        return $this;
    }

    /**
     * @return string $pathLogo
     */
    public function getPathLogo(): string
    {
        return $this->pathLogo;
    }

    /**
     * @param  string $pathLogo
     * @return GoodClassSite
     */
    public function setPathLogo(string $pathLogo): GoodClassSite
    {
        $this->pathLogo = $pathLogo;

        return $this;
    }

    /**
     * @return array
     */
    public function getData(): array
    {
        return [
            "url" => $this->getUrl(),
            "title" => $this->getTitle(),
            "description" => $this->getDescription(),
            "pathLogo" => $this->getPathLogo()
        ];
    }
}