<?php
require 'connect.php';
$name = $email = $gender = $website = $comment = '';
$nameErr = $emailErr = $websiteErr = '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (empty($_POST['name'])) {
        $nameErr = "Name is required";
    } else if (preg_match("^[a-zA-Z\s]+$^", $_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $nameErr = "Invalid Name";
    }
    if (empty($_POST['email'])) {
        $emailErr = "Email is required";
    } else if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $email = $_POST['email'];
    } else {
        $emailErr = "Invalid Email";
    }
    if (empty($_POST['website'])) {
        $websiteErr = "website is required";
    } else if (filter_var($_POST['website'], FILTER_VALIDATE_URL)) {
        $website = $_POST['website'];
    
   
    } else {
        $websiteErr = "Invalid URL";
    }
    
     $gender = $_POST['gender'];    
    $comment = $_POST['comment'];
    
    $sql = "INSERT INTO `comments`( `name`, `email`, `gender`, `website`, `comments`) VALUES ('%s','%s','%s','%s','%s')";
$sql = sprintf($sql,$name,$email,$gender,$website,$comment);
$conn->query($sql);
    if($conn->error){
        echo $conn->error;
    }
    
    
   
}
?>


<html>
<head> <title>Bona Libarary</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/css.css">
</head>
<body>
   
    
    <header>
        <div class="nav">
        <ul>
        <li><a href="#">الرئيسية</a></li>
       <li><a href="#">كتب المرحلة الإبتدائية</a></li>
             <li><a href="#">كتب المرحلة المتوسطه</a></li>
            <li><a href="#">كتب المرحلة الثانوية</a> </li>
            <li>
            <a href="#">الكتب الثقافية</a>
            </li>
        <li><a href="#">عن المكتبة  </a></li>
        </ul>
        </div>
    </header>
    
    
    
    <br> <br> <br> <br> <br>
    
    <div class=" row">
    <div class="leftcolumn">
       <div class="column">
       <form  >  
           <input type="search" name="search" placeholder="search">
           <input type="submit" name="Login" value ="search">
<br>
          User name<input type="text" name="User name" placeholder="pleas enter your User name"><br>
          password    <input type="password" name="password" placeholder="pleas enter your password"><br>
           <input type="submit" name="Login" value ="Login">
           <input type="submit" name="Sign up" value ="Sign up"><a href="signup.html">Sign up</a>           
          
       </form>
        </div>
   
    
    <div class="column" >
    <textarea cols="35" rows="15"></textarea>
        <form>
        <input type="button" name="button" value="للتواصل مع مدير المكتبة">
        </form>
    </div>
    </div>
           
           
    <div class="rightcolumn">
        
        
        <div class="column">
           <img src="1.jpg" ><br>
            <p>المفاجأة الالتى ترقبها الكل سيتم بحمد الله توفير جميع الكتب التى تحتوى على المعلومات المتعلقة بتفاصيل الهواتف التى تعمل بمظام أندرويد من حيث معلومات عن كل الإصدارات وكيفية التشغيل وصيانة الأعطال البرمجية وتعلمها و معرفه كل أنواع الشركات المصنه للهواتف وقطع غيارها و تفاصيل المنافسة بينها  </p>
        </div><br>
    <div class="column">
     
            <img src="2.jpg" >
            <p> الى حواء السودانية تم بحمد الله إضافه جميع قصص الكنداكات اللآى حكمن فى السودانية فى جميع العصور منذ عصر الحكم التركى المصرى </p>
        
    </div>
    <br>
    
     <section class="column">
            <img src="3.jpg" >
            <p>سيتم توفير جميع كتب المنقا اليابانية قريبا لذا كونو على تواصل مستمر دائما معنا لتتعرفو على جميع كتب المانقا اليابانية  </p>
       </section>
    
    <br>
     <div class="column">
            <img src="4.jpg" >
            <p>تم توفير جميع الكتب التى تتحدث عن التكنلوجيا وتطويرها فى جميع العصور منذ إختراع الذرة الى تقنيات النانو المستخدمة حديثا فى الصناعات سواء كانت الصغير او الكبيرة او الاليات الثقيلة </p>
           </div>
    
    </div>
    </div>
    <br>
    
     <marquee> تعلن المكته عن مفاجأه خاصة لزبائنها الكرام وهى خدمه تبديل الكتب </marquee>
 
        
        <div class="footer">   
            <h3>للتواصل معنا </h3>
           <ul >
        <li><a href="#">الرئيسة</a></li>
        <li><a href="#">المنشورات العلمية</a></li>
        <li><a href="#">عن الكلية</a></li>
          </ul>
          
            <ul >
            <li><a href="#">المناشط العلمية</a></li>
            <li><a href="#">المناشط الثقافية </a></li>
            <li><a href="#">المناشط الرياضية </a></li>
            </ul>
      
            <ul >
                <li><a href="#">Facebook</a></li>
                <li><a href="#">Twitter</a></li>
                <li><a href="#">Instagram</a></li>
            </ul>
          </div>
    
    
    <h4> جميع الحقوق محفوظه للمكتبة 2022</h4>
    
</body>
</html>