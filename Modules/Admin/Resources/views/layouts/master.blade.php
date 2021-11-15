<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Module Admin</title>

       {{-- Laravel Mix - CSS File --}}
       {{-- <link rel="stylesheet" href="{{ mix('css/admin.css') }}"> --}}

    </head>
    <body>
    <nav>
        <span>ADMIN</span>
        <ul>
            <li>
                <a href="admin">Home</a>
            </li>
            <li>
                <a href="admin/user">User</a>
            </li>
            <li>
                <a href="">Log Out</a>
            </li>
        </ul>
    </nav>
        @yield('content')

        {{-- Laravel Mix - JS File --}}
        {{-- <script src="{{ mix('js/admin.js') }}"></script> --}}
    </body>
</html>
