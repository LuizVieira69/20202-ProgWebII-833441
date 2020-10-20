<?php

class Dir
{
    private $directory;
    private $arquivo;

    public function __construct($directory)
    {
        $this->directory = $directory;
    }

    public function replaceFile($arquivo, $input)
    {
        if(!is_dir($this->directory))
        {
            mkdir($this->directory, 0777);
        }

        $client = "./" . $this->directory . "/" . $arquivo . ".txt";
        $client_file = fopen($client_file, "w");
        if ($client_file) {
            fwrite($client_file, $input);
        }
        fclose($client_file);
    }

    public function listAllFiles()
    {
        if(is_dir($this->directory))
        {
            $files = scandir($this->directory);
            foreach($files as $file)
            {
                print $file . '<br />' . PHP_EOL;
            }
        }
    }
}
?>