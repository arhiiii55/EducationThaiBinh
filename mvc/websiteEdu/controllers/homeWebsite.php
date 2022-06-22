<?php
class HomeWebsite extends Controllersite
{
    public function HomeWebsite()
    {
        $this->viewWebsite("masterWebsiteLayout", [
            'pages' => "index"
        ]);
    }
}