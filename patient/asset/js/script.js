function logvalidation(){
     
    var username = document.forms["myForm"]["username"].value;
    var password = document.forms["myForm"]["password"].value;

    if (username  == "" || username .length <= 5 ) {
      
        alert('Name: Null I or less then or equal to 5 digit');
        return false;
    }
   
    
       else if(password == '')
     {
        alert('password : Can not be empty ');
        return false;
    } else
    {return true;
    }
 

}

function signupvalidation(){
     
    var username = document.forms["myForm"]["username"].value;
    var password = document.forms["myForm"]["password"].value;
    var email    = document.forms["myForm"]["email"].value;

   if (username  == "" || username .length <= 5 ) {
      
        alert('Name: Null I or less then or equal to 5 digit');
        return false;
    }
   
    
        else if(password == '') {
        alert('password : Can not be empty ');
        return false;

    }
        else if(email == '')
    {
        alert('email : Null value ');
        return false;
    } 
    else {
        return true;
    }
 }











