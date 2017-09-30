<?php
    session_start();

$_SESSION[ironman] = '<h2>This is the Ironman Movie</h2>';
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="form.php">
        <title>David Pruitt's Shopping Cart Assignmnet</title>
        <script type="text/javascript" src="function.js"></script>
    </head>
    <body>
        
        <a href="viewCart.html">View Cart</a>
        
        <a href="assignments.html">Back to Assignments</a>
        <h1>David Pruitt's Shopping Cart Assignment</h1>
        <div>
            <br>
            <h2>Marvel Movies</h2>
            <form action="form.php" method="post">                
                <table>
                    <tr>
                        <th>Add to Order</th>
                        <th>Movie Image</th>
                        <th>Description</th>
                    </tr>
                    <td>
                        <input type="checkbox" name="ironman" value="Ironman">
                    </td>
                    <td>
                        <img src="pictures/Ironman.jpg">
                    </td>
                    <td>
                        <p1>Rich man gets hurt by terrorist,
                            and then gives complete retaliation
                            and destroys them all.</p1>
                    </td>
                    <tr>
                        <td>
                            <input type="checkbox" name="ironman2" value="Ironman 2">
                        </td>
                        <td>
                            <img src="pictures/Ironman2.jpg">
                        </td>
                        <td>    
                        <p1>Rich man gets disease decided to party hard and science a lot until he feels better</p1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="ironman3" value="Ironman 3">
                        </td>
                        <td>
                            <img src="pictures/Ironman3.jpg">
                        </td>
                        <td>
                            <p1>Rich man get president out of a hot spot, also makes a spectacular fireworks show.</p1>
                        </td>    
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="cap" value="Captain America">
                        </td>
                        <td>
                            <img src="pictures/Captain%20America.jpg">
                        </td>
                        <td>
                            <p1>Weak 1940s American man, has German scientist expierment on him to defend his country</p1>
                        </td>
                    </tr>   
                    <tr>
                        <td>
                            <input type="checkbox" name="cap2" value="Captain America 2">
                        </td>
                        <td>
                            <img src="pictures/Captain%20America2.jpg">
                        </td>
                        <td>
                            <p1>Super Soldier Vs. Super Soldier with metal arm.</p1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="cap3" value="Captain America 3">
                        </td>
                        <td>
                            <img src="pictures/Captain%20America3.jpg">
                        </td>
                        <td>
                            <p1>Super Soldier decided he want more friends by befriend enemies, or perhaps making new enemies</p1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="thor" value="Thor">
                        </td>
                        <td>
                            <img src="pictures/Thor.jpg">
                        <td>
                            <p1>Son gets exiled from his Fathers kingdom over being to viscious in combat.  Loses his hammer which he can not pick up.</p1>
                        </td>
                    </tr>
                    <tr>
                        
                        <td>
                            <input type="checkbox" name="thor2" value="Thor 2">
                        </td>
                        <td>
                            <img src="pictures/Thor2.jpg">
                        </td>
                        <td>
                            <p1>Hammer mans girlfriend gets possesed by Magic red dust tries to destroy 9 realms of reality.</p1>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox"  name="thor3" value="Thor 3">
                        </td>
                        <td>
                            <img src="pictures/Thor3.jpg">
                        </td>       
                        <td>
                            <p1>Hammer mans hammer gets hammered, Hammer man needs a new hammer.</p1>
                        </td>                                           
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="hulk" value="Hulk">
                        </td>       
                        <td>
                            <img src="pictures/Hulk.jpg">
                        </td>       
                        <td>
                            <p1>Man gets angry, turns green and destroys city.</p1>
                        </td>       
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox"  name="hulk2" value="Hulk 2">
                        </td>       
                        <td>
                            <img src="pictures/Hulk2.jpg">
                        </td>          
                        <td>
                            <p1>Angry man is on the run from the government to keep from getting mad at government.</p1>
                        </td>       
                    </tr>
                    <tr>  
                        <td>
                            <input type="checkbox" name="galaxy" value="Guardians of the Galaxy">
                        </td>          
                        <td>
                            <img src="pictures/Galaxy.jpg">
                        </td>          
                        <td>
                            <p1>Earth man becomes Space man and Saves galaxy from magical rock.</p1>
                        </td>          
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="galaxy2" value="Guardians of the Galaxy 2">
                        </td>          
                        <td>        
                            <img src="pictures/Galaxy2.jpg">
                        </td>          
                        <td>
                            <p1>Formerly Earth man now Spaceman who goes by Star Lord, save Galaxy from Evil planet Father.</p1>
                        </td>          
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="antman" value="Antman">
                        </td>          
                        <td>
                            <img src="pictures/Antman.jpg">
                        </td>          
                        <td>
                            <p1>Small man gets smaller, gets rid of other small men, and steals tech from small men.</p1>
                        </td>          
                    </tr>
                    <tr>          
                        <td>
                            <input type="checkbox"  name="doctorStrange" value="Doctor Strange">
                        </td>          
                        <td>
                            <img src="pictures/Doctor%20Strange.jpg">
                        </td>          
                        <td>
                            <p1>Stange movie about Doctor who is named Strange, gets stange reality check when he learns magic is real.</p1>
                        </td>          
                    </tr>
                    <tr>      
                        <td>    
                            <input type="checkbox" name="avenger" value="The Avengers">
                        </td>          
                        <td>
                            <img src="pictures/Avengers.jpg">
                        </td>          
                        <td>
                            <p1>Group of unlikly heros save new york from space aliens to avenge some guys death.</p1>
                        </td>       
                    </tr>
                    <tr>          
                        <td>
                            <input type="checkbox" name="avenger2" value="The Avengers 2">
                        </td>          
                        <td>
                            <img src="pictures/Avengers2.jpg">
                        </td>          
                        <td>
                            <p1>Rich man teams up with angry man, 1940s supersolider man, hammer man, arrowman, black spider woman man, to defeat richs man artificial man.</p1>
                        </td>                  
                </tr>
                </table>
                <input type="submit">
            </form>
        </div>
    </body>
</html>