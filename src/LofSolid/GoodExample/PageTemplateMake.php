<?php

namespace WesleySAraujo\SolidPhp\LofSolid\GoodExample;

abstract class PageTemplateMake
{
    protected string $page;

    protected string $pageContent;

    protected string $pageTitle;

    protected string $pageType;

    public function __construct($pageTitle, $pageContent)
    {
        $this->pageTitle = $pageTitle;
        $this->pageContent = $pageContent;
    }

    abstract public function make(): void;

    public function getPage(): string
    {
        return $this->page;
    }
}