<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <style>
    #form{
        background-color: white;
        width:50%;
        margin:200px auto;
        padding:80px;
        box-shadow: 20px 20px 10px hsl(304, 76%, 18%);
        border-radius: 10px;
        border-color:orangered;
    }


        h1{
            font-size: 1.5cm;
            font-style: italic;
            color: greenyellow;
            background-color: orange;
            text-align: center;
            font-weight: 300;
        }
        
    h2{
        font-style: oblique;
    
        color: blue;
        background-color: yellowgreen;
        width:60%;
    
    margin:15px;
  padding :10px;
    font-size: 24px;
    }
    h3{
        font-style: oblique;
    
        color:yellow;
        background-color: red;
        width:60%;
    
    margin:15px;
  padding :10px;
    font-size: 24px;
    }
    #btn{
    color:red;
    background-color: grey;
    padding:8px,12px;
    font-size:1cm;
    border:20px solid black;
    border-radius:12px;
    cursor:pointer;
    text-align: center;
}
body{
    background-color: cornflowerblue;
}
h5{
text-align:center;
font-size:1cm;
font-style: initial;
font-weight: 200PX;
color: peru;
}
    </style>
</head>
<body>
   <div id="form">
    <h5 style="background-color:orange">WELCOME TO  MENTAL HEALTH CARE WEBSITE</h5>
    <h1>log in form</h1>
    
    <h2>
    <form action="rit.php" method="post">
    name:<input type="text" name="t1" id="name:" placeholder="entertyour name">
    </h2>
    <br>
<h3>
   password: <input type="text" name="t2" id="password" placeholder="enter your pasword">
    </h3>
    <br>
    
    <h4>
    <input type="submit"id="btn"value="login"name="submit">
    </h4>
   </div>
   </form>

</body>
</html>