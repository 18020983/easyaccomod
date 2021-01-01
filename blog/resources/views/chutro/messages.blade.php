@extends('chutro.webpage')
@section('section')
    <head>
        <title>Chat</title>
    </head>
    <main role="main" class="ml-sm-auto col-lg-10">
    @foreach($messages as $message)
        <p><strong>{{$message->author}}</strong>: {{$message->content}}</p>
        @endforeach

        <div>
            <form action="" method="post">
                @csrf
                <textarea name="content" id="" cols="25" rows="2"></textarea>
                <button type="submit" name="send">Send</button>
            </form>
        </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.3.0/socket.io.js"></script>
    <script> 
        var socket = io('http://localhost:6001');

        socket.on('chat:message', function (data) { console.log(data) })
    </script>

    </main>
@stop()
