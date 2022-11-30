<html lang="en">
<link rel="phpref" href="thankyoupage.php">
<head>
    <?php include 'app.php';
    $components = new Components;
    $components->createHead('Feedback');
    include 'db_connect.php';
   
    ?>
     <script>
    function validateForm()
        {
        "use strict";
        var isvalid=true; //bad news is tested first
        
        if(document.getElementById("visitor").value =='') {//getElementByID is a built in method value is the proporty or whats in the box, quotes means is it empty? in the document go and grab the element or its id, and grab its value compared to the empty strings
            //style is css you cant use hyphen in javascript
        
        document.getElementById("visitor").style.borderColor="red";
        document.getElementById("visitor").style.backgroundColor="pink";
        isvalid=false; // boolean so it doesn't advance
        
        }
        else {
                        isvalid = true; //isn't necessary
                        document.getElementById("visitor").style = null;
             }
        console.log("Is name ok?" + isvalid);
    return (isvalid);
                                 }
                                 
                                 </script>

</head>
    
    
    <form action ="thankyoupage.php" method = "POST"
      onsubmit ="return validateForm();">

    
    
    <body>
         <img src="images/logo.png" width="250px" height="150px" class="imgFeedback">
			<h2 class = "titleFeedback"> <!-- add bottom border to this -->
                We appreciate your feedback for Instill
			</h2>
		
   <div class= "containerFeedback" > 
         <br>  Enter your name 
         <input type ="text" id="visitor" name ="visitor"
                   placeholder="Required Entry" >
         <span class="astric"> * </span>

     <br>      <br>

		<!-- Lesson number form-->
			How many lessons did you complete? 
			<input type ="number" id="lessonNum" name ="lessonNum" min ="0" max ="100" step ="1"
                       value ="6" style = "margin-bottom: 20px;" >
<br>

		<!-- Date documenting when they visited -->
            When did you start learning with Instill?
            <input type = "date" id="" name = "vdate" />
            <span class="astric"> * </span><br />
            <p id="errorMessage"></p>


		<!-- Field Set for best page -->
        <fieldset>
        <legend style="color: #4596B5" "font-weight: 600" ><h3>Which page was of most benefit for your learning experience - Have to Select one</h3></legend>
        <input type="radio" name="fplace" value="courses" id="crs"><label for="crs">Courses</label><br>
        <input type="radio" name="fplace" value="quizzes" id="qzz"><label for = "qzz">Quizzes</label><br>
        <input type="radio" name="fplace" value="explore" id="exp"><label for = "exp">Explore</label><br>
        <input type="radio" name="fplace" value="resources"  id="rsc" ><label for ="rsc">Resources</label><br>
        <input type="radio" name="fplace" value="exercises"  id="ex" ><label for ="ex">Exercises</label><br>
        </fieldset>



		<!-- Scrollbar for raiting -->
		<h3><br>On a scale of 1-10, how likely are you to recommend Instill to a friend?<br></h3>
		<p>0
		<input type="range" name="rating" min="0" max="10" step="1" list="set">
		<datalist id = "set">
		<option>0</option>
		<option>1</option>
		<option>2</option>
		<option>3</option>
		<option>4</option>
		<option>5</option>
		<option>6</option>
		<option>7</option>
		<option>8</option>
		<option>9</option>
		<option>10</option>
		</datalist>
		10</p>

       <h3> <br> Would you use Instill again?</h3>
       <input type= "checkbox" id="pa" name="yes" value="yes">  <label for = "pa">Yes</label><br>
       <input type= "checkbox" id="mo" name="ne" value="no">  <label for = "mo">No</label><br> <br>
       
		<div id="button">
			<input class= "buttonFeedback" type = "submit" VALUE = "submit"  >
            <input type ="reset">
            
		</div>
       
    
         </div>
        </body>
       
       


</form>
     

</html>
