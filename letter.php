<?php
// function A($num)
// {
//     $mid = (int)($num / 2);
//     for ($p = 0; $p < $num; $p++) {
//         for ($i = 0; $i < $num; $i++) {
//             if ($p == 0) {
//                 echo "* ";
//             }
//             if ($p != 0 && ($i == 0 || $i == $num - 1)) {
//                 echo "* ";
//             } elseif ($p != 0 &&  ($mid != $p) && ($i != $num - 1)) {
//                 echo "  ";
//             }
//             if (($mid == $p) &&  ($i != 0 && $i != $num - 1)) {
//                 echo "* ";
//             }
//         }
//         if($p<$num-1){
//             echo "\n";
//         }
//     }
// }
function A($num)
{
    $mid = (int)($num / 2);
    $rows = [];

    for ($p = 0; $p < $num; $p++) {
        $line = '';
        for ($i = 0; $i < $num; $i++) {
            if ($p == 0 || $i == 0 || $i == $num - 1 || $p == $mid) {
                $line .= "* ";
            } else {
                $line .= "  ";
            }
        }
        $rows[] = $line;
    }
    return $rows;
}
// function A($num)
// {
//     $output = [];
//     $mid = (int)($num / 2);
//     for ($p = 0; $p < $num; $p++) {
//         $line = '';
//         for ($i = 0; $i < $num; $i++) {
//             if ($p == 0) {
//                 $line .= "* ";
//             } elseif ($i == 0 || $i == $num - 1) {
//                 $line .= "* ";
//             } elseif ($p == $mid && $i != 0 && $i != $num - 1) {
//                 $line .= "* ";
//             } else {
//                 $line .= "  ";
//             }
//         }
//         $output[] = $line;
//     }
//     return $output;
// }


function C($num)
{
    $rows = [];
    for ($r = 0; $r < $num; $r++) {
        $line = '';
        for ($c = 0; $c < $num; $c++) {
            if ($c == 0 || $r == 0 || $r == ($num - 1)) {
                $line .= "* ";
                // echo "* ";
            } else {
                $line .= "  ";
                // echo "  ";
            }
        }
        $rows[] = $line;
        // echo "\n";
    }
    return $rows;
}

function K($num)
{
    $mid = (int)($num / 2);
    $rows = [];
    for ($r = 0; $r < $num; $r++) {
        $line = '';
        for ($c = 0; $c < $num; $c++) {
            if ($c == 0  || ($mid - $c) == $r || ($mid + $c) == ($r + 1)) {
                $line .= "* ";
                // echo "* ";
            } else {
                $line .= "  ";
                // echo "  ";
            }
        }
        $rows[] = $line;
        // echo "\n";
    }
    return $rows;
}

function H($num)
{
    $mid = (int)($num / 2);
    $rows = [];
    for ($r = 0; $r < $num; $r++) {
        $line = '';
        for ($c = 0; $c < $num; $c++) {
            if ($c == 0 || $c == ($num - 1) || $mid === $r) {
                $line .= "* ";
                // echo "* ";
            } else {
                $line .= "  ";
                // echo "  ";
            }
        }
        $rows[] = $line;
        // echo "\n";
    }
    return $rows;
}

function N($num)
{
    $mid = (int) ($num / 2);
    $rows = [];
    for ($r = 0; $r < $num; $r++) {
        $line = '';
        for ($c = 0; $c < $num; $c++) {
            if ($c == 0 || $c == ($num - 1) || $c == $r) {
                $line .= "* ";
                // echo "* ";
            } else {
                $line .= "  ";
                // echo "  ";
            }
        }
        $rows[] = $line;
        // echo "\n";
    }
    return $rows;
}

function D($num)
{
    $mid = (int)($num / 2);
    $rows = [];
    for ($r = 0; $r < $num; $r++) {
        $line = '';
        for ($c = 0; $c < $num * 1.6; $c++) {
            if ($c == 1 || $c == $num - 1 || $r == 0 || $r == ($num - 1)) {
                $line .= "*";
                // echo "*";
            } else {
                $line .= "  ";
                // echo "  ";
            }
        }
        $rows[] = $line;
        // echo "\n";
    }
    return $rows;
}

function M($num)
{

    $rows = [];
    for ($r = 0; $r < $num; $r++) {
        $line = '';
        for ($c = 0; $c < $num; $c++) {
            if ($c == 0 || $c == ($num - 1) || ($r == $c && $r <= ($num / 2)) || ($r + $c == ($num - 1) && $r <= ($num / 2))) {
                $line .= "* ";
                // echo "* ";
            } else {
                // echo "  ";
                $line .= "  ";
            }
        }
        $rows[] = $line;
        // echo "\n";
    }
    return $rows;
}



function P($num)
{
    $rows = [];
    for ($r = 0; $r < $num; $r++) {
        $line = '';
        for ($c = 0; $c < $num; $c++) {
            if ($c == 0 || $r == 0 || ($r == ($num / 2) && $c <= ($num - 1)) || ($c == ($num - 1) && $r <= ($num / 2))) {
                // $line .= "* ";
                echo "* ";
            } else {
                echo "  ";
                // $line .= "  ";
            }
        }
        // $rows[] = $line;
        echo "\n";
    }
    // return $rows;
}

function I($num)
{
    $rows = [];
    if (((int)$num % 2) == 0) {
        $tNum = $num - 1;
    } else {
        $tNum = $num;
    }
    $mid = (int)($tNum / 2);
    for ($r = 0; $r < $num; $r++) {
        $line = '';
        for ($c = 0; $c < $tNum; $c++) {
            if ($c == $mid || $r == 0  || $r == ($num - 1)) {
                // $line .= "* ";
                echo "* ";
            } else {
                echo "  ";
                // $line .= "  ";
            }
        }
        // $rows[] = $line;
        echo "\n";
    }
    return $rows;
}

function J($num)
{
    $mid = (int) ($num / 2);
    for ($r = 0; $r < $num; $r++) {
        for ($c = 0; $c < $num; $c++) {
            if (($r >= $mid  && $c == 0) || ($r == $mid && $c < ($num / 4)) || $r == ($num - 1) || $c == ($num - 1)) {
                echo "* ";
            } else {
                echo "  ";
            }
        }
        echo "\n";
    }
}
function U($num)
{
    for ($r = 0; $r < $num; $r++) {
        for ($c = 0; $c < $num; $c++) {
            if (($c == 0 || $c == ($num - 1)) || $r == ($num - 1)) {
                echo "* ";
            } else {
                echo "  ";
            }
        }
        echo "\n";
    }
}
function S($num)
{
    if ($num <= 4) {
        echo "please input greater then 4 \n";
        return false;
    }
    $mid = (int) ($num / 2);
    for ($r = 0; $r < $num; $r++) {
        for ($c = 0; $c < $num; $c++) {
            if (($r == 0 || $r == ($num - 1)) || ($c == 0 && $r >= ($num - 2)) || ($c == 0 && $r < $mid || $r == $mid) || ($c == ($num - 1) && $r > $mid) || ($c == ($num - 1) && $r < ($num - ($num - 2)))) {
                echo "* ";
            } else {
                echo "  ";
            }
        }
        echo "\n";
    }
}

function T($num)
{
    if (((int)$num % 2) == 0) {
        $tNum = $num - 1;
    } else {
        $tNum = $num;
    }
    $mid = (int)($tNum / 2);
    for ($r = 0; $r < $num; $r++) {
        for ($c = 0; $c < $tNum; $c++) {
            if ($r == 0 || $c == $mid) {
                echo "* ";
            } else {
                echo "  ";
            }
        }
        echo "\n";
    }
}



function R($num)
{
    $mid = (int) $num / 2;
    for ($r = 0; $r < $num; $r++) {
        for ($c = 0; $c < $num; $c++) {
            if (($c == 0 || $r == 0 || (($mid-1) + $c) == $r || ($r == $mid-1)  || ($c == ($num - 1) && $r < $mid))) {
                echo "* ";
            } else {
                echo "  ";
            }
        }
        echo "\n";
    }
}
R(10);
