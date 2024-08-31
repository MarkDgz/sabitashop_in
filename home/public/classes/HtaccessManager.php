<?php

class HtaccessManager
{
    private $filePath;
    private $rules = [];

    public function __construct($filePath = '.htaccess')
    {
        $this->filePath = $filePath;

        // Cargar reglas existentes si el archivo ya existe
        if (file_exists($filePath)) {
            $this->rules = file($filePath, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
        }
    }

    public function addRule($rule)
    {
        // Agregar la nueva regla
        $this->rules[] = $rule;
    }

    public function save()
    {
        // Guardar las reglas en el archivo .htaccess
        file_put_contents($this->filePath, implode(PHP_EOL, $this->rules) . PHP_EOL);
    }

    public function clear()
    {
        // Vaciar las reglas actuales (sin eliminar el archivo)
        $this->rules = [];
        file_put_contents($this->filePath, '');
    }

    public function displayRules()
    {
        // Mostrar las reglas actuales
        return implode(PHP_EOL, $this->rules);
    }
}

/*
<?php
// Importar la clase
require_once 'HtaccessManager.php';

// Instanciar la clase
$htaccess = new HtaccessManager();

// Agregar reglas al archivo .htaccess
$htaccess->addRule('RewriteEngine On');
$htaccess->addRule('RewriteCond %{REQUEST_FILENAME} !-f');
$htaccess->addRule('RewriteCond %{REQUEST_FILENAME} !-d');
$htaccess->addRule('RewriteRule ^(.*)$ index.php?/$1 [L]');

// Guardar las reglas en el archivo .htaccess
$htaccess->save();

// Mostrar las reglas actuales (opcional)
echo $htaccess->displayRules();
*/
