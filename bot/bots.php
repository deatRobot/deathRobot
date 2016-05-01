$string = json_decode(file_get_contents('php://input'));
    
    function objectToArray( $object )
    {
        if( !is_object( $object ) && !is_array( $object ) )
        {
            return $object;
        }
        if( is_object( $object ) )
        {
            $object = get_object_vars( $object );
        }
        return array_map( 'objectToArray', $object );
    }
    
    $result = objectToArray($string);
    $user_id = $result['message']['from']['id'];
    $text = $result['message']['text'];
    $token = '';
    $text_reply = 'پیام شما دریافت شد.';
    
    $url = 'https://api.telegram.org/bot'.$174690675:AAHl8_5O9xgOBxP_nDFEDVBCS6n53TZ17lI .'/sendMessage?chat_id='.$129503857;
    $url .= '&text=' .$text_reply;
    
    
    $res = file_get_contents($url);
