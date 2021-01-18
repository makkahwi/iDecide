<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    @include('htmlHead')

    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">

                <br><br><br><br>

                <div class="title m-b-md">
                    <a href="{{ url('/') }}"><img src="img/Logo.png" alt=""></a>
                </div>

                <br>

                <h3 class="head-title"><u>Please evaluate your expireance with us</u><br><br></h3>

                <form action="evaluation" method="POST">

                    {{ csrf_field() }}

                    <div class="form-group col-md-12">
                        <table>
                            <thead>
                                <tr>
                                    <th><h5 hidden><input name="id" value="{{$id}}"></h5></th>
                                    <th><h5>1<br>Worst</h5></th>
                                    <th><h5>2</h5></th>
                                    <th><h5>3</h5></th>
                                    <th><h5>4</h5></th>
                                    <th><h5>5<br>Best</h5></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <th><h4>System Outlook and ease of use</h4></th>
                                    <th><input required type="radio" id="1" name="outlook" value="1"></th>
                                    <th><input required type="radio" id="2" name="outlook" value="2"></th>
                                    <th><input required type="radio" id="3" name="outlook" value="3"></th>
                                    <th><input required type="radio" id="4" name="outlook" value="4"></th>
                                    <th><input required type="radio" id="5" name="outlook" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>System Functionality (working ok)</h4></th>
                                    <th><input required type="radio" id="1" name="functionality" value="1"></th>
                                    <th><input required type="radio" id="2" name="functionality" value="2"></th>
                                    <th><input required type="radio" id="3" name="functionality" value="3"></th>
                                    <th><input required type="radio" id="4" name="functionality" value="4"></th>
                                    <th><input required type="radio" id="5" name="functionality" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>The Recommenation Results (How answer was accurate)</h4></th>
                                    <th><input required type="radio" id="1" name="recommendation" value="1"></th>
                                    <th><input required type="radio" id="2" name="recommendation" value="2"></th>
                                    <th><input required type="radio" id="3" name="recommendation" value="3"></th>
                                    <th><input required type="radio" id="4" name="recommendation" value="4"></th>
                                    <th><input required type="radio" id="5" name="recommendation" value="5"></th>
                                </tr>
                            </tbody>
                        </table>
                        
                        <br>

                        <div class="form-group col-md-12">
                            <button type="submit" class="btn btn-success pull-right" style="background-color:#149490; border-color:#149490;">Next</button>
                        </div>

                        <br><br>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>