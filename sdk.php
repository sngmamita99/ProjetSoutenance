<?php


    $item = "....";
    const BASE_URL  = 'https://sample.domaine.com';
    $jsonResponse = (new PayTech($apiKey, $apiSecret))->setQuery([
            'item_name' => $item->name,
            'item_price' => $item->price,
            'command_name' => "Paiement {$item->name} Gold via PayTech",
        ])->setCustomeField([
            'item_id' => $id,
            'time_command' => time(),
            'ip_user' => $_SERVER['REMOTE_ADDR'],
            'lang' => $_SERVER['HTTP_ACCEPT_LANGUAGE']
        ])
            ->setTestMode(true)
            ->setCurrency($item->currency)
            ->setRefCommand(uniqid())
            ->setNotificationUrl([
                'ipn_url' => BASE_URL.'/ipn.php', //only https
                'success_url' => BASE_URL.'/index.php?state=success&id='.$id,
                'cancel_url' =>   BASE_URL.'/index.php?state=cancel&id='.$id
            ])->send();

     die($jsonResponse);
     ?>