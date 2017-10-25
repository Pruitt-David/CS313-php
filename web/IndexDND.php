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
            
            <input type="text" id="txtName" name="txtName"> 
            <label for="txtName">Name</label><br/>
            Class<input type="text" id="txtClass" name="txtClass"> 
            
            Level<input type="text" id="txtLevel" name="txtLevel"> 
            
            Race<input type="text" id="txtRace" name="txtRace"> 
            
            Alignment<input type="text" id="txtAlignment" 
                            name="txtAlignment"> 
            
            STR<input type="text" id="txtSTR" name="txtSTR"> 
            
            DEX<input type="text" id="txtDEX" name="txtDEX"> 
            
            CON<input type="text" id="txtCON" name="txtCON"> 
            
            INT<input type="text" id="txtINT" name="txtINT"> 
            
            WIS<input type="text" id="txtWIS" name="txtWIS"> 
            
            CHA<input type="text" id="txtCHA" name="txtCHA"> 
            
            
            Acrobatics<input type="text" id="txtAcrobatics" 
                             name="txtAcrobatics"> 
            
            Animal Handling<input type="text" id="txtAnimalHandling" 
                                  name="txtAnimalHandling"> 
           
            Arcana<input type="text" id="txtArcana" name="txtArcana"> 
           
            Athletics<input type="text" id="txtAthletics" 
                            name="txtAthletics"> 
            Deception<input type="text" id="txtDeception" 
                            name="txtDeception"> 
           
            History<input type="text" id="txtHistory" name="txtHistory"> 
            
            Insight<input type="text" id="txtInsight" name="txtInsight"> 
           
            Intimidation<input type="text" id="txtIntimidation" 
                               name="txtIntimidation"> 
           
            Medicine<input type="text" id="txtMedicine" name="txtMedicine">
             
           
            Nature<input type="text" id="txtNature" name="txtNature"> 
            
            Perception<input type="text" id="txtPerception" 
                             name="txtPerception"> 
           
            Performance<input type="text" id="txtPerformance" 
                              name="txtPerformance"> 
           
            Persuasion<input type="text" id="txtPersuasion" 
                             name="txtPersuasion"> 
           
            Religion<input type="text" id="txtReligion" name="txtReligion">
             
           
            Sleight of Hand<input type="text" id="txtSleightOfHand" 
                                  name="txtSleightOfHand"> 
           
            Stealth<input type="text" id="txtStealth" name="txtStealth"> 
          
            Survival<input type="text" id="txtSurvival" name="txtSurvival">
             
          
            HitDie<input type="text" id="txtHitDie" name="txtHitDie"> 
            Speed<input type="text" id="txtSpeed" name="txtSpeed"> 
            Weapon<input type="text" id="txtWeapon" name="txtWeapon"> 
            Damage<input type="text" id="txtDamage" name="txtDamage"> 
            Damage Type<input type="text" id="txtDamageType" 
                              name="txtDamageType"> 
            
            Armour<input type="text" id="txtArmour" name="txtArmour"> 
            Armour Class<input type="text" id="txtArmourClass" 
                               name="txtArmourClass"> 
            
            Money<input type="text" id="txtMoney" name="txtMoney">        
            
            <input type="submit">
        </form>
    </body>
</html>