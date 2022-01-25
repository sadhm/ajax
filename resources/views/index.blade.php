<html>
<head>
    <title>Ajax Example</title>

    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
    </script>

    <script>
        $(document).ready(function () {
            $('#msg').click(function() {
                //var $button = $(this).find('button');
                $.ajax({
                    type:'POST',
                    url:'{{route('gettext')}}',
                    data:'_token = <?php echo csrf_token() ?>',
                    success:function(data){
                     //   $("#msg").html(data.msg);

                    }
                });
            });
        })
    </script>
</head>

<body>

<form id="ajax">
    @csrf
    <button type="button"  id="msg">click me</button>
</form>

</body>

</html>
