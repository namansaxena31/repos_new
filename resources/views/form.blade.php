<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
    function onSubmit(event) {
      document.getElementById("myForm").submit();
    }
  </script>
</head>
<body>
   
    <form action="{{url('/')}}/form" method="post" id="myForm">
        @csrf
        <input type="text" name="name"/><br>
        <span class="text-danger">         
        </span><br>

        <input type="text" name="email"/><br>
        <span class="text-danger">
        </span><br>

        <input type="text" name="gender"/><br>
        <span class="text-danger">
        </span><br>

        <input type="text" name="dob"/><br>
        <span class="text-danger">
        </span><br>

        @include('vendor.captcha.captcha')

        <button action="submit">Submit</button>
    </form>
    
</body>
</html>