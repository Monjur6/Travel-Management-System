<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" 
    integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>LogIn</title>
    <style>
         @import url('https://fonts.googleapis.com/css2?family=Muli&display=swap');
 * {
    box-sizing: border-box; 
 }
 body{
    background-color: steelblue;
    color: #fff;
    font-family: 'Muli',sans-serif;
    margin: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    height: 100vh;
    overflow: hidden;
 }
 .container{
    background-color: rgba(0, 0, 0, 0.4);
    padding: 20px 40px;
    border-radius: 5px;
 }

 .btn{
    cursor: pointer;
    display: inline-block;
    width: 100%;
    background: lightblue;
    padding: 15px;
    font-family: inherit;
    font-size: 17px;
    margin-top: 30px;
    border: 0;
    border-radius: 3px;


 }
 .btn:focus{
    outline: 0;
 }
 .btn:active{
    transform: scale(1.036);
 }
 .text p{
    padding-top: 50px;
 }
 .container h1{
    text-align: center;
    margin-bottom: 30px;
 }
.container a{
    text-decoration: none;
    color: lightblue;
}

.form-control{
    position: relative;
    margin: 20px 0 40px;
    width: 300px;
}
.form-control input{
    background-color:  transparent;
    border: 0;
    border-bottom: 2px solid #fff;
    display: block;
    width: 100%;
    padding: 15px 0;
    font-size: 18px;
    color: #fff;

}
.form-control input:focus, 
.form-control input:valid{
    outline: 0;
    border-bottom: lightblue;
}
.form-control label{
    position: absolute;
    top: 15px;
    left: 0;
}

.form-control label span{
    display: inline-block;
    font-size: 18px;
    min-width: 5px;
    transition: 0.3s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.form-control input:focus + label span,
.form-control input:valid + label span{
    color: lightblue;
    transform:  translateY(-30px);
}

    </style>
</head>
<body>
    <div class="container">
        <h1>Please login</h1>
        <form action="../CONTROLLER/loginController.php" method="POST" >
            <div class="form-control">
                <input type="text" name="username" required>
                <label >Username</label>
            </div>
            <div class="form-control">
                <input type="password" name="password" required>
                <label >password</label><br>

                <button type="submit" class="btn" name="submit">Login </button>         
                
                <p class="text">
                    Don't have an account <a href="registration.php">Register</a>
                </p>

             </div>
        </form>
    </div>
    
    
   <script sr>
    const labels = document.querySelectorAll('.form-control label');


labels.forEach(label =>{
    label.innerHTML = label.innerText
    .split('')
    .map((letter,idx) => `<span style="transition-delay:${idx * 65}ms">${letter}</span>`)
    .join('')
})
   </script>
</body>
</html>