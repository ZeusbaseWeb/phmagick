<?php
namespace phMagick\Core;

// not needed, just added here for clarity
use phMagick\Core\Command;

Abstract class Action
{
    private $source;
    private $destination;

    abstract function getShellCommand();

    public function __construct($source, $destination)
    {
        $this->setSource($source);
        $this->setDestination($destination);
    }

    public function setSource($file)
    {
        $this->source = $file;
        return $this;
    }

    public function getSource()
    {
        return $this->source;
    }

    public function setDestination($file)
    {
        $this->destination = $file;
        return $this;
    }

    public function getDestination()
    {
        return $this->destination;
    }

}