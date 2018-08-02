<html>
    <head>
        <title>Sign up</title>
    </head>
    <body>
        <form action="/register" method="post" id="userform">
            Email: <input type="text" name="email"> <br>
            Password: <input type="password" name="password"> <br>
            Name: <input type="text" name="name"> <br>
            Country: <select name="country" form="userform">
                        @foreach($countries as $country)
                            <option value="{{$country->id}}">{{$country->name}}</option>
                        @endforeach
                    </select> <br>
            Company: <input type="text" name="company"> <br>
            
            {{ csrf_field() }}
            <button type="submit">Sign up</button>
        </form>
    </body>
</html>