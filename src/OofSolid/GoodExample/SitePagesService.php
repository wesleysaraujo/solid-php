<?php

namespace WesleySAraujo\SolidPhp\OofSolid\GoodExample;

class SitePagesService
{
    public function homePage(): string
    {
        $homePage = new SiteMakePage('Home', 'Welcome to my site!');

        return $homePage->getPage();
    }

    public function aboutPage(): string
    {
        $aboutPage = new SiteMakePage('About', 'About me!');

        return $aboutPage->getPage();
    }

    public function contactPage(): string
    {
        $contactPage = new SiteMakePage('Contact', 'Contact me!');

        return $contactPage->getPage();
    }
}