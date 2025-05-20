<?php


function printInlineName($num)
{
    $letters = [
        A($num),
        K($num),
        H($num),
        A($num),
        N($num),
        D($num),
        M($num),
        C($num),
    ];

    for ($i = 0; $i < $num; $i++) {
        foreach ($letters as $letter) {
            echo $letter[$i] . "   ";
        }
        echo "\n";
    }
}

// printInlineName(10);
$functions = [
    'A' => 'A',
    'K' => 'K',
    'H' => 'H',
    'N' => 'N',
    'D' => 'D',
    'C' => 'C',
    'M' => 'M',
    // add more as needed
];

function printName($name, $size)
{
    $rows = [];
    global $functions;
    for ($i = 0; $i < strlen($name); $i++) {
        $char = strtoupper($name[$i]);
        if (isset($functions[$char])) {
            $rows[] = $functions[$char]($size);
        }
    }
    for ($i = 0; $i < $size; $i++) {
        foreach ($rows as $letter) {
            echo $letter[$i] . "   ";
        }
        echo "\n";
    }
}


function combineLetters($letters)
{
    $output = [];
    $numRows = count($letters[0]);
    for ($i = 0; $i < $numRows; $i++) {
        $line = '';
        foreach ($letters as $letter) {
            $line .= $letter[$i] . '   '; // spacing between letters
        }
        $output[] = $line;
    }
    return $output;
}

function letterToHtmls($lines)
{
    $html = '<div class="ascii-art">';
    foreach ($lines as $line) {
        $html .= '<div class="line">';
        for ($i = 0; $i < strlen($line); $i++) {
            $char = $line[$i];
            if ($char === '*') {
                $html .= '<span class="star">*</span>';
            } elseif ($char === ' ') {
                $html .= '<span class="space">&nbsp;</span>';
            }
        }
        $html .= '</div>';
    }
    $html .= '</div>';
    return $html;
}

function letterToHtml($rows)
{
    $html = '<div class="letter">';
    foreach ($rows as $row) {
        $html .= '<div class="row">';
        for ($i = 0; $i < strlen($row); $i++) {
            if ($row[$i] === '*') {
                $html .= '<span class="cell filled"></span>';
            } else {
                $html .= '<span class="cell"></span>';
            }
        }
        $html .= '</div>';
    }
    $html .= '</div>';
    return $html;
}
