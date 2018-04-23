<?php

//PHP OOP Tutorial 4 | File Logger

class File_Logger
{
     private $_FileName;
     private $_Data;
    /**
     * @param $strFileName The name of the file
     * @param $strData Data to be appended to the file
     */
    public function Write($strFileName, $strData) {
        //Set class Vars
        $this->_FileName = $strFileName;
        $this->_Data = $strData;

        //Check data
        $this->_CheckPermission();
        $this->_CheckData();
        $handle = fopen($strFileName, 'a+');

        //write data
        fwrite($handle,"\r".$strData);
        fclose($handle);

    }

    /**
     * @desc Reading a file
     * @param $strFileName The name of the file
     * @return bool|string
     */
    public function Read($strFileName){
        //Set var;
        $this->_FileName = $strFileName;

        //check exists file
        $this->_CheckExists();

        //read file
        $handle = fopen($strFileName,'r') or die("Unable to open");

        return stream_get_contents($handle);
    }

    //Check permission
    private function _CheckPermission() {
        if(!is_writable($this->_FileName))
            die('Change your CHMOD permission to '. $this->_FileName);
    }

    //Check Data
    private function _CheckData() {
        if(strlen($this->_Data) < 0) {
            die("you must have more than one character for data");
        }
    }

    //Check exists file
    private function _CheckExists() {
        if(!file_exists($this->_FileName)) {
            die("Cannot find file");
        }
    }
}

$log = new File_Logger();
$log->Write('test.txt','My name is Quan');
echo "<pre>";
echo $log->Read('test.txt');