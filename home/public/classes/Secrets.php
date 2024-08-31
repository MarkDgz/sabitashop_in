<?php
class Secrets
{
    private $secrets = [];

    public function __construct($filePath)
    {
        if (file_exists($filePath)) {
            $this->secrets = parse_ini_file($filePath);
        } else {
            throw new Exception("El archivo .secrets no se encontró.");
        }
    }

    public function get($key)
    {
        return isset($this->secrets[$key]) ? $this->secrets[$key] : null;
    }
}
