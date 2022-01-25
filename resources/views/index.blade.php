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
                    _token: '{{csrf_token()}}',
                    success:function(){
                       $("#msg").html(data.msg);

                    },
                    error: function (jqXhr, textStatus, errorMessage) {
                        $('p').append('Error: ' + errorMessage);
                    }
                });
            });
        })
    </script>
</head>

<body>

<form id="ajax" method="POST">
    {{ csrf_field() }}
    <button type="button"  id="msg">click me</button>
</form>
<p></p>

</body>

</html>
