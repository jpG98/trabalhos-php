<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Heroi</title>
</head>
<body>

    <form action="resultado.php" method="post">
        <p>universos</p> 
         <input type="radio" id="marvel" name="universo" value="Marvel"> 
         <label for="marvel">Marvel</label><br>      
         <input type="radio" id="dc" name="universo" value="DC">
         <label for="dc">DC</label><br>
        <select name="heroi" id="heroi">
            <option name="Ravena">Ravena</option>
            <option name="Shazam">Shazam</option>
            <option name="Super-Choque">super choque</option>
            <option name="Batgirl">Batgirl</option>
            <option name="Superman">Superman</option>
            <option name="Homem-Aranha">Homem-Aranha</option>
            <option name="Pantera Negra">Pantera Negra</option>
            <option name="Homem de Ferro">Homem de Ferro</option>
            <option name="Doutor Estranho">Doutor Estranho</option>
            <option name="Hulk">Hulk</option>
        </select>
        <input type="submit">
    </form>

</body>
</html>