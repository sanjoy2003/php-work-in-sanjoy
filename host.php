<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcome to Registration From</title>
    
    
</head>

<body>

    <style>
    *{
    margin:0px;
    padding:0px;
    box-sizing: content-box;
}
.raj{
    max-width: 80%;
    
    
    text-align: center;
    margin:34px;
    padding:23px;
    margin:auto;
    color:blue;
    font-size:1.5cm;
    background-image:url(imagy.jpg);
    height:100%;
    width:60%;

}
 h3{
text-align:center;
font-size:1.5cm;
font-style: initial;
font-weight: 300;
color: peru;
}
p{
    text-align:center;

    font-size:1cm;
    font-style: italic;
    font-weight: 200;
    color: blueviolet;


}
input,textarea{
    width:80%;
    
    margin:15px;
  padding :10px;
    font-size: 24px;
    background-color: aqua;
    color:red;
}
form{
    display:flex;
    align-items:center;
    justify-content:center;
    flex-direction:column;
}
.btn{
    color:red;
    background-color: grey;
    padding:12px 16px;
    font-size:20px;
    border:2px solid black;
    border-radius:14px;
    cursor:pointer;
}
h1{
    text-align:center;

    font-size:1cm;
    font-style: italic;
    font-weight: 200;
    color: red


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
    .raj{
background-color: antiquewhite;

        height:40cm;
    width: 60cm;
    }

</style>

    <div class="raj">
        <h3> WELCOME TO Mental Health Care Registration From</h3>
        <p>Enter your details  </p>
    
        
        <h1>Thank for submitting your from</h1>
        <form action="sonu.php" method="post">
        
        <input type="text" name="t1" id="name" placeholder="enter your name">

        <input type="text" name="t2" id="age" placeholder="enter your age"/>
       Date:<input type="date" name="date"/>
        
        <h2> select gender :
        <input type="text" name="gender"id="gender"placeholder="enter your gender">
        
    
        
        <input type="mail" name="t3" id="email" placeholder="enter your mail your phone">
        <input type="text" name="t4" id="name" placeholder="enter your phone number">
        <textarea  id="desc" cols="30" rows="10" name="t5" placeholder="enter any other informationhere"></textarea>
        <button class="btn">submit</button>
</form>     
</head>     
</body>

       