<?php

namespace WesleySAraujo\SolidPhp\LofSolid\BadExample;

abstract class PageTemplateMake
{
    protected string $content;

    protected string $page;

    protected string $pageName;

    public function __construct($content, $pageName)
    {
        $this->content = $content;
        $this->pageName = $pageName;
    }

    public function makeHtml()
    {
        $this->page = "<html>
                        <head>
                            <title>{$this->pageName}</title>
                        </head>
                        <body>{$this->content}</body>
                       </html>";
    }

    public function getPage(): string
    {
        return $this->page;
    }
}