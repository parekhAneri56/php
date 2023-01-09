<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>JQuery validation</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/gray.css'>
    <script src='js/jqery.js'></script>
    <script src='js/jquery.bvalidator.js'></script>
    <script src='js/default.min.js'></script>
    <script src='js/gray.js'></script>
    <script type="text/javascript">
        $(document).ready(function()
        {
            $("#frm1").bValidator();
        })
        </script>
</head>
<body>
<center>
    <h1>JQuery Validation</h1>
    <br>
    <form method="post" id="frm1">
        <input type="text"  placeholder="Your Name"   name="name" data-bvalidator="required,alpha">
        <br><br>
        <input type="email" name="email" placeholder="Your Email" data-bvalidator="required,email">
        <br><br>
        <input type="text" placeholder="Subject"  name="subject" data-bvalidator="required">
        <br><br>
        <textarea  class="form-control" placeholder="Leave a message here"  name="message" data-bvalidator="required" style="height: 150px"></textarea>
        <br><br>
        <div class="form-group mt-2 col-md-12 mx-auto">
        <button class="btn btn-lg btn-info" type="submit" name="addcontact" > Send Message</button>
        <button type="reset" name="reset" class="btn btn-lg btn-danger"> Reset </button>
    </div>
    </form>
</center>
</body>
</html>