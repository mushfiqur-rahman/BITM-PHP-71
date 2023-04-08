<?php

namespace App\classes;

class Example
{

    public function wordCharacterCount($data)
    {
        $stringLength = strlen($data['given_string']);

        $wordLength = str_word_count($data['given_string']);
        $result=[
            'string_Length' =>$stringLength,
            'word_length' =>$wordLength,
        ];
        return $result;
    }
}

?>
