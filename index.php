<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .letter {
            display: inline-block;
            margin: 10px;
        }

        .row {
            display: flex;
        }

        .cell {
            width: 10px;
            height: 10px;
            margin: 1px;
            background-color: transparent;
        }

        .cell.filled {
            background-color: #00f;
            animation: pop 0.5s ease-in-out forwards;
        }

        @keyframes pop {
            0% {
                transform: scale(0);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }


        .ascii-art {
            font-family: monospace;
            white-space: pre;
            display: inline-block;
            animation: fadeIn 2s ease-in-out;
        }

        .line {
            line-height: 1.2em;
        }

        .star {
            color: #4CAF50;
            animation: blink 1.5s infinite;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.3;
            }
        }
    </style>

</head>

<body>

<?php include 'function.php';


// echo  letterToHtml(A(10));
// echo  letterToHtml(K(10));
// echo  letterToHtml(H(10));
// echo  letterToHtml(M(10));
// echo  letterToHtml(A(10));
// echo  letterToHtml(N(10));
// echo  letterToHtml(D(10));
// echo  letterToHtml(C(10));

$letterA = A(10);
$letterK = K(10);
$letterH = H(10);
$letterA2 = A(10);
$letterN = N(10);
$letterD = D(10);
$letterC = C(10);
$letterM = M(10);

// $combined = combineLetters([$letterA, $letterK, $letterH, $letterA2, $letterN, $letterD]);
$combined = combineLetters([$letterA, $letterM, $letterA, $letterN,]);

// echo letterToHtmls($combined);
?>


</body>

</html>