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

                <h3 class="head-title"><u>Please evaluate your practical experiences into the listed fields<br>(Volunteering / Part-time Jobs / Temporary Jobs / Summer Jobs / Freelancing)</u><br><br></h3>

                <form action="experiences" method="POST">

                    {{ csrf_field() }}

                    <div class="form-group col-md-12">
                        <table>
                            <thead>
                                <tr>
                                    <th><h5 hidden><input name="id" value="{{$id}}"> <input name="ict" value={{$ict}}> <input name="eng" value={{$eng}}> <input name="arch" value={{$arch}}></h5></th>
                                    <th><h5>Didn't have any</h5></th>
                                    <th><h5>Weak Practice<br>(Once / Twice a year)</h5></th>
                                    <th><h5>Low Practice<br>(Around Once every quarter)</h5></th>
                                    <th><h5>Medium Practice<br>(Around Once a month)</h5></th>
                                    <th><h5>High Practice<br>(Almost Constant)</h5></th>
                                </tr>
                            </thead>
                            
                            <tbody>
                                <tr>
                                    <th><h4>Graphic Designing / <br>Video Editing</h4></th>
                                    <th><input required type="radio" id="1" name="design" value="1"></th>
                                    <th><input required type="radio" id="2" name="design" value="2"></th>
                                    <th><input required type="radio" id="3" name="design" value="3"></th>
                                    <th><input required type="radio" id="4" name="design" value="4"></th>
                                    <th><input required type="radio" id="5" name="design" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Web Design / <br>Development</h4></th>
                                    <th><input required type="radio" id="1" name="web" value="1"></th>
                                    <th><input required type="radio" id="2" name="web" value="2"></th>
                                    <th><input required type="radio" id="3" name="web" value="3"></th>
                                    <th><input required type="radio" id="4" name="web" value="4"></th>
                                    <th><input required type="radio" id="5" name="web" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Coding / <br>Programming</h4></th>
                                    <th><input required type="radio" id="1" name="coding" value="1"></th>
                                    <th><input required type="radio" id="2" name="coding" value="2"></th>
                                    <th><input required type="radio" id="3" name="coding" value="3"></th>
                                    <th><input required type="radio" id="4" name="coding" value="4"></th>
                                    <th><input required type="radio" id="5" name="coding" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Building Computer Networks</h4></th>
                                    <th><input required type="radio" id="1" name="networks" value="1"></th>
                                    <th><input required type="radio" id="2" name="networks" value="2"></th>
                                    <th><input required type="radio" id="3" name="networks" value="3"></th>
                                    <th><input required type="radio" id="4" name="networks" value="4"></th>
                                    <th><input required type="radio" id="5" name="networks" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Hacking / <br>White Hacking</h4></th>
                                    <th><input required type="radio" id="1" name="hacking" value="1"></th>
                                    <th><input required type="radio" id="2" name="hacking" value="2"></th>
                                    <th><input required type="radio" id="3" name="hacking" value="3"></th>
                                    <th><input required type="radio" id="4" name="hacking" value="4"></th>
                                    <th><input required type="radio" id="5" name="hacking" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Manual Drawing / <br>Digital Drawing</h4></th>
                                    <th><input required type="radio" id="1" name="drawing" value="1"></th>
                                    <th><input required type="radio" id="2" name="drawing" value="2"></th>
                                    <th><input required type="radio" id="3" name="drawing" value="3"></th>
                                    <th><input required type="radio" id="4" name="drawing" value="4"></th>
                                    <th><input required type="radio" id="5" name="drawing" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Sketching Structures / <br>Buildings</h4></th>
                                    <th><input required type="radio" id="1" name="sketching" value="1"></th>
                                    <th><input required type="radio" id="2" name="sketching" value="2"></th>
                                    <th><input required type="radio" id="3" name="sketching" value="3"></th>
                                    <th><input required type="radio" id="4" name="sketching" value="4"></th>
                                    <th><input required type="radio" id="5" name="sketching" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Planing Districts / <br>Cities</h4></th>
                                    <th><input required type="radio" id="1" name="planing" value="1"></th>
                                    <th><input required type="radio" id="2" name="planing" value="2"></th>
                                    <th><input required type="radio" id="3" name="planing" value="3"></th>
                                    <th><input required type="radio" id="4" name="planing" value="4"></th>
                                    <th><input required type="radio" id="5" name="planing" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Designing Internal Furniture / <br>Apartment Finishing of paints, floors ... etc</h4></th>
                                    <th><input required type="radio" id="1" name="internal" value="1"></th>
                                    <th><input required type="radio" id="2" name="internal" value="2"></th>
                                    <th><input required type="radio" id="3" name="internal" value="3"></th>
                                    <th><input required type="radio" id="4" name="internal" value="4"></th>
                                    <th><input required type="radio" id="5" name="internal" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Building Robots / <br>Remote Controlled Items</h4></th>
                                    <th><input required type="radio" id="1" name="robots" value="1"></th>
                                    <th><input required type="radio" id="2" name="robots" value="2"></th>
                                    <th><input required type="radio" id="3" name="robots" value="3"></th>
                                    <th><input required type="radio" id="4" name="robots" value="4"></th>
                                    <th><input required type="radio" id="5" name="robots" value="5"></th>
                                </tr>

                                <tr>
                                    <th><h4>Chemical Creations & Reactions</h4></th>
                                    <th><input required type="radio" id="1" name="chemicals" value="1"></th>
                                    <th><input required type="radio" id="2" name="chemicals" value="2"></th>
                                    <th><input required type="radio" id="3" name="chemicals" value="3"></th>
                                    <th><input required type="radio" id="4" name="chemicals" value="4"></th>
                                    <th><input required type="radio" id="5" name="chemicals" value="5"></th>
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