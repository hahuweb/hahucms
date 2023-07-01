<?php

/**
 * Pages
 * 
 * Displaying web pages 
 * 
 */

 class pages
{
    public $files;
    public $folder_name;

    // values
    public function values()
    {
        
        $this->files = glob("hw-pages/*.*");
        $this->folder_name = 'hw-pages/';
    }

    // Counting file
    public function countFile()
    {
        $this->values();
        echo "" . count($this->files) . " files";
    }

    public function displayPages()
    {
        foreach ($this->files as $key => $value) {

            $supported_file = array(
                'html',
                'php'
            );
            $ext = strtolower(pathinfo($value, PATHINFO_EXTENSION));
            //$path_parts = pathinfo($value);
            $path_parts = pathinfo($value, PATHINFO_EXTENSION);

            if (in_array($ext, $supported_file)) {
                
            }
        }
    }

}