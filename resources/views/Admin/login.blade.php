<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
    <style>
    * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}

body {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background: #4477CE;

}

.container {
    width: 45%;
    display: flex;
    max-width: 400px;
    background: #8CABFF;
    border-radius: 15px;
    box-shadow: 0 10px 15px #a1d3ff (0, 0, 0, 0.1);
}

.login {
    width: 400px;
}

.register {
    width: 400px;
}

form {
    width: 250px;
    margin: 60px auto;
}

h1 {
    margin: 20px;
    text-align: center;
    font-weight: bolder;
    text-transform: uppercase;
}

hr {
    border-top: 2px solid #916DB3;
}

p {
    text-align: center;
    margin: 10px;
}

form label {
    display: block;
    font-size: 16px;
    font-weight: 600;
    padding: 5px;
}

input {
    width: 100%;
    margin: 2px;
    border: none;
    outline: none;
    padding: 8px;
    border-radius: 5px;
    border: 1px solid rgb(110, 163, 254);
}

button {
    border: none;
    outline: none;
    padding: 8px;
    width: 252px;
    color: white;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 5px;
    background: #4477CE;
}

button:hover {
    background: rgb(77, 148, 255);
}

@media (max-width: 880px) {
    .container {
        width: 100%;
        max-width: 750px;
        margin-left: 20px;
        margin-right: 20px;
    }

    form {
        width: 300px;
        margin: 20px auto;
    }

    .login {
        width: 300px;
        padding: 20px;
    }

    button {
        width: 100%;
    }

    .right img {
        width: 100%;
        height: 100%;
    }

    .register {
        width: 300px;
        padding: 20px;
    }
}
  </style>
</head>
<body>
<div class="container">
        <div class="login">
            <form action="{{url('admin/login')}}" method="post" class="px-2">
                @csrf
                
                <h1>Login</h1>
                <hr>
                <p>Login Dahulu</p>
                <label for="">Username</label>
                <input type="text" name="username" id="">
                <label for="">Password</label>
                <input type="text" name="password" id="">
                <button>Login</button>
                <p>
                    <a href="">Forgot password</a>
                </p>
            </form>
        </div>
    </div>
</body>
</html>