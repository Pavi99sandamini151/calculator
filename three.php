<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap');
        
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        .input01{
            padding-bottom:10px;
            height:45px;
        }
        .input{
            font-family: 'Poppins', sans-serif;
            padding-bottom:6px;
            padding-bottom:6px;
            width:400px;
            border-radius:6px;
            outline:none;
        }

        .form-container{
            padding-top:80px;
            background: #d0bb94; 
            margin: auto;
            width: 60%;
            border: 3px solid #6f4e37;
            padding: 10px;  
            padding-left:200px;
        }

        .name{
            padding-top:60px;
            color:#6f4e37;
            padding-left:130px;
            padding-bottom:40px;
            font-size:20px;
            font-family: 'Poppins', sans-serif;
        }

        .input02{
            color: #6f4e37;
            padding-left:145px;
        }

        .selection{
            font-family: 'Poppins', sans-serif;
            height:40px;
            outline:none;
        }

        .btn{
            padding-top:20px;
            width:200px;
            padding-left:100px;
            padding-bottom:40px;
        }

        .button{
            width:200px;
            background:#6f4e37;
            height:40px;
            font-family: 'Poppins', sans-serif;
        }

        .answer{
            color:#6f4e37;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>
<body>
    <div class="form-container">
    <form>
    <div class="name">
        <h2> Calculator </h2>
    </div>
    <div class="input01"> 
        <input class="input" type="text" name="num1" placeholder="enter number 01"> 
    </div> 
    <div class="input01"> 
        <input class="input"  type="text" name="num2" placeholder="enter number 02"> 
    </div> 
    <div class="input02"> 
        <select class="selection"  name="operation" >
            <option>None</option>
            <option>Add</option>
            <option>Substract</option>
            <option>Multiply</option>
            <option>Devide</option>
        </select>
    </div> 
    <div class="btn"> 
        <button class="button"  type="submit" name="submit" value="submit">Calculate </button>
    </div> 
    </form>
    <p class="answer"> The answer is: </p>

    <?php
        if(isset($_GET['submit']))
        {
            $result1 = $_GET['num1'];
            $result2 = $_GET['num2'];
            $operator = $_GET['operation'];

            switch($operator){
                case "None":
                    echo "Please select an operator!";
                    break;
                
                case "Add":
                    echo $result1 + $result2;
                    break;

                case "Substract":
                    echo $result1 - $result2;
                    break;

                case "Multiply":
                    echo $result1 * $result2;
                    break;

                case "Devide":
                    echo $result1 / $result2;
                    break;

            }
        }
    ?>
    </div>
</body>
</html>