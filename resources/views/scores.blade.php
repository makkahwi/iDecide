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

                <h3 class="head-title"><u>In your high school, how good your grades were in listed fields?</u><br><br></h3>

                <form action="scores" method="POST">

                    {{ csrf_field() }}

                    <div class="form-group col-md-12">
                        <table>
                            <thead>
                                <tr>
                                    <th><h5 hidden><input name="id" value="{{$id}}"> <input name="ict" value={{$ict}}> <input name="eng" value={{$eng}}> <input name="arch" value={{$arch}}></h5></th>
                                    <th><h5>Bad<br>(Around pass grade / 50%+)</h5></th>
                                    <th><h5>Acceptable<br>(Around C+ or B- / 60%+)	</h5></th>
                                    <th><h5>Not Dad<br>(Around B / 70%+)</h5></th>
                                    <th><h5>Good<br>(Around B+ or A- / 80%+)</h5></th>
                                    <th><h5>Excellent<br>(A / 90%+)</h5></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <th><h4>IT / Computer</h4></th>
                                    <th><input required type="radio" id="1" name="it" value="1"></th>
                                    <th><input required type="radio" id="2" name="it" value="2"></th>
                                    <th><input required type="radio" id="3" name="it" value="3"></th>
                                    <th><input required type="radio" id="4" name="it" value="4"></th>
                                    <th><input required type="radio" id="5" name="it" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Chemistry</h4></th>
                                    <th><input required type="radio" id="1" name="chemistry" value="1"></th>
                                    <th><input required type="radio" id="2" name="chemistry" value="2"></th>
                                    <th><input required type="radio" id="3" name="chemistry" value="3"></th>
                                    <th><input required type="radio" id="4" name="chemistry" value="4"></th>
                                    <th><input required type="radio" id="5" name="chemistry" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Physics</h4></th>
                                    <th><input required type="radio" id="1" name="physics" value="1"></th>
                                    <th><input required type="radio" id="2" name="physics" value="2"></th>
                                    <th><input required type="radio" id="3" name="physics" value="3"></th>
                                    <th><input required type="radio" id="4" name="physics" value="4"></th>
                                    <th><input required type="radio" id="5" name="physics" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Math</h4></th>
                                    <th><input required type="radio" id="1" name="math" value="1"></th>
                                    <th><input required type="radio" id="2" name="math" value="2"></th>
                                    <th><input required type="radio" id="3" name="math" value="3"></th>
                                    <th><input required type="radio" id="4" name="math" value="4"></th>
                                    <th><input required type="radio" id="5" name="math" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Arts</h4></th>
                                    <th><input required type="radio" id="1" name="arts" value="1"></th>
                                    <th><input required type="radio" id="2" name="arts" value="2"></th>
                                    <th><input required type="radio" id="3" name="arts" value="3"></th>
                                    <th><input required type="radio" id="4" name="arts" value="4"></th>
                                    <th><input required type="radio" id="5" name="arts" value="5"></th>
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