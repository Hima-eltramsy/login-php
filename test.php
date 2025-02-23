<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        echo  "<h1>Login</h1>","Php Logins";

    ?>
    <style>
        body{
            background: #000;
            text-transform: capitalize;
            color: #fff;
        }
        form{
            background: red;
            padding: 200px;
        }
        button{
            background: green;
            width: 100%;
            border: none;
        }
        input{
            background: blue;
            width: 100%;  
            color: #fff;
            padding: 10px 0;
            outline: none;
        }
        input::placeholder{
            font-size: 20px;
            font-wight: bold;
            color:#085;
                }
    </style>
    <title>Php Title</title>
</head>
<body>
    <form action="" method="post">
        <input type="password" name="pss" placeholder="password">
        <br>
        <input type="email" name="em" placeholder="email">
        <br>
        <button type="submit">send</button>
    </form>
    <table border="1">
        <tr>
            <td>Password</td>
            <td>
                <?php
                    if(isset($_POST['pss'])==true){
                        echo $_POST['pss'];
                    }
                ?>
            </td>
        </tr>

        <tr>
            <td>email</td>
            <td>
                <?php
                    if(isset($_POST['em'])==true){
                        echo $_POST['em'];
                    }

                ?>
            </td>
        </tr>
                </table>

</body>
</html>