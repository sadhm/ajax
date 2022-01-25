<html>
<head>
    <title>Ajax Example</title>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

    <script>
        function getMessage(){
            $.ajax({
                type:'POST',
                url:'/gettext',
                data:'_token = <?php echo csrf_token() ?>',
                success:function(data){
                    $("#msg").html(data.msg);
                }
            });
        }
    </script>
</head>

<body>

<form>
    <button type="button" onclick="getMessage()" id="msg">click me</button>
</form>

</body>

</html>
