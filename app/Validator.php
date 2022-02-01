<?php


namespace UAB;

class Validator
{
    private static $errors = [];

    public static function validator($post)
    {
        if (strlen($post['id']) !== 9 || !preg_match('/^[0-9]*$/', $post['id'])) {
            self::$errors[] = 'Neteisingas imones kodas (koda turi sudaryti 9 skaitmenys)!';
        }
        if (trim($post['pavadinimas']) == '') {
            self::$errors[] = 'Neivestas imones pavadinimas!';
        }
        if (trim($post['adresas']) == '') {
            self::$errors[] = 'Neivestas imones adresas!';
        }
        $filtered_phone_number = filter_var($post['tel_nr'], FILTER_SANITIZE_NUMBER_INT);
        $phone_to_check = str_replace("-", "", $filtered_phone_number);
        if (strlen($phone_to_check) < 9 || strlen($phone_to_check) > 12){
            self::$errors[] = 'Blogai ivestas tel. numeris!';
        }
        if (!filter_var($post['el_pastas'], FILTER_VALIDATE_EMAIL)) {
            self::$errors[] = 'Blogai ivestas el. pastas!';
        }
        if(preg_match("/^[a-zA-Z'-]+$/",$post['vadovas'])) {
            self::$errors[] = 'Blogai ivesti vadovo duomenys!';
        }
        if(trim($post['adresas']) == ''){
            self::$errors[] = 'Neįvestas adresas!';
        }
        if(trim($post['veikla']) == ''){
            self::$errors[] = 'Neįvesta veikla!';
        }


        return self::$errors;
    }
}