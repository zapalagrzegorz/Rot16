<?php
    $output = $input = '';
if ($_SERVER["REQUEST_METHOD"] == "POST" &&  !empty($_POST["inputDateRaw"])) {
   
    $input = $_POST["inputDateRaw"];
    $inputLength = strlen($input);
    $isLetter = false;
    // najpierw na hasło "Operujemy wyłącznie w kodowaniu UTF-8."
    // sprawdzałem dany znak z zakresu Unicode code point
    // ale nie znalazłem sposobu by zautomatyzować stałe przesunięcie
    // dla polskich znaków (ąęć...), więc pozostało tylko przypisać stałe wartości
    // Stąd nie widziałem sensu dla sprawdzania wartości Unicode dla każdego znaku i wszystko przerobiłem
    // na tablicę asocjacyjną
    $polishLetters = array(
        'a' => 'm',
        'ą' => 'n',
        'b' => 'ń',
        'c' => 'o',
        'ć' => 'ó',
        'd' => 'p',
        'e' => 'r',
        'ę' => 's',
        'f' => 'ś',
        'g' => 't',
        'h' => 'u',
        'i' => 'w',
        'j' => 'y',
        'k' => 'z',
        'l' => 'ź',
        'ł' => 'ż',
        'm' => 'a', 
        'n' => 'ą',
        'ń' => 'b',
        'o' => 'c',
        'ó' => 'ć',
        'p' => 'd', 
        'r' => 'e',
        's' => 'ę',
        'ś' => 'f',
        't' => 'g',
        'u' => 'h',
        'w' => 'i',
        'y' => 'j',
        'z' => 'k',
        'ź' => 'l', 
        'ż' => 'ł',
        'A' => 'M',
        'Ą' => 'N',
        'B' => 'Ń',
        'C' => 'O',
        'Ć' => 'Ó',
        'D' => 'P',
        'E' => 'R',
        'Ę' => 'S',
        'F' => 'Ś',
        'G' => 'T',
        'H' => 'U',
        'I' => 'W',
        'J' => 'Y',
        'K' => 'Z',
        'L' => 'Ź',
        'Ł' => 'Ż',
        'M' => 'A', 
        'N' => 'Ą',
        'Ń' => 'B',
        'I' => 'C',
        'Ó' => 'Ć',
        'P' => 'D', 
        'R' => 'E',
        'S' => 'Ę',
        'Ś' => 'F',
        'T' => 'G',
        'U' => 'H',
        'W' => 'I',
        'Y' => 'J',
        'Z' => 'K',
        'Ź' => 'L', 
        'Ż' => 'Ł'
    );
    $letter = '';
    for($i = 0; $i < $inputLength; $i++){
        $letter = mb_substr($input, $i,  1, 'utf-8');
        foreach($polishLetters as $x => $x_value) {
            if(strcmp($x, $letter) === 0){
                $output .= $x_value;
                $isLetter = true;
                break;
            }
        }
        if(!$isLetter){
            $output .= $letter; 
        }
    }
}
?>