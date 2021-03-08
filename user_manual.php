<!--https://www.w3schools.com/howto/howto_js_tabs.asp-->
<?php include "includes/db.php"; ?>
<?php include "includes/header.php"; ?>
    
<!-- navigation -->
<?php include "includes/navigation.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>User manual page  </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<div class="container" style="width:85%; padding-left:10%;padding-bottom:80px; ">
<h1><u>User guide</u></h1>

        <!--link of tab-->
        <div class="tab" style="width:85%; text-align:center;">
            <button class="tablinks" style="width: 30%" onclick="openCity(event, 'Make Appointment')">How to Make Appointment?</button>
            <button class="tablinks" style="width: 37%"  onclick="openCity(event, 'Service Details')">Want to Know More Service Details?</button>
            <button class="tablinks" style="width: 33%" onclick="openCity(event, 'Profile')">What Can Be Done By Profile?</button>
        </div>
    <!--content in the tab-->
    <div id="Make Appointment" class="tabcontent">
          <h2><b>Step 1: Click make appointment button</b></h2>
          <p>You may click the make appointment button on navigation.</p>
          <br>
          <img src="../Online-Bank/images/user_manual/M1.png" alt="M1" width="825" height="425">
          <br>
          <br>
          
          <h2><b>Step 2: Choose a category</b></h2>
        <p>Next, you will reach the category page and choose any one category that you want to make appointment for that.</p>
         <p style="color:red;">*REMINDER: you can go service details tab to know which services under particular categories.*</p>
          <br>
          <img src="../Online-Bank/images/user_manual/M2.png" alt="M2" width="825" height="425">
          <br>
          <br>
          
          <h2><b>Step 3: Choose a service</b></h2>
          <p>Choose a services that you want and click GO button to next page.</p>
          <br>
          <img src="../Online-Bank/images/user_manual/M3.png" alt="M3" width="825" height="425">
          <br>
          <br>
          
          <h2><b>Step 4: Select an option</b></h2>
          <p>Select the 'Yes' option if you want to continue or else select the 'No option to go back the categories page'. After option selected, click the GO button.</p>
          <br>
          <img src="../Online-Bank/images/user_manual/M4.png" alt="M4" width="825" height="425">
          <br>
          <br>
          
          <h2><b>Step 5: Fill out the form</b></h2>
          <p>Fill out the form and click 'Proceed' button to continue the process.</p>
          <br>
          <img src="../Online-Bank/images/user_manual/M5.png" alt="M5" width="825" height="425">
          <br>
          <br>
          
          <h2><b>Step 6: Select an appointment slot </b></h2>
          <p>Choose any one time slot for your appointment and click 'book' to make your appointment. </p>
          <br>
          <img src="../Online-Bank/images/user_manual/M6.png" alt="M6" width="825" height="425">
          <br>
          <br>
          
          <h2><b>Step 7: Successfully appointment</b></h2>
          <p>After your appointment was booked successfully, it will display all your details of appointment and you will receive an email. Moreover, it can cancel the appointment by clicking 'cancel' button. </p>
          <br>
          <img src="../Online-Bank/images/user_manual/M7.png" alt="M7" width="825" height="425">
          <br>
          <br>     
    </div>

    <div id="Service Details" class="tabcontent">
          <h2><b>Step 1: Click service details button</b></h2>
          <p>You may click the service details button on navigation.</p>
          <br>
          <img src="../Online-Bank/images/user_manual/S1.png" alt="S1" width="825" height="425">
          <br>
          <br>
          
          <h2><b>Step 2: Choose a category</b></h2>
          <p>Choose the category that you want to know more and click search button.</p>
          <br>
          <img src="../Online-Bank/images/user_manual/S2.png" alt="S2" width="825" height="425">
          <br>
          <br>
          
          <h2><b>Step 3: Service displayed</b></h2>
          <p>The services under the category will be displayed and you can see the service description for each services.</p>
          <br>
          <img src="../Online-Bank/images/user_manual/S3.png" alt="S3" width="825" height="425">
          <br>
          <br>    
    </div>

    <div id="Profile" class="tabcontent">
          <h2><b>Step 1: Click profile button</b></h2>
          <p>You may click the profile button to know more details.</p>
          <br>
          <img src="../Online-Bank/images/user_manual/P1.png" alt="P1" width="825" height="425">
          <br>
          <br>
          
          <h2><b>Step 2: Personal details</b></h2>
          <p>First one is the Personal details tab. The personal details will be displayed.</p>
          <br>
          <img src="../Online-Bank/images/user_manual/P2.png" alt="P2" width="825" height="425">
          <br>
          <br>
          
          <h2><b>Step 3: Edit details</b></h2>
          <p>This tab is used to edit their personal details by customers.</p>
          <br>
          <img src="../Online-Bank/images/user_manual/P3.png" alt="P3" width="825" height="425">
          <br>
          <br>
          
          <h2><b>Step 4: Upcoming Appointment</b></h2>
          <p>The upcoming appointment will be displayed here.</p>
          <br>
          <img src="../Online-Bank/images/user_manual/P4.png" alt="P4" width="825" height="425">
          <br>
          <br>
          
          <h2><b>Step 5: History of appointment record</b></h2>
          <p>History of appointment record will be displayed here.</p>
          <br>
          <img src="../Online-Bank/images/user_manual/P5.png" alt="P5" width="825" height="425">
          <br>
          <br>    
    </div>
    
</div>

</body>
</html>

<!--for tab-->
<script>
 function openCity(evt, tabName) {
        var i, tabcontent, tablinks;
     //get class content and hide
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
     
     //get tablink and remove class active
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
     
     //show current tab and make it active
        document.getElementById(tabName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>

<?php include "includes/footer.php"; ?>