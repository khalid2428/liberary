<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <link rel="stylesheet" type="text/css" href="css/csssignup.css" >
    <title>Sign Up </title>
</head>
<body>
    
    <header>
    <h1>Tell us  About YourSilf </h1>
    </header>
    
    
    <div class="main-div">
        <p>Fill In Fact Information About Your Self</p>
    
        <form action="index.php" method="post">
            <div class="form-rows">
     <div class="labels">
        <label for="First Name" id="name-label">First Name</label>
         </div>
        <div class="fields">
    <input type="text" name="name" id="name" class="input-fields" placeholder="Enter  your First name"><br>
        </div> 
            </div>
        <div class="form-rows">
            <div class="labels">
         <label for=" names" id="Last name">Last name</label>
                </div>
            <div class="fields">
      <input type="text" name="name" class="input-fields" placeholder="Enter  your Last name"><br>
                </div>
            </div>
        <div class="form-rows">
            <div class="labels">
         <label for="E-mail" id="email"  >E-mail</label>
                </div>
            <div class="fields">
    <input type="email" name="email" id="email " class="input-fields" placeholder="E-mail"><br>
           </div>
            </div>
            
            <div class="form-rows">
            <div class="labels">
         <label for=" password" id="password">password</label>
                </div>
            <div class="fields">
      <input type="password" name="password" class="input-fields" placeholder="Enter  your password"><br>
                </div>
            </div>
            
            <div class="form-rows">
            <div class="labels">
         <label for=" password" id="password">re enter your pass password</label>
                </div>
            <div class="fields">
      <input type="password" name="password" class="input-fields" placeholder="re enter your pass password"><br>
                </div>
            </div>
    
            
            
            <div class="form-rows">
   <div  class="labels">
            <label for="Gender">Gender </label>
          </div>
        <div class="fields">
           <ul  style="list-style: none;" id="Gender" >
              <li class="radio">
                <label>
                  Male
                  <input type="radio" name="gender"  class="radio-input">
                </label>
              </li>
                <li class="radio">
                <label>
                  Femaile
                  <input type="radio" name="gender"  class="radio-input">
                </label>
              </li>
            </ul>
                </div>
            </div>
               
            
            
            
            <div class="form-rows">
            <div class="labels">
         <label for=" Date of Birth" id="Date of Birth">Date of Birth</label>
                </div>
            <div class="fields">
             <input type="date" name="date" id="Date of Birth" class="input-fields" > <br> 
            </div>
        </div>
    
        
         <div class="form-rows">
            <div class="labels">
         <label for="Place of barth" id="Place of Birth">Place of barth</label>
                </div>
            <div class="fields">
             <input type="text" name="text" id="Place of Birth" class="input-fields"><br> <br> 
            </div>
        </div>
    
        
        
         <div class="form-rows">
            <div class="labels">
         <label for="Phone number" id="Your phone numbe">Phone number</label>
                </div>
            <div class="fields">
             <input type="tel" name="number" id="Phone number" class="input-fields" > <br> 
            </div>
        </div>
    
    <div class="form-rows">
   <div class="labels">
            <label for="Educational Level">Educational Level</label>
          </div>
        <div class="fields">
           <ul id="time-of-day" style="list-style: none;">
              <li class="radio">
                <label>
                  Kindergarten
                  <input type="radio" name="education"  value="1" class="radio-input">
                </label>
              </li>
                <li class="radio">
                <label>
                  Basis
                  <input type="radio" name="education"  value="2" class="radio-input">
                </label>
              </li>
                <li class="radio">
                <label>
                  Secondary
                  <input type="radio" name="education"  value="3" class="radio-input">
                </label>
              </li>
                <li class="radio">
                <label>
                  University
                  <input type="radio" name="education"  value="4" class="radio-input">
                </label>
              </li>
                <li class="radio">
                <label>
                  Master
                  <input type="radio" name="education"  value="5" class="radio-input">
                </label>
              </li>
                <li class="radio">
                <label>
                 Doctorate or PHD 
                  <input type="radio" name="education"  value="6" class="radio-input">
                </label>
              </li>
            </ul>
               </div>
        </div>
            
       
        
    <input type="submit" class="button" id="submit" value="save"> 
    
    </form>
        </div>
</body>
</html>