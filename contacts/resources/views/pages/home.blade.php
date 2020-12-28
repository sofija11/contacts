<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
    <body>
        <html>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 ">
                       <h1 class="text-center"> Please log in </h1>
                    </div>
                    
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                     </div>
                    <div class="col-sm-8 text-center">
                        <div>
                            <div class="form-contact">
                                <form action="{{ url('login')}}" method="POST" >
                                    @csrf
                                    <div class="row">
                                        <p>
    
                                            <input type="text"  name="usernameL" id="userL" placeholder="Your username">
                                        <p id='uG'></p>
                                        </p>
    
                                        <p>
                                            <input type="password"  name="passwordL" id="passL" placeholder="Enter password">
                                        <p id='pG'></p>
                                        </p>
                                        <div class="buttonC">
                                            <input type="submit" id="sendLogin"  name="sendL"  class="btn btn-primary" value="LOGIN">
                                        </div>
                                    </div>
                            </div>
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            @if(session('message'))
                                <h2> {{ session('message') }}</h2>
                            @endif
                         </div>
                        </form>
                               
                    </div>
                    <div class="col-sm-2">
                      
                    
                    </div>

                </div>
            </div>
            
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
        </html>
    </body>
</html>