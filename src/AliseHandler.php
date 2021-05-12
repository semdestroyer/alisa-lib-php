<?php


class AliseHandler
{
    private $request;
    public function handleSkill()
    {

    }
    public function sendResponce($session,$message,$keyboard,$images)
    {

    }
    public function getRequest($request)
    {
        $text = json_decode($request);
        $this->request = new Request();
        $this->request->setLocale($text);
        $this->request->setDangerousContext($text);
        $this->request->setTimezone($text);
        $this->request->setCommand($text["request"]["command"]);


    }
    public function setSimpleRoute(string $phrase,string $responce)
    {

    }

}