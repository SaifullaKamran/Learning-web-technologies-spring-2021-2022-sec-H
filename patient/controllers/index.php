<?php
session_start();
if(isset($_SESSION['flag'])){

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
       
    </head>
    <body>
      <table border="1" width="50%" align="center">

         <tr height="80px">
            <th colspan="3" align="center">Patient Dashboard 
               &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="logout.php">Logout</a></th>
         </tr>

         <tr height="400px">
            <td width="40%">
               <ul>
                  <li><a href="../views/add_blood_type.html">Add Blood Type</a> <br> </li>
                  <li><a href="../views/book_appointment.html">Book Appointment</a><br></li>
                  <li><a href="../views/cancel_appointment.html">Cancel Appointment</a><br></li>
                  <li><a href="../views/download_doctors_list.html">Download Doctors List</a><br></li>
                  <li><a href="../views/download_prescription.html">Download Prescription</a><br></li>
                  <li><a href="../views/see_doctors_status.html">See Doctor's Status</a><br></li>
                  <li><a href="../views/see_prescription.html">See Prescription</a><br></li>
                  <li><a href="../views/select_department.html">Select Department</a><br></li>
                  <li><a href="../views/select_doctor_selected_department.html">Select Doctor Selected Department</a><br></li>
                  <li><a href="../views/upload_medical_history.html">Upload Medical History</a><br></li>
               </ul>
            </td>

            <td></td>

         </tr>
         <tr height="80px">
            <td colspan="3" align="center">copyright@saifulla kamran</td>
         </tr>
        </table>

        </table>
                
                
   
    </body>
</html>

<?php

 }
 else{
    header('location:login.html');
 }

 ?>