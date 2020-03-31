    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>calculation</title>
    </head>
    <style>
    body {
    background-color: purple;
    font-family:'Roboto, sans-serif';
    }

    h1 {
    color: white;
    text-align: center;
    }

    p {
    font-family: verdana;
    font-size: 20px;
    }
        input , select , button{
            padding:10px;
            margin-bottom:10px;
            width:100%;
        }
        .container{
            box-shadow:5px 5px #222;
            width:500px;
            border:1px solid;
            margin:20px;    
            padding-left:25px;
            padding-right:25px;
        }
        .row{
            margin:100px;
            
        }
        .heading{
            font-family: 'Roboto', sans-serif;
        }
        
    </style>
    <body>

        <div class="container">
            <div class="row">
            <h1 class="heading">Calculation Form</h1>
                <form action="calc.php" method="POST">
                <input type="text" name="num1" placeholder="Enter first number"><br>
                <input type="text" name="num2" placeholder="Enter second number"><br>
                <select name="cal">
                    <option value="add">Add</option>
                    <option value="sub">Subraction</option>
                    <option value="mult">Mutiply</option>
                </select><br><br>
                <button type="submit">Calculation</button>
                </form>
            
            </div>

        </div>


    </body>
    </html>