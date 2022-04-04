<?php

namespace WesleySAraujo\SolidPhp\OofSolid\GoodExample;

use WesleySAraujo\SolidPhp\OofSolid\GoodExample\Contracts\SiteMakePageInterface;

abstract class AbastractSiteMakePage implements SiteMakePageInterface
{
    protected string $pageName;

    protected string $pageContent;

    protected string $page;

    public function __construct(string $pageName, string $pageContent)
    {
        $this->pageName = $pageName;
        $this->pageContent = $pageContent;
    }

    final public function makePage(): void
    {
        $header = $this->setHeader($this->pageName);
        $content = $this->setContent($this->pageContent);
        $footer = $this->setFooter();

        $this->page = $header . $content . $footer;
    }

    public function setHeader(string $title): string
    {
        return "<doctype html>
            <html>
            <head>
                <title>$title</title>
            </head>
            <body>";
    }

    public function setFooter(): string
    {
        return "</body>
            </html>";
    }

    public function setContent(string $content): string
    {
        return "<main>{$content}</main>";
    }

    public function getPage(): string
    {
        return $this->page;
    }
}