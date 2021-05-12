<?php


class Request
{
   private $locale;
   private $timezone;
    private $command;
   private $dangerousContext;

    /**
     * @param mixed $dangerousContext
     */
    public function setDangerousContext($dangerousContext)
    {
        $this->dangerousContext = $dangerousContext;
    }

    /**
     * @param mixed $locale
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;
    }

    /**
     * @param mixed $timezone
     */
    public function setTimezone($timezone)
    {
        $this->timezone = $timezone;
    }

    /**
     * @return mixed
     */
    public function getDangerousContext()
    {
        return $this->dangerousContext;
    }

    /**
     * @return mixed
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * @return mixed
     */
    public function getTimezone()
    {
        return $this->timezone;
    }

    /**
     * @param string $command
     */
    public function setCommand(string $command)
    {
        $this->command = $command;
    }

    /**
     * @return string
     */
    public function getCommand()
    {
        return $this->command;
    }
}