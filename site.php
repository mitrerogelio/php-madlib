<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MadLib Project</title>
</head>
<body>
    <h1>Madlib Project</h1>
    <h2>Fill out questions, then click submit button.</h2>
    <h3>Thank you!</h3>
    <form action="madlib.php" method="get">
        <label for="color">Color</label><br />
        <input type="text" id="color" name="user_color" required="required">
        <br />
        <label for="noun">Plural Noun</label><br />
        <input type="text" id="noun" name="user_noun" required="required">
        <br />
        <p>Favorite Kardashian</p>
            <label for="kim">Kim</label>
            <input type="radio" id="kim" name="user_celebrity" value="Kim">
            <br />
            <label for="kourtney">Kourtney</label>
            <input type="radio" id="kourtney" name="user_celebrity" value="Kourtney">
            <br/>
            <label for="khloe">Khloe</label>
            <input type="radio" id="khloe" name="user_celebrity" value="Khloe">
            <br/>
            <label for="kendall">Kendall</label>
            <input type="radio" id="kendall" name="user_celebrity" value="Kendall">
            <br/>
            <label for="kylie">Kylie</label>
            <input type="radio" id="kylie" name="user_celebrity" value="Kylie">
            <br />    
        <button type="submit">submit</button>            
    </form>    
    <br />
    <br />
    <?php
    $color = $_GET["user_color"];
    $noun = $_GET["user_noun"];
    $celeb = $_GET["user_celebrity"];
    echo "Roses are $color,<br />";
    echo "$noun are blue.<br />";
    echo "My favorite Kardashian is $celeb, but my love is for you."
    ?>
    
    </body>
</html>