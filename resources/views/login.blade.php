<hmtl>
    <head>
        <title>Login</title>
    </head>
    <body>
        <form action='/loginn' method="post">
            Email:  <input type='text' name="email"> <br>
            Password: <input type='password' name="password"> <br>
            {{ csrf_field() }}
            <button type="submit">Login</button> <br>
        </form>
        <a href="{{ url('signup') }}">Sign up</a>
    </body>
</html>