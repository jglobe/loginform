<html>
<body>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<form action="function.php" method="post" id="form-login">
    <label for="login">Login:</label><input name="login" type="text"><br>
    <label for="login">Password:</label><input name="password" type="password">
    <input type="button" id="js-sub" value="Login">
    <input type="hidden" name="log">
</form>
<p id="js-answer"></p>
<script>
    $(document).on('click', '#js-sub',function(){
        $.ajax({
            method: "POST",
            url: "function.php",
            data: $("#form-login").serialize()
        })
            .done(function( data ) {
                if (data.hasOwnProperty('success') && data.success == true && data.hasOwnProperty('message')){
                    $('#js-answer').text(data.message);
                }
            });
    });
</script>
<body>
</html>