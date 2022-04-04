<?php

namespace WesleySAraujo\SolidPhp\OofSolid\GoodExample;

use WesleySAraujo\SolidPhp\OofSolid\GoodExample\Contracts\SiteMakePageInterface;

class SiteMakePage implements SiteMakePageInterface
{
    public function makePage(string $pageName, string $content): string
    {
        $header = $this->setHeader($pageName);
        $content = $this->setContent("$pageName");
        $footer = $this->setFooter();

        return $header . $content . $footer;
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
}