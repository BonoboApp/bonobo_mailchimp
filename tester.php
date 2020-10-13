<?php
    // include cass
    include_once('bb_mailchimp.php');

    // define template
    $dataTemplate = [
        'email_address' => '',
        'merge_fields'  => [
            'FNAME'=>'', 
            'LNAME'=>''
        ],
        'tags'          => [],
        'status'        => 'subscribed'
    ];

    // customize template
    $data                           = $dataTemplate;
    $data['email_address']          = 'email_address_to_subscribe';
    $data['merge_fields']['FNAME']  = "first_name";
    $data['merge_fields']['LNAME']  = "last_name";
    $data['tags']                   = Array('tag1','tag2');
    
    // subscribe user
    $apiKey = "";
    $listId = "";
    $bb_mc = new BB_MailChimp($apiKey,$listId);
    $bb_mc->subscribeToMailChimp($data);