<?php


class Responce
{
    private $text;
    private $tts;
    private $version;
    private $endsession;

    /**
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param string $text
     */
    public function setText(string $text)
    {
        $this->text = $text;
    }

    /**
     * @param mixed $tts
     */
    public function setTts($tts)
    {
        $this->tts = $tts;
    }

    /**
     * @return mixed
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getEndsession()
    {
        return $this->endsession;
    }

    /**
     * @param bool $endsession
     */
    public function setEndsession(bool $endsession)
    {
        $this->endsession = $endsession;
    }

}