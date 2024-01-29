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
            background-color: black;
        }
        .sanju{
            
            background-color:powderblue;
            color:brown ;
    max-width: 80%;
    
    
    text-align: center;
    margin:34px;
    padding:23px;
    margin:auto;
    color:blue;
    font-size:1.5cm;
            
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
input,textarea{
    width:60%;
    
    margin:12px;
  padding :8px;
    font-size: 16px;
    background-color: aqua;
    color:red;
    
}




        
    </style>
    <form action="exter.php" method="post">
    <div class="sanju">    <h1 style="color:blue"
        ><er>Regestation</er></h1>
    
        name: <input type="text" name="t1" placeholder="enter your name"> 
       <br>
        password:<input type="text" name="t2"placeholder="enter your password"><br>
        <div class="select">
            <fieldset>
            
        selectgender:<input type="radio" name="gender">male
        <input type="radio" name="gender">female
        <br>
        Are you eligibale:<input type="radio" name="eligibale">yes
        <input type="radio" name="eligibale">no
            </div>
        </fieldset>
        <br>
        age:<input type="radio" name="age">above 18
        <input type="radio" name="age">under 18
        <br><p>
            <legend>Address</legend>
        Address:<textarea name="t3" cols="80" rows="10"></textarea>
        </p>
        <br>
        <p style="color:red;background-color: blanchedalmond;">Email:<input type="email" name="t4" placeholder="enter your email">      
        </p>
        <p>
         pincode: *  <input type="number" name="t5">
         </p>
        
         <br>
            
         
         <p>
            date of birth(yyyy-mm-dd):<input type="text" name="t6">
         </p>
        
         
         <br>
        <button class="btn">submit</button>

     </form>   
</body>
</html>