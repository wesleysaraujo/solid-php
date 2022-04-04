<?php

namespace WesleySAraujo\SolidPhp\OofSolid\GoodExample\Contracts;

interface SiteMakePageInterface
{
    public function makePage(string $pageName, string $content): string;

    public function setHeader(string $title): string;

    public function setFooter(): string;

    public function setContent(string $content): string;
}
