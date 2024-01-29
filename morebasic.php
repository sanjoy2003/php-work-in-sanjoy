<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .select{color:red;
            background-color: yellow;
            max-width: 80%;
            text-align: center;
            margin:auto;
            padding:23px;
        }
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
        }
        
    </style>
    <body>
        <div class="select">
            <h1>this is container</h1>
            <?php
            $var = 8;
            $car=9;
            echo $c = $var + $car;
            function print_number($number){
                print "number is";
                echo $number;


            }
            print_number(23);
            echo "<br>";
            $a = 10;
            for($a=0;$a<100;$a++)
            {
                echo "<br> The value of a  is:";
                echo $a;
            }
            $str = "This";

            echo $str."<br>";
        
        
            echo $str;
            $lenn = strlen($str);
            echo  "This is length for sanjoy" .$lenen;
            echo $lenen;
            ?>

        </div>
    </body>
    </html>
