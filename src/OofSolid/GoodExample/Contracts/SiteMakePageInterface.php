<?php

namespace WesleySAraujo\SolidPhp\OofSolid\GoodExample\Contracts;

interface SiteMakePageInterface
{
    public function makePage(): void;

    public function setHeader(string $title): string;

    public function setFooter(): string;

    public function setContent(string $content): string;
}
