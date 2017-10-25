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
            
            Name<input type="text" id="txtName" name="txtName"> 
            <label for="txtName"></label><br/>
            Class<input type="text" id="txtClass" name="txtClass"> 
            <label for="txtClass"></label><br/>
            Level<input type="text" id="txtLevel" name="txtLevel"> 
            <label for="txtLevel"></label><br/>
            Race<input type="text" id="txtRace" name="txtRace"> 
            <label for="txtRace"></label><br/>
            Alignment<input type="text" id="txtAlignment" 
                            name="txtAlignment"> 
            <label for="txtAlignment"></label><br/>
        
            STR<input type="text" id="txtSTR" name="txtSTR"> 
            <label for="txtSTR"></label><br/>
            DEX<input type="text" id="txtDEX" name="txtDEX"> 
            <label for="txtDEX"></label><br/>
            CON<input type="text" id="txtCON" name="txtCON"> 
            <label for="txtCON"></label><br/>
            INT<input type="text" id="txtINT" name="txtINT"> 
            <label for="txtINT"></label><br/>
            WIS<input type="text" id="txtWIS" name="txtWIS"> 
            <label for="txtWIS"></label><br/>
            CHA<input type="text" id="txtCHA" name="txtCHA"> 
            <label for="txtCHA"></label><br/>
            
            Acrobatics<input type="text" id="txtAcrobatics" 
                             name="txtAcrobatics">
            <label for="txtAcrobatics"></label><br/>
            
            Animal Handling<input type="text" id="txtAnimalHandling" 
                                  name="txtAnimalHandling"> 
           <label for="txtAnimalHandling"></label><br/>
            
            Arcana<input type="text" id="txtArcana" name="txtArcana"> 
            <label for="txtArcana"></label><br/>
            Athletics<input type="text" id="txtAthletics" 
                            name="txtAthletics">
            <label for="txtAthletics"></label><br/>
            
            Deception<input type="text" id="txtDeception" 
                            name="txtDeception"> 
            <label for="txtDeception"></label><br/>
           
            History<input type="text" id="txtHistory" name="txtHistory"> 
            <label for="txtHistory"></label><br/>
            Insight<input type="text" id="txtInsight" name="txtInsight"> 
           <label for="txtInsight"></label><br/>
            Intimidation<input type="text" id="txtIntimidation" 
                               name="txtIntimidation"> 
           <label for="txtIntimidation"></label><br/>
            Medicine<input type="text" id="txtMedicine" name="txtMedicine">
             <label for="txtMedicine"></label><br/>
           
            Nature<input type="text" id="txtNature" name="txtNature"> 
            <label for="txtNature"></label><br/>
            Perception<input type="text" id="txtPerception" 
                             name="txtPerception"> 
           <label for="txtPerception"></label><br/>
            Performance<input type="text" id="txtPerformance" 
                              name="txtPerformance"> 
           <label for="txtPerformance"></label><br/>
            Persuasion<input type="text" id="txtPersuasion" 
                             name="txtPersuasion"> 
           <label for="txtPersuasion"></label><br/>
            Religion<input type="text" id="txtReligion" name="txtReligion">
             <label for="txtRelgion"></label><br/>
           
            Sleight of Hand<input type="text" id="txtSleightOfHand" 
                                  name="txtSleightOfHand"> 
           <label for="txtSleightOfHand"></label><br/>
            Stealth<input type="text" id="txtStealth" name="txtStealth"> 
          <label for="txtStealth"></label><br/>
            Survival<input type="text" id="txtSurvival" name="txtSurvival">
             <label for="txtSurvival"></label><br/>
          
            HitDie<input type="text" id="txtHitDie" name="txtHitDie">
            <label for="txtHitDie"></label><br/>
            Speed<input type="text" id="txtSpeed" name="txtSpeed">
            <label for="txtSpeed"></label><br/>
            Weapon<input type="text" id="txtWeapon" name="txtWeapon">
            <label for="txtWeapon"></label><br/>
            Damage<input type="text" id="txtDamage" name="txtDamage">
            <label for="txtDamage"></label><br/>
            Damage Type<input type="text" id="txtDamageType" 
                              name="txtDamageType"> 
            <label for="txtDamageType"></label><br/>
            
            Armour<input type="text" id="txtArmour" name="txtArmour">
            <label for="txtArmour"></label><br/>
            Armour Class<input type="text" id="txtArmourClass" 
                               name="txtArmourClass"> 
            <label for="txtArmourClass"></label><br/>
            
            Money<input type="text" id="txtMoney" name="txtMoney">        
            <label for="txtMoney"></label><br/>
            <input type="submit">
        </form>
    </body>
</html>