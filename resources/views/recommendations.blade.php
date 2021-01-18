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

                <h3 class="head-title"><u>Based on given data, we believe that this is the best ranking of recommendations to follow</u><br></h3>

                @if ($itr == 1)
                    @if($archr > $engr)
                        <div class="col-md-4">
                            <h4>1. ICT</h4>
                        </div>

                        <div class="col-md-4">
                            <h4>2. Architecture</h4>
                        </div>

                        <div class="col-md-4">
                            <h4>3. Engineering</h4>
                        </div>
                    @else
                        <div class="col-md-4">
                            <h4>1. ICT</h4>
                        </div>

                        <div class="col-md-4">
                            <h4>2. Engineering</h4>                    
                        </div>

                        <div class="col-md-4">
                            <h4>3. Architecture</h4>
                        </div>
                    @endif
                @elseif ($itr == 2)
                    @if($archr > $engr)
                        <div class="col-md-4">
                            <h4>1. Architecture</h4>
                        </div>

                        <div class="col-md-4">
                            <h4>2. ICT</h4>
                        </div>

                        <div class="col-md-4">
                            <h4>3. Engineering</h4>
                        </div>
                    @else
                        <div class="col-md-4">
                            <h4>1. Engineering</h4>
                        </div>

                        <div class="col-md-4">
                            <h4>2. ICT</h4>
                        </div>

                        <div class="col-md-4">
                            <h4>3. Architecture</h4>
                        </div>
                    @endif
                @elseif ($itr == 3)
                    @if($archr > $engr)
                        <div class="col-md-4">
                            <h4>1. Architecture</h4>
                        </div>

                        <div class="col-md-4">
                            <h4>2. Engineering</h4>
                        </div>

                        <div class="col-md-4">
                            <h4>3. ICT</h4>
                        </div>
                    @else
                        <div class="col-md-4">
                            <h4>1. Engineering</h4>
                        </div>

                        <div class="col-md-4">
                            <h4>2. Architecture</h4>
                        </div>

                        <div class="col-md-4">
                            <h4>3. ICT</h4>
                        </div>
                    @endif
                @endif

                <h3 class="head-title"><u><br><br>That would be all. We would appreciate it if you gave us a <a href="{{ url('/feedback') }}">feedback</a><br>using your unique id: {{$id}} & email address used: {{ $email }}</u><br></h3>

            </div>
        </div>
    </body>
</html>