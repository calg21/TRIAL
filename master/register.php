<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Examination Portal </title>
   <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/gh/guillaumepotier/Parsley.js@2.9.1/dist/parsley.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
       <div class="row">
          <div class="col-md-3">
          
          
          </div>
           <div class="col-md-6" style="margin-top:20px";>
             <span id="meassage"></span>
              <div class="card">
              
                  <div class="card-header"> Admin Registeration  </div>
                  <div class="card-body">
                         <form action="" method="post" id = "admin_register_form">

                               <label >Enter Email Address</label>
                                <input type="text" name="admin_email_Address" id="admin_email_address" class="form-control"   data-parsley-checkemail data-parsley-checkemail-message="email exist"/>
                         
                         <div class="form-group">
                         
                         <label >Enter password</label>
                                <input type="password" name="admin_password" id="admin_password" class="form-control"/>
                         
                         </div>
                         <div class="form-group">
                         
                        
                         
                         <label >Confirm password</label>
                                <input type="password" name="confirm_admin_password" id="confirm_admin_password" class="form-control"/>
                         
                          </div>
                          <div class="form-group">
                           <input type="hidden"  name="page" value="register"/>
                           <input type="hidden"  name="action" value="register"/>
                           <input type="submit"  name="admin_register" id ="admin_register" calss="btn btn-info" value="register"/>

                          
                          </div>
                         </form>

                        <div align="center" class="btn btn-info center">                     
                            <a href="login.php">Login</a>
                        
                        </div>                  
                  
                  </div>
              </div>
           
           
           </div>
            <div class="col-md-3">
            
            
            
            </div>
       
       </div>
    
    
    
    </div>
</body>
</html>
<script>


  $(document).ready(functoin(){
     
    window.ParsleyValidator.addValidator('checkemail',
      validateString : function(value)
      {
          return $.ajax({

    url:"ajax_action.php",
    method:"POST",
    data :{
        page:'register', action:'check-email',
        email:value
    },
    dataType:"jason",
    success:function(data)
        {
       return true;

         }

          });
      }
    
    
    });


  });

  $('#admin_register_form').parsley();
</script>