<?php 

function towerOfHanoi($n, $from, $to, $helper)
{
    if ($n == 1) {
        echo "Move disk 1 from $from to $to\n";
        return;
    }

    towerOfHanoi($n - 1, $from, $helper, $to);
    echo "Move disk $n from $from to $to\n";
    towerOfHanoi($n - 1, $helper, $to, $from);
}

// towerOfHanoi(3, 'A', 'C', 'B');

function f(int $n)
{
    if ($n > 0) {
        echo $n . "\n";
        f($n - 1);
        echo $n . "\n";
        f($n - 1);
        echo $n . "\n";
        f($n - 1);
    }
    // echo bin2hex(random_bytes(10)) . "\n";
    // f($n);
}

/**
 * Algorithm to print a star pattern L shape
 * step 1: print the vertical 5 stars
 * step 2. print the hosrinzontal 5 stars
 */

function starLPatter($v, $h)
{
    for ($i = 0; $i < $v; $i++) {
        echo "$i ";
        if ($i == ($v - 1)) {
            for ($j = ($h - 1); $j >= 0; $j--) {
                echo "$j ";
            }
        }
        echo "\n";
    }
}
// starLPatter(10, 9);

/**
 * step 1. print 5 row simply
 * step 2. repete that thing 5 times 
 */
function startSquarePattern($n)
{
    for ($j = 0; $j < $n; $j++) {
        for ($i = 0; $i < $n; $i++) {
            echo "* ";
        }
        echo "\n";
    }
}
// startSquarePattern(20);
// echo "\n";
/**
 * step 1. print 1 row with 1 star
 * step 2. print 2 star in seconf row
 * step 3. print 3 star in third row
 * step 4. print 4 star in forth row
 * step 5. print 5 star in fifth row
 * and so on
 */

function startTrinanglePattern($n)
{
    for ($r = 0; $r < $n; $r++) {
        for ($c = $n; $c > $r; $c--) {
            echo "* ";
        }
        echo "\n";
    }
}
// startTrinanglePattern(5);
// echo "\n";
/**
 * Print L shape star pattern
 * step 1. print 5 row with only 1 column
 * step 2. print 2 star in seconf row 
 * step 3. and so on 
 */
function lShapeStartPattern($n)
{
    for ($c = 0; $c < $n; $c++) {
        echo "* ";
        for ($r = 0; $r < $c; $r++) {
            echo "* ";
        }
        echo "\n";
    }
}
// lShapeStartPattern(5);
// echo "\n";
/**
 * Print the following pattern
 * step 1. print 1 row with 5 star
 * step 2. print 4 star in second row right side
 * step 3. print 3 star in third row right side
 * step 4. print 2 star in forth row right side
 * step 5. print 1 star in fifth row   right side 
 */

function lOppositeStarPattern($n)
{
    for ($i = $n; $i >= 0; $i--) {
        for ($c = $n; $c >= 0; $c--) {
            if ($i <= $c) {
                echo "  ";
            } else {
                echo "* ";
            }
        }
        echo "\n";
    }
}
// lOppositeStarPattern(5);