<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>payment</title>
    <link rel ="stylesheet" type="text/css" href="payment.css">
</head>
<body style=" background-image: url(image/333.jpg);">
<header>
 
    <div class="container">
        <div class="left">
            <center>
              <h3>Billing Address</h3>
            </center>
            <form>
                Full name
                <br>
                <input type="text" name="" placeholder="Enter Name">
                <br>
                 Email
                 <br>
                 <input type="text" name="" placeholder="Enter Email">
                 <br>
                 
                Address
                <br>
                <input type="text" name="" placeholder="Enter Address">
                <br>
                
                City
                <br>
                <input type="text" name="" placeholder="Enter City">
                <br>
                
                <div id="zip">
                    
                   <label>
                      state
                      <select>
                        <option>choose state..</option>
                        <option>cairo</option>
                        <option>ALex</option>
                        <option>fayom</option>
                        <option>Aswan</option>
                        <option>marsa matrouh</option>
                        <option>hurghada</option>
                        <option>sharm EL-shaikh</option>
                        <option>menoufia</option>
                     </select>
                    </label>
                    
                    <label>
                    Zip code 
                    <input type ="number" name ="" placeholder= "Zip code">
                    </label>
                </div>
            </form>

        </div>
        <div class="right">
            <center>
        <h3>Payment</h3>
</center>
        <form>
               
               
                 Accepted card
                <br>

             <img src ="image/11.png" width ="100">
             <img src ="image/2.jpg" width ="50">
             <br><br>
               credit card number 
                <input type="text" name="" placeholder="Enter card number ">
                <br>
                EXP month 
                <br>
                <input type="text" name="" placeholder="Enter  month ">
                
                <div id="zip">
                    
                   <label>
                      EXP year 
                      <select>
                        <option>choose YEAR..</option>
                        <option>2022</option>
                        <option>2023</option>
                        <option>2024</option>
                        <option>2025</option>
                       
                     </select>
                    </label>
                    
                    <label>
                CVV 
                    <input type ="number" name ="" placeholder= "CVV">
                    </label>
                </div>
            </form>
  
            <input type ="submit" name ="" value ="proceed to checkout ">
            <a href="http://localhost:8081/order/shop.php">proceed to checkout</a>
        </div>
    </div>
</header>
</body>
</html>


