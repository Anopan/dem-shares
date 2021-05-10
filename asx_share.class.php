<?php
/*
    Author:     Anopan Kandiah
    Created:    26/04/2021
    Modified:   26/04/2021
*/

class ASXShare
{
    private $asx_share;

    public function __construct($asx_code)
    {
        $asx_url = 'https://www.asx.com.au/asx/1/share/' .$asx_code;

        $asx_json = file_get_contents($asx_url);

        $this->asx_share = json_decode($asx_json, true);
    }

    public function get_share_code()
    {
        return($this->asx_share["code"]);
    }

    public function get_share_name()
    {
        return($this->asx_share["desc_full"]);
    }

    public function get_share_price()
    {
        return('$' .$this->asx_share["last_price"]);
    }
}
?>