<!doctype html>
<html lang="en">
<head>
    <title>Ajax Example</title>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <script src = "{{url('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')}}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>

<form id="ajax" method="POST">
    @csrf
    <button type="button" class="msg" id="msg">click me</button>
</form>
<p></p>
<script type="text/javascript">

    $(".msg").click(function(){
        $.ajax({
            type:'POST',
            dataType: "json",
            cache: false,
            url:"{{ route('gettext') }}",
            success:function(data){
                $("#msg").html(data.msg);
            },
            error: function (jqXhr, textStatus, errorMessage) {
                $('p').append('Error: ' + errorMessage);
            }
        });

    } );
</script>

</body>

</html>
