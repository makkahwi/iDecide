<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('htmlHead')

    <style>
        .full-height {
            height: 100vh;
        }
    </style>

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    <a href="{{ url('/') }}"><img src="img/Logo.png" alt=""></a>
                </div>

                <br>

                <h3 class="head-title"><u>Please insert your data</u><br><br></h3>

                <form action="user" method="POST">

                    {{ csrf_field() }}

                    <div class="form-group col-md-6">
                        <input required type="text" class="form-control" name="name" placeholder="First Name">
                    </div>

                    <div class="form-group col-md-6">
                        <input required type="email" class="form-control" name="email" placeholder="Email">
                    </div>

                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success pull-right" style="background-color:#149490; border-color:#149490;">Next</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>