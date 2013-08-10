#!/usr/bin/php -q
<?php

echo new SimpleMinify;

class SimpleMinify
{
    protected $allowedExtensions = ['css', 'js'];

    public function __construct()
    {
        $this->count = $_SERVER['argc'];
        $this->parameters = $_SERVER['argv'];
        $this->doMyjob();
    }

    public function doMyjob()
    {
        if ($this->count == 2) {
            list($filename, $source) = $this->parameters;
            $this->removeOld($source);
            $this->minify($source);
        }
    }

    public function removeOld($source)
    {
        if ($source and is_dir($source)) {

            chdir($source);  //set work directory to $source directory ,you can check you current work directory by function getcwd()
            $subDirectorys = [];

            if ($source and is_dir($source)) {
                $files = scandir($source);

                if($files) {
                    array_shift($files);array_shift($files);  //remove the first . and second .. 

                    foreach ($files as $file) {
                        if (is_file($file)) {
                            $explode = explode('.', $file);
                            if (in_array('min',$explode)) {
                                unlink($file);
                            }
                        } elseif (is_dir($file)) {
                            $subDirectorys[] = $file;
                        }
                    }

                    $cwd = getcwd();
                    if($subDirectorys) {
                        foreach ($subDirectorys as $subDirectory) {
                            $this->removeOld($cwd . '/' . $subDirectory);
                        }
                    }

                    return true;
                }
            }
        }   
    }

    public function minify($source)
    {
        if ($source and is_dir($source)) {

            chdir($source);  //set work directory to $source directory ,you can check you current work directory by function getcwd()
            $subDirectorys = [];

            if ($source and is_dir($source)) {
                $files = scandir($source);

                if($files) {
                    array_shift($files);array_shift($files);  //remove the first . and second .. 

                    foreach ($files as $file) {
                        if (is_file($file)) {
                            $explode = explode('.', $file);
                            if (in_array(end($explode), $this->allowedExtensions)) {
                                shell_exec("yuglify $file");
                            }
                        } elseif (is_dir($file)) {
                            $subDirectorys[] = $file;
                        }
                    }
                    $cwd = getcwd();
                    if($subDirectorys) {
                        foreach ($subDirectorys as $subDirectory) {
                            $this->minify($cwd . '/' . $subDirectory);
                        }
                    }
                }
            }
        }
    }

    public function __toString()
    {
        if ($this->count != 2) {
            return "Please enter one directory\n";
        } else {
            return "Thanks for you using.I finished my job!\n";
        }
    }
}

