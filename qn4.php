<?php
function word_digit($word){
    // explode()function returns an array containing the strings formed by splitting the original string
    $wad = explode(';', $word);
    $result = '';
    foreach($wad as $value){
        switch(trim($value)){
            case 'Zero':
            $result .= '0';
            break;
            case 'three':
            $result .= '3';
            break;
            case 'five':
            $result .= '5';
            break;
            case 'six':
            $result .= '6';
            break;
            case 'eight':
            $result .= '8';
            break;
            case 'one':
            $result .= '1';
            break;

        }
    }
    return $result;
}
echo word_digit("zero;three;five;six;eight;one");