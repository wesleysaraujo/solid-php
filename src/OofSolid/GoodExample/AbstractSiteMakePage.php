<?php

namespace WesleySAraujo\SolidPhp\OofSolid\GoodExample;

use WesleySAraujo\SolidPhp\OofSolid\GoodExample\Contracts\SiteMakePageInterface;

abstract class AbstractSiteMakePage implements SiteMakePageInterface
{
    /**
     * @var string $pageName
     */
    protected string $pageName;

    /**
     * @var string $pageContent
     */
    protected string $pageContent;

    /**
     * @var string $pageTemplate
     */
    protected string $page;

    /**
     * @var string $pageName
     * @var string $pageContent
     */
    public function __construct(string $pageName, string $pageContent)
    {
        $this->pageName = $pageName;
        $this->pageContent = $pageContent;
    }

    /**
     * @return void
     */
    final public function makePage(): void
    {
        $header = $this->makeHeader($this->pageName);
        $content = $this->makeContent($this->pageContent);
        $footer = $this->makeFooter();

        $this->page = $header . $content . $footer;
    }

    /**
     * @param string $title
     * @return string
     */
    final public function makeHeader(string $title): string
    {
        return "<doctype html>
            <html>
            <head>
                <title>$title</title>
            </head>
            <body>";
    }

    /**
     * @return string
     */
    final public function makeFooter(): string
    {
        return "</body>
            </html>";
    }

    /**
     * @param string $content
     * @return string
     */
    final public function makeContent(string $content): string
    {
        return "<main>{$content}</main>";
    }

    /**
     * @return string
     */
    final public function getPage(): string
    {
        return $this->page;
    }
}