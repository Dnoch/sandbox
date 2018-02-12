@php
    $args=[
    /*-- Permanent access token generator for Facebook Graph API version 2.9 --*/
    //Instructions: Fill Input Area below and then run this php file
    /*-- INPUT AREA START --*/
    'usertoken'=>'EAACEdEose0cBAAxMmxkmXO1GjVVRuvdk1vj0lCR94jfGktJ563YhSfbK4gwgbZAn6THEPKREHMLak6ZCMbOF1uyVYgT7Wb2ImErDgvcrjEogjeEjT8ZBceNhcEeade61zInMKLRlaZBgqZBLy2ziZAytdcVXuMgzpVJt70y5VjLfMOXsrTGNAn9DqQt0q8Vf8ZD',
    'appid'=>'184132875421279',
    'client_id'=>'184132875421279',
    'appsecret'=>'c97e2bfc62ccd60768780e59af6ecdd4',
    'pageid'=>'326713094073616'
    /*-- INPUT AREA END --*/
    ];
    echo 'Permanent access token is: <input type="text" value="'.generate_token($args).'"></input>';
    function generate_token($args){
    $r=json_decode(file_get_contents("https://graph.facebook.com/v2.10/oauth/access_token?grant_type=fb_exchange_token&client_id={$args['appid']}&client_secret={$args['appsecret']}&fb_exchange_token={$args['usertoken']}")); // get long-lived token
    $longtoken=$r->access_token;
    $r=json_decode(file_get_contents("https://graph.facebook.com/v2.10/me?access_token={$longtoken}")); // get user id
    $userid=$r->id;
    $r=json_decode(file_get_contents("https://graph.facebook.com/v2.10/{$userid}?fields=access_token&access_token={$longtoken}")); // get permanent token
    if($r->id==$args['pageid']) $finaltoken=$r->access_token;
    return $finaltoken;
    }
@endphp