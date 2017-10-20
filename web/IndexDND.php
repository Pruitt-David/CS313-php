<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>David Pruitt's Dungeon and Dragons Page</title>
    </head>
    <body>
        <a href="homepage.html">Click here to return to homepage
        </a>
        <h1>David Pruitt's Dungeon and Dragons Page</h1>
        <?php
            require 'dnd.php';
        ?>
        
        <p>Create a new Character</p>
        <form id="mainForm" action="insertCharacter.php" method="post">
            <input type="text" id="txtBook" name="txtBook">
            <label for="txtBooK">Book</label>

        
            <input type="text" id="txtChapter" name="txtChapter">
            <label for="txtChapter">Chapter</label>
 

            <input type="text" id="txtVerse" name="txtVerse">
            <label for="txtVerse">Verse</label>


            <label for="txtContent">Content:</label>
            <textarea id="txtContent" name="txtContent" rows="4" cols="50"></textarea>
            
            <label>Topics:</label>
            
        </form>
    </body>
</html>