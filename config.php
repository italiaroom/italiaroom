<?php

define('LANDING_DIR', '');

$apiKey = 'nsTi9wEfubTl3j6ykB1I0YrUpVdPoLPXjLvg3rqJtoOIBRfUmvcrA';          // Ключ доступа к API
$offer_id = 5896;         // для каждого оффера свой айди, надо уточнять его в админке или у суппортов
$stream_hid = 'qO6H994Q';     // id потока

$landKey = '514752fd1d3edd2850a65fdb42f24494';

$default_main_site = 'http://api.cpa.tl';
$apiSendLeadUrl = 'http://api.cpa.tl/api/lead/send_archive';
$apiGetLeadUrl = 'http://api.cpa.tl/api/lead/feed';

$dataOffers = '{"23055":{"id":23055,"name":"Military Suit","country":{"code":"RO","name":"\u0420\u0443\u043c\u044b\u043d\u0438\u044f"},"price":"299","price2":"598","currency":{"code":"RON","name":"RON"}},"23056":{"id":23056,"name":"Military Suit","country":{"code":"HU","name":"\u0412\u0435\u043d\u0433\u0440\u0438\u044f"},"price":"22900","price2":"45800","currency":{"code":"HUF","name":"Ft"}},"23628":{"id":23628,"name":"Military Suit","country":{"code":"CZ","name":"\u0427\u0435\u0445\u0438\u044f"},"price":"1590","price2":"3180","currency":{"code":"CZK","name":"K\u010d"}}}';
$dataOffer = '{"id":23055,"name":"Military Suit","country":{"code":"RO","name":"\u0420\u0443\u043c\u044b\u043d\u0438\u044f"},"price":"299","price2":"598","currency":{"code":"RON","name":"RON"}}';
$is_geo_detect = '';
$productName = 'Military Suit';
$invoice = 'index.php';
$language = 'ro';
$push_link = '';
$fb_verification = '';

$keitaro_postback = '';

$companyInfo = array('address' => '620024, Свердловская область, г. Екатеринбург, ул. Бисертская, д. 4А, помещ. 2', 'detail' => 'ОБЩЕСТВО С ОГРАНИЧЕННОЙ ОТВЕТСТВЕННОСТЬЮ "ТЭКС-ТОРГ" ОГРН: 1206600061205 ИНН: 6679137567 КПП: 667901001');
$companyInfoEN = array('address' => '129090, Moscow, pereulok Zhivarev, house 8, stroenie 3, flat 16 email: ostrov.prodazh@mail.com Skype: ostrov.prodazh@mail.com', 'detail' => 'OOO "OSTROV PRODAZH" OGRN: 1197746695530 VAT: 7708365555');

$_debug = False; // установите True для вывода дополнительной информации для отладки и поиска ошибок
$pixels = [
    'fb_pixel', 'fb_verify', 'google_pixel', 'google_adw_pixel', 'tiktok_pixel', 'topmail_pixel', 'vk_pixel', 'yandex_metrika'
];

if(!$apiKey){
    echo 'Ключ доступа к API не определен. Получите в личном кабинете или обратитесь в службу поддержки';
    die;
}

if(!$offer_id){
    echo 'ID оффера не определен';
    die;
}
