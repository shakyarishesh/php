<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <form action = "includes/formhandler.php" method="post">
            <label for = "firstname">Firstname :</label>
            <input type="text" id="firstname" name="firstname" placeholder="enter your firstname"/>
            <br/>

            <label for = "lastname">Lastname :</label>
            <input type="text" id="lastname" name="lastname" placeholder="enter your lastname"/>
            <br/>
            <label for = "Favourite pet">Favourite pet :</label>
            <select id="pet" name="pet"> 
                <option>Dog</option>
                <option>Cat</option>
                <option>Mouse</option>
                <option>Rabbit</option>
            </select>
            <br/>

            <button type = "submit" value = "submit">Submit</button>
        </form> 
    </main>
</body>
</html>