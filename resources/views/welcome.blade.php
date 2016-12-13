<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DecHex</title>

        <!-- Fonts -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <h1>DecHex</h1>
        <form method="post" action='/'>
            {{ csrf_field() }}
            <p>Get you Decimal number converted to hexadecimal!</p>
            <!-- 32bit php ayy -->
            <input placeholder="Enter decimal here" name="dec" type="number" min="0" max="2147483646"/>
            <button type="submit" value="Submit">Submit</button>
        </form>
        <br>
        @if ($post == true)
            <code>Your number: {{ $dec}}</code>
            <br>
            <code>Hex: {{ $hex }}</code>

            <p>Might as well have the binary representaion</p>
            <code>Bin: {{ $bin }}</code>

            <p>Don't forget octal!</p>
            <code>Oct: {{ $oct }}</code>
        @endif
    </body>
</html>
