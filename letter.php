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
            if (($c == 0 || $r == 0 || (($mid - 1) + $c) == $r || ($r == $mid - 1)  || ($c == ($num - 1) && $r < $mid))) {
                echo "* ";
            } else {
                echo "  ";
            }
        }
        echo "\n";
    }
}
// $num = 10;
// for ($r = 0; $r < $num; $r++) {
//     for ($c = 0; $c < $num; $c++) {
//         // echo "* ";
//         echo " c=>$c r=>$r |";
//         usleep(100000);
//     }
//     echo "\n";
// }
/*
 c=>0 r=>0 | c=>1 r=>0 | c=>2 r=>0 | c=>3 r=>0 | c=>4 r=>0 | c=>5 r=>0 | c=>6 r=>0 | c=>7 r=>0 | c=>8 r=>0 | c=>9 r=>0 |
 c=>0 r=>1 | c=>1 r=>1 | c=>2 r=>1 | c=>3 r=>1 | c=>4 r=>1 | c=>5 r=>1 | c=>6 r=>1 | c=>7 r=>1 | c=>8 r=>1 | c=>9 r=>1 |
 c=>0 r=>2 | c=>1 r=>2 | c=>2 r=>2 | c=>3 r=>2 | c=>4 r=>2 | c=>5 r=>2 | c=>6 r=>2 | c=>7 r=>2 | c=>8 r=>2 | c=>9 r=>2 |
 c=>0 r=>3 | c=>1 r=>3 | c=>2 r=>3 | c=>3 r=>3 | c=>4 r=>3 | c=>5 r=>3 | c=>6 r=>3 | c=>7 r=>3 | c=>8 r=>3 | c=>9 r=>3 |
 c=>0 r=>4 | c=>1 r=>4 | c=>2 r=>4 | c=>3 r=>4 | c=>4 r=>4 | c=>5 r=>4 | c=>6 r=>4 | c=>7 r=>4 | c=>8 r=>4 | c=>9 r=>4 |
 c=>0 r=>5 | c=>1 r=>5 | c=>2 r=>5 | c=>3 r=>5 | c=>4 r=>5 | c=>5 r=>5 | c=>6 r=>5 | c=>7 r=>5 | c=>8 r=>5 | c=>9 r=>5 |
 c=>0 r=>6 | c=>1 r=>6 | c=>2 r=>6 | c=>3 r=>6 | c=>4 r=>6 | c=>5 r=>6 | c=>6 r=>6 | c=>7 r=>6 | c=>8 r=>6 | c=>9 r=>6 |
 c=>0 r=>7 | c=>1 r=>7 | c=>2 r=>7 | c=>3 r=>7 | c=>4 r=>7 | c=>5 r=>7 | c=>6 r=>7 | c=>7 r=>7 | c=>8 r=>7 | c=>9 r=>7 |
 c=>0 r=>8 | c=>1 r=>8 | c=>2 r=>8 | c=>3 r=>8 | c=>4 r=>8 | c=>5 r=>8 | c=>6 r=>8 | c=>7 r=>8 | c=>8 r=>8 | c=>9 r=>8 |
 c=>0 r=>9 | c=>1 r=>9 | c=>2 r=>9 | c=>3 r=>9 | c=>4 r=>9 | c=>5 r=>9 | c=>6 r=>9 | c=>7 r=>9 | c=>8 r=>9 | c=>9 r=>9 |
 */


// $start = 1;
// $end = 20;
// $columns = 5;
// $count = 0;

// for ($i = $start; $i <= $end; $i++) {
//     printf("%-4d", $i); // Print number with fixed width (4 spaces)
//     usleep(100000);
//     $count++;

//     if ($count % $columns == 0) {
//         echo PHP_EOL; // New line after every $columns numbers
//     }
// }



// $start = 1;
// $end = 20;
// $columns = 4; // number of columns

// $total = $end - $start + 1;
// $rows = ceil($total / $columns);

// // Build a 2D array column-first
// $data = [];

// for ($col = 0; $col < $columns; $col++) {
//     for ($row = 0; $row < $rows; $row++) {
//         $index = $row + $col * $rows;
//         $val = $start + $index;
//         if ($val <= $end) {
//             $data[$row][$col] = $val;
//         } else {
//             $data[$row][$col] = ''; // Fill blanks for missing cells
//         }
//     }
// }

// // Print row by row (but columns are filled top-down)
// foreach ($data as $row) {
//     foreach ($row as $colVal) {
//         printf("%-5s", $colVal);
//         usleep(100000);
//     }
//     echo PHP_EOL;
// }


