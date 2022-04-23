<?php
session_start();
if(isset($_SESSION['status'])){

?>

<!DOCTYPE html>
<html>
    <head>
      <style>
      table {background-color: lemonchiffon;}
      h1   {color: blue;}
      //h2   {color: red;}
      h3   {color: darkcyan;}


      </style>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </head>
    <body>
      <table border="1" width="50%" align="center">

                     <tr height="80px">
               <th colspan="3" align="center"><h1>Patient Dashboard</h1> 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="../controllers/logout.php"><h2>Logout</h2></a></th>
         </tr>
         
         
      

         <tr height="400px">
            <td width="40%">
               <ul>
                  <li><a href="../views/add_blood_type.html"><p style="color: darkgreen;">Add Blood Type.</p></h3></a> <br> </li>

                  <li><a href="../views/book_appointment.html"><p style="color:darkred;">Book Appointment.</p></a><br></li>

                  <li><a href="../views/cancel_appointment.html"><p style="color:darkgreen;">Cancel Appointment.</p></a><br></li>

                  <li><a href="../views/download_doctors_list.html"><p style="color:darkred;">Download Doctors List.</p></a><br></li>

                  <li><a href="../views/download_prescription.html"><p style="color:darkgreen;">Download Prescription.</p></a><br></li>

                  <li><a href="../views/see_doctors_status.html"><p style="color:darkred;">See Doctor's Status.</p></a><br></li>

                  <li><a href="../views/see_prescription.html"><p style="color:darkgreen;">See Prescription.</p></a><br></li>

                  <li><a href="../views/select_department.html"><p style="color:darkred;">Select Department.</p></a><br></li>

                  <li><a href="../views/select_doctor_selected_department.html"><p style="color:darkgreen;">Select Doctor Selected Department.</p></a><br></li>

                  <li><a href="../views/upload_medical_history.html"><p style="color:darkred;">Upload Medical History.</p></a><br></li>
               </ul>
            </td>

            <td>
              


<h3>Start typing a phone number in the input field below:</h3>

<p>Suggestions: <span id="txtHint"></span></p> 
<p>Phone Number: <input type="text" id="txt1" onkeyup="showHint(this.value)"></p>

<script>
function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "../controllers/searchphnno.php?phone="+str);
  xhttp.send();   
}
</script>


            </td>

         </tr>
         <tr height="80px">
            <td colspan="3" align="center"><b><i><p style="color: red;">copyright@saifulla kamran.</p></i></b></td>
         </tr>
        </table>
        </table>
</html>

<?php

 }
 else{
    header('location:login.html');
 }

 ?>