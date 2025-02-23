
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Title Php</title>
</head>
<body>
    <div class="container">
        <h1> Php login</h1>
        <form action="" method="post">
            
            <label for="email" style="display: flex;">email:</label>
            <input type="email" name="em" class="input" id="email" >
            <br>
            <label for="password" style="display: inline-flex;">password:</label>
            <input type="password" name="pass" id="password">
            <br>
            <input  class="btn" type="submit" value="log in" style="background: green;">
            <button type="button" onclick="f2()" style="background: red;">Email After Text</button>

        </form>
        <br>
        <table border="1" >
            <tr id="tr">
                <td>Email</td>
                <td width="200px">

                         
                    <?php
                        if(isset($_POST['em'])==true){
                            echo $_POST['em'];
                        }
                    ?>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td width="200px">      
                    <?php
                        if(isset($_POST['pass'])==true){
                            echo $_POST['pass'];
                        }
                    ?>
                </td>
            </tr>
        </table>




        
    </div>



<script src="main.js"></script>



   

    
</body>
</html>