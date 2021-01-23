<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

    </head>

    <body class="antialiased">
        <h1>공항 픽업 서비스</h1>
        <form action="{{ route('bookings.store') }}" method="POST">
            @csrf
            <div>
                이름 : <input type="text" name="name">
            </div>
            <div>
                이메일 : <input type="text" name="email">
            </div>
            <div>
                전화번호 : <input type="text" name="phone">
            </div>
            <div>
                날짜 : <input type="text" name="date">
            </div>
            <div>
                시간 : <input type="text" name="time">
            </div>
            <div>
                pick up 장소 : <input type="text" name="picker_address">
            </div>
            <div>
                drop off 장소 : <input type="text" name="dropoff_address">
            </div>
            <div>
                인원 : <input type="text" name="people">
            </div>
            <div>
                flight number : <input type="text" name="flight_number">
            </div>
            <div>
                <textarea name="comment"></textarea>
            </div>
            <button type="submit">예약하기</button>
        </form>
    </body>
</html>