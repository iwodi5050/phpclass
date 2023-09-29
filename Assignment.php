<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form assignment</title>


</head>


   
<body> 
    
      <form action="" method="POST">
        
             <label for="name">name</label>
             <input type="text" name="name" id="name">
             <br>

              <label for="secondname">secondname</label>
                <input type="text" name="secondname" id="secondname">
                <br>

                <label for="surname">surname</label>
                <input type="text" name="surname" id="surname">
                <br>

                <label for="phone_number">phone number</label>
                <input type="textarea" name="phonenumber" id="phonenumber">
                <br>
            
                <label for="dob">dob</label>
                <input type="date" name="dob" id="dob">
                <br>

                <label for="school">school</label>
                <select name="school" id="school">
                    <option value="uni abuja">Unin abuja</option>
                    <option value="uni zik">Uni zik</option>
                    <option value="awka poly">Awka poly</option>
                    <option value="Bsu">Bsu</option>
                    <option value="unical">Unical</option>
                </select>
                    <br>
                  <label for="levels">levels</label>
              <select name="levels" id="levels"> 
                    <option value="100l">100l</option>
                    <option value="200l">200l</option>
                    <option value="300l">300l</option>
                    <option value="400l">400l</option>
                    <option value="500l">500l</option>
                    <option value="final year">final year</option>
             </select>
                    <br>

                     <button type="button" name="submith" id="submith">submith</button> 

                    <br>
                    <br>
                    <br>
       </form>

      <!-- <form action="" method="GET">
        <label for="">identity</label>
        <input type="text" name="identity" id="identity">
        
      </form> -->
         
       

     <?php
        // $identity=$_GET["identity"];
        // if($identity=="jacob"){
        //     print("hello come in");
        // }else{
        //     print("no way you are not a member");
        // } 

       
       if(isset($_POST["submith"])) { 
         $name = $_POST['name'];
        $secondname= $_POST['secondname'];
        $surname= $_POST['surname'];
        $phonenumber= $_POST['phonenumber'];
        $dob= $_POST['dob'];
        $school= $_POST['school'];
        $level= $_POST['level'];
        
        
        print "wellcom $name";
        
      }    
      else{
        print ("relog in please");
       }
    

      //  function
      echo multiply(5,7);
      function multiply($one,$two) {
           return $one * $two;
      } 
    

      multiply_print(5,10);
      function multiply_print($goat,$cat) {
        echo $goat * $cat;
      }
      function print_info(array $info){
        print_r($info);
      }
      print_info(array('name'=>'clever Techie'));

    
    ?>

</body>
</html>