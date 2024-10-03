<!DOCTYPE html>
<html>
	<head>
  		<meta charset="utf-8">
  		<meta name="generator" content="AlterVista - Editor HTML"/>
  		<title>D's Story Homepage</title>
  		<link rel="stylesheet" type="text/css" href="/style.css" />
        <script>
        let firstName, lastname, middleIni, nkName, age, bday, gender, ethnicity, sclClass, sexuality, brthPlace, species, likes, dislikes, occupation, posTrait, negTrait, hobbies, strengths, weaknesses, status, height, weight, hairClr, hairstyl, facialHair, markings, scars, eyeClr, eyeWear, skinTone, fingers, hands, domHand;
        
        </script>
	</head>
	<body>
    	<?php 
        	//Code to avoid Scripting
            function sanitize_input($input){
            	$input = trim($input);
                $input = htmlspecialchars($input);
                return $input;
            }
        ?>
    
		<div id= "title"> 
        	<h1 id='top'>Welcome to D's Story Hub</h1>
        </div>
        
        <!-- 
		Nav Bar aka Story column
		-->
		<div id= "storyNav">
			<p>
            	<a class="readLinks" href="/Story_CharacterCreation/CreateChar.php">Create a Character</a>
            	<span class='category'>Original Stories</span><br/>
                <a class='titles' href="#tempest">Tempest's Embrace</a><br/>
            	<a class='titles' href="#ShBro">Shattered and Broken</a><br/>
                <a class='titles' href="#LLD">Love, Life, and Duty</a><br/>
                <a class='titles' href="#LNF">The Lost But Never Found</a><br/>
                <a class='titles' href="">Hidden In The Dark</a><br/>
                <a class='titles' href="#TheInBTWN">The In-Between</a><br/>
                <span class='category'>Fanfictions</span><br/>
                <a class='titles' href="#Takashi">Takashi (Mori) X Reader</a><br/>
                <a class='titles' href="#Untitled">Untitled</a><br/>
            </p>
		</div>
        
        <!-- Chapter nav column not included on homepage
        <div style="width: 10%; margin-left:10px; background-color:salmon; color:blue; float:left; text-align:center; line-height:2;">
			<p>Chapters <br/>
		</div>
        -->
        
        
        <!-- 
		chapter contents
		
		<br/><br/><br/><br/>
		-->
		<div id="homeContent">
        
        	<form style="font-size:25px; margin-left:30px;">
            <fieldset>
        	<legend style="font-size:32px">Basic Info</legend>
            	 <!-- <h2>Basic Info</h2><br> -->
				First Name: <input type="text" name="firstName"size="14"><br>
				Last Name: <input type="text" name="lastName" size="14"><br>
                Middle Initial: <input type="text" name="middleInitial" size="1"><br>
                NickName: <input type="text" name="nickName" size="14"><br>
				Age: <input type="text" name="age" size="3"><br>
				Birthday: <input type="date" name="birthDay"><br>
                Gender: <input type="radio" name="gender">Female&nbsp;&nbsp;
                		<input type="radio" name="gender">Male<br>
                Ethnicity: <input type="text" name="ethnicity"size="14"><br>
				Social Class:<input type="text" name="socialClass"size="14"><br>
                Sexuality: <select name="sexuality">
                			<option value="aroace">Aromantic Asexual</option>
                            <option value="aromantic">Aromantic</option>
                            <option value="asexual">Asexual</option>
                            <option value="bi">Bisexual</option>
                            <option value="demi">Demisexual</option>
                            <option value="hetero" selected>Heterosexual</option>
                            <option value="homo">Homosexual</option>
                            <option value="lesbian">Lesbian</option>
                            <option value="omni">Omnisexual</option>
                            <option value="pan">Pansexual</option>
                		   </select><br>
                Place of Birth:<input type="text" name="birthPlace"><br>
                Species:<input type="text" name="species"><br><br>
               
                <fieldset>
                <legend style="font-size:32px">Likes</legend>
                
                	<table style="width:100%;font-size:23px">
                      	<tr>
                        	<td><input type="checkbox" name="likes" value="bees">Bees&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="candleMaking">Candle making&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="comicBooks">Comic Books&nbsp;&nbsp;&nbsp;</td>
                            
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="tutoring">Tutoring&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="gardening">Gardening&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="writing">Writing&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="scrapbooking">Scrapbooking&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="scavengerHunts">Scavenger Hunts&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="fishing">Fishing&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="interiorDecorating">Interior Decorating&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="mixology">Mixology&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="blanketForts">Blanket Forts&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="reading">Reading&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="skiing">Skiing&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="rollerSkating">Roller skating&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="iceSkating">Ice Skating&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="webDesign">Web Design&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="dancing">Dancing&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="listeningToMusic">Listening to Music&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="lockpicking">Lockpicking&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="history">History&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="standUpComedy">Stand-up Comedy&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="tarot">Tarot&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="painting">Painting&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="gaming">Gaming&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="sculpting">Sculpting&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="drawing">Drawing&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="photography">Photography&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="cooking">Cooking&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="baking">Baking&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="astronomy">Astronomy&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="astrology">Astrology&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="tattoos">Tattoos&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="piercings">Piercings&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="hauntedHouses">Haunted Houses&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="trains">Trains&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="traveling">Traveling&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="rockClimbing">Rock Climbing&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="weightLifting">Weight Lifting&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="yoga">Yoga&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="beaches">Beaches&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="camping">Camping&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="hiking">Hiking&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="sports">Sports&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="dogs">Dogs&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="cats">Cats&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="snakes">Snakes&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="surfing">Surfing&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="cemeteries">Cemeteries&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="birds">Birds&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="martialArts">Martial Arts&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="archery">Archery&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="fencing">Fencing&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="graveRobbing">Grave Robbing&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="likes" value="hunting">Hunting&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="funerals">Funerals&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="likes" value="other">Other&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                      </table>
                </fieldset>
                <br>
   
               <fieldset>
               <legend style="font-size:32px">Dislikes</legend>
                <table style="width:100%;font-size:23px">
                      	<tr>
                        	<td><input type="checkbox" name="dislikes" value="spiders">Spiders&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="closedSpaces">Closed Spaces&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="heat">Heat&nbsp;&nbsp;&nbsp;</td>
                            
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="hiccups">Hiccups&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="complaining">Complaining&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="crowds">Crowds&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="funerals">Funerals&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="runningErrands">Running Errands&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="acne">Acne&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="mazes">Mazes&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="necromancy">Necromancy&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="hangNails">Hangnails&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="paperCuts">Papercuts&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="legos">Legos&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="cleaning">Cleaning&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="pranks">Pranks&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="flashMobs">Flash mobs&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="riddles">Riddles&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="snoring">Snoring&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="coldFries">Cold Fries&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="sockSandal">Socks w/ sandals&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="ketchup">Ketchup&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="rubixCube">Rubix Cube&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="facialHair">Facial Hair&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="holidays">Holidays&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="cold">Cold&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="vacations">Vacations&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="gaming">Gaming&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="farting">Farting&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="openSpaces">Open spaces&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="beingLate">Being late&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="butterflies">Butterflies&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="hotBath">Hot baths&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="music">Music&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="rejection">Rejection&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="darkness">Darkness&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="peace">Peace&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="awkwardness">Awkwardness&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="honesty">Honesty&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="actsOfKindness">Acts of kindness&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="singing">Singing&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="travel">Traveling&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="clutter">Clutter&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="laughter">Laughter&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="family">Family&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="basements">Basements&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="clowns">Clowns&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="compliments">Compliments&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="screaming">Screaming&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="dodgeball">Dodgeball&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="massage">Massages&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="freeStuff">Free stuff&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="affection">Affection&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="attic">Attics&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                        <tr>
                        	<td><input type="checkbox" name="dislikes" value="hospitals">Hospitals&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="children">Children&nbsp;&nbsp;&nbsp;</td>
                            <td><input type="checkbox" name="dislikes" value="other">Other&nbsp;&nbsp;&nbsp;</td>
                        </tr>
                      </table>
                  </fieldset><br>
                Occupation:<input type="text" name="occupation"><br><br>
                Positive Personality Traits:<br><textarea rows="5" cols="75" name="posTraits"></textarea><br><br>
                Negative Personality Traits:<br><textarea rows="5" cols="75" name="negTraits"></textarea><br><br>
                Hobbies:<br><textarea rows="3" cols="75" name="hobbies"></textarea><br><br>
				Strengths:<br><textarea rows="5" cols="75" name="Strength"></textarea><br><br>
                Weaknesses:<br><textarea rows="5" cols="75"></textarea><br><br>
           </fieldset>
           <br>
                <fieldset>
                <legend style="font-size:32px">Physical Traits + Appearance</legend>
                Status: <input type="radio" name="staus" value="dead">Dead&nbsp;&nbsp;<input type="radio" name="status" value="alive">Alive<br>
                Height: <input type="text" size="5" name="height"><br>
                Weight (lbs.): <input type="text" size="3" name="weight"><br>
                Hair Color: <input type="color" name="hairColor" size="14"><br> 
                Hair Style: <input type="text" size="12" name="weight"><br><br>
                Facial Hair: <input type="radio" name="facialHair" value="no">No&nbsp;&nbsp;<input type="radio" name="facialHair" value="yes">Yes <!-- (if yes add php if statement) --><br>
                Markings: (ie tribal)(yes/no php if statement)<br>
                Scars:(yes/no php if statement)<br>
                Eye Color: <input type="color" name="eyeColor"size="14"><br>
                <!-- Include an option for Vision standards like 20/20 or near-sighted etc. -->
                
				Eyewear: <input type="radio" name="eyeWear" value="glasses">Glasses&nbsp;&nbsp;
                		<input type="radio" name="eyeWear" value="contacts">Contacts&nbsp;&nbsp;
                        <input type="radio" name="eyeWear" value="none">None<br>
                Skin Tone:<input type="color" name="skinTone" size="14"><br><br>
                Fingers: <input type="text" name="age" size="2"><br>
                Hands: <input type="text" name="age" size="2"><br>
                Dominant Hand: <!--(if more than two hands add Specify as an option) --> <input type="radio" name="domHand" value="left">Left&nbsp;&nbsp;
                		<input type="radio" name="domHand" value="right">Right&nbsp;&nbsp;<br>
              <!--  Birthmarks:<br>
                Tattoos:<br>
                Piercings:<br>
                Teeth (Straight, crooked, missing):<br>
                Sense of Fashion:<br>
               	Health (disabilities, illnesses, conditions):<br>
                Allergies:<br>
                Shoes Size:<br>
			<br><br> -->
            <!-- ><h1 style="test-align:center; color:black;font-weight:bold"></h1> -->
			<input type="submit">
            </fieldset>
            </form>
        </div>
	</body>
</html>
