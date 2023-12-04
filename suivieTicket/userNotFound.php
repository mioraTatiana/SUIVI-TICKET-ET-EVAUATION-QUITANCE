<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/cssConstruite/interface.css">
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="../js/bootstrap.bundle.js"></script>
    <title>user not found</title>
    <style>
        body{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            padding-top: 200px;
        }

        #NonConnecté{
            color: red;
            font-size: 50px;
            display: flex;
            justify-content: center;
            align-items: center;

        }
        a{
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div  class="border border-2 rounded border-danger p-4" >
             <span id="NonConnecté">
                Non connecté!  
            </span>

        <div class="text-center">
            <ul>
                <li><a href="../index.html">Information érronée!</a></li>
                <li><a href="regisseurAjout.php">Veuillez vous inscrire</a></li>
            </ul>

            </div>
    </div>
</body>
</html>