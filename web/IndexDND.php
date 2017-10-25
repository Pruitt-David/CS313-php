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
        <form id="mainform" action="insert.php" method="POST">
            
            Name<input type="text" id="txtName" name="txtName"><br/>
            <label for="txtName">Name</label>
            Class<input type="text" id="txtClass" name="txtClass"><br/>
            
            Level<input type="text" id="txtLevel" name="txtLevel"><br/>
            
            Race<input type="text" id="txtRace" name="txtRace"><br/>
            
            Alignment<input type="text" id="txtAlignment" 
                            name="txtAlignment"><br/>
            
            STR<input type="text" id="txtSTR" name="txtSTR"><br/>
            
            DEX<input type="text" id="txtDEX" name="txtDEX"><br/>
            
            CON<input type="text" id="txtCON" name="txtCON"><br/>
            
            INT<input type="text" id="txtINT" name="txtINT"><br/>
            
            WIS<input type="text" id="txtWIS" name="txtWIS"><br/>
            
            CHA<input type="text" id="txtCHA" name="txtCHA"><br/>
            
            
            Acrobatics<input type="text" id="txtAcrobatics" 
                             name="txtAcrobatics"><br/>
            
            Animal Handling<input type="text" id="txtAnimalHandling" 
                                  name="txtAnimalHandling"><br/>
           
            Arcana<input type="text" id="txtArcana" name="txtArcana"><br/>
           
            Athletics<input type="text" id="txtAthletics" 
                            name="txtAthletics"><br/>
            Deception<input type="text" id="txtDeception" 
                            name="txtDeception"><br/>
           
            History<input type="text" id="txtHistory" name="txtHistory"><br/>
            
            Insight<input type="text" id="txtInsight" name="txtInsight"><br/>
           
            Intimidation<input type="text" id="txtIntimidation" 
                               name="txtIntimidation"><br/>
           
            Medicine<input type="text" id="txtMedicine" name="txtMedicine">
            <br/>
           
            Nature<input type="text" id="txtNature" name="txtNature"><br/>
            
            Perception<input type="text" id="txtPerception" 
                             name="txtPerception"><br/>
           
            Performance<input type="text" id="txtPerformance" 
                              name="txtPerformance"><br/>
           
            Persuasion<input type="text" id="txtPersuasion" 
                             name="txtPersuasion"><br/>
           
            Religion<input type="text" id="txtReligion" name="txtReligion">
            <br/>
           
            Sleight of Hand<input type="text" id="txtSleightOfHand" 
                                  name="txtSleightOfHand"><br/>
           
            Stealth<input type="text" id="txtStealth" name="txtStealth"><br/>
          
            Survival<input type="text" id="txtSurvival" name="txtSurvival">
            <br/>
          
            HitDie<input type="text" id="txtHitDie" name="txtHitDie"><br/>
            Speed<input type="text" id="txtSpeed" name="txtSpeed"><br/>
            Weapon<input type="text" id="txtWeapon" name="txtWeapon"><br/>
            Damage<input type="text" id="txtDamage" name="txtDamage"><br/>
            Damage Type<input type="text" id="txtDamageType" 
                              name="txtDamageType"><br/>
            
            Armour<input type="text" id="txtArmour" name="txtArmour"><br/>
            Armour Class<input type="text" id="txtArmourClass" 
                               name="txtArmourClass"><br/>
            
            Money<input type="text" id="txtMoney" name="txtMoney"><br/>       
            
            <input type="submit">
        </form>
    </body>
</html>