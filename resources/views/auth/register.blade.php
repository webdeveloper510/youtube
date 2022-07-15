<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
	<div class="container">
      
        <div class="row">
            <div class="col"></div>
            <div class="col-md-6">

                <form>
                    <tr>
                        <td>username</td>
                        <td>
                            <input type="text"  class="form-control" name="name" id="name"/>
                            <p id="error_name" class="error-msg" style="color:red; font-size:11px;"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <input type="text"   class="form-control" name="email" id="email"/>
                            <p id="error_email" class="error-msg" style="color:red; font-size:9px;"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Contact</td>
                        <td>
                            <input type="text"  class="form-control" name="contact"  maxlength="10" id="contact"/>
                            <p id="error_contact" class="error-msg" style="color:red; font-size:9px;"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>
                            <input type="text" class="form-control" name="address" id="address"/>
                            <p id="error_address" class="error-msg" style="color:red; font-size:9px;"></p>
                        </td>
                    </tr>
                    <tr>
                        <td>password</td>
                        <td>
                            <input type="password"  class="form-control" name="password" maxlength="5" id="password"/>
                                <p id="error_password" class="error-msg" style="color:red; font-size:9px;"></p>
                        </td>
                    </tr>
                    <tr>
                        <td><button type="button"  class="btn btn-primary" onclick="submit_form(event);" name="submit" value="save"/>Save</td>
                    </tr>
                
                </form>
             
            </div>
            <div class="col"></div>
        </div>



        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
        
        <script>
        function submit_form(event){
        var name = $('#name').val();
        var email = $('#email').val();
        var contact = $('#contact').val();
        var address = $('#address').val();
        var password = $('#password').val();
        var errorIndex = 0;
        
        if(name == ''){
        errorIndex++;
        $('#error_name').html('*This field is required');
        }else{
        $('#error_name').html('&nbsp');
        }
        if(email == ''){
        errorIndex++;
        $('#error_email').html('*This field is required');
        }else{
        $('#error_email').html('&nbsp');
        }
        if(contact == ''){
        errorIndex++;
        $('#error_contact').html('*This field is required');
        }else if(contact.length > 10){
        errorIndex++;
        $('#error_contact').html('Please enter at least '+ 10 +' integer');
        }
        else if(contact.length < 10){
        errorIndex++;
        $('#error_contact').html('Please enter at least '+ 10 +' integer');
        }else{
        $('#error_contact').html('&nbsp');
        }
        if(address == ''){
        errorIndex++;
        $('#error_address').html('*This field is required');
        }else{
        $('#error_address').html('&nbsp');
        }
        if(password == ''){
        errorIndex++;
        $('#error_password').html('*This field is required');
        }else if(password.length > 5){
        errorIndex++;
        $('#error_password').html('Please enter at least '+ 5 +' integer');
        }
        else if(password.length < 5){
        errorIndex++;
        $('#error_password').html('Please enter at least '+ 5 +' integer');
        }
        else{
        $('#error_password').html('&nbsp');
        }	
        if(errorIndex == 0){
        submitajax();
        }
        }
        function submitajax(event){
        var name = $('#name').val();
        var email = $('#email').val();
        var contact = $('#contact').val();
        var address = $('#address').val();
        var password = $('#password').val();
        
        $.ajax({
            
            type: 'post',
            url: '',
            data: {
                'name':name,
                'email':email,
                'contact':contact,
                'address':address,
                'password':password
            },
            success: function (data){
                var result = JSON.parse(data);
                if(result['success'] == 0){
                    console.log(data);
                }else{
                    console.log(data);
                }
                
            }
        });
        }
        </script>
</body>
</html>