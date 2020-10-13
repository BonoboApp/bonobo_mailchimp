<?php
    error_reporting(E_ALL | E_WARNING | E_NOTICE);
    ini_set('display_errors', 1);

    use \DrewM\MailChimp\MailChimp;
    include_once('MailChimp.php');
    
    class BB_MailChimp {
        public $apiKey = "";
        public $listid = "";

        public function __construct($apiKey,$listId) {
            $this->apiKey = $apiKey;
            $this->listId = $listId;
        }

        public function subscribeToMailChimp($data){
            $MailChimp = new MailChimp($this->apiKey);

            $result = $MailChimp->post("lists/$this->listId/members", $data);

            if ($MailChimp->success()) {
                print_r($result);	
            } else {
                echo $MailChimp->getLastError();
            }
        }
    }
?>