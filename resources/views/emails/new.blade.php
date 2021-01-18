@component('mail::message')
<img src="{{ asset('img/logo.png') }}" alt="" width="100%">

<hr><br>

<h2>This is an auto generated confirmation email from iDecide<br> </h2>

<table style="border: none;">
    <tr>
        <th colspan=2>
            <p style="text-align:justify;">We received your data and made you the recommendation as follows<br></p>
        </th>
    </tr>
    <tr>
        <th colspan=2>{{$data['name']}}</th>
    </tr>
    <tr>
        <th colspan=2>{{$data['email']}}</th>
    </tr>
    <tr>
        <th colspan=2>iDecide ID No: {{$data['id']}}</th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th><br><br>Recommendations</th>
        <th><br><br><b></b></th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>IT</th>
        <th><b>{{$data['it']}}</b></th>
    </tr>
    <tr style="background-color:#004394; color:#ffffff;">
        <th>Engineering</th>
        <th><b>{{$data['engineering']}}</b></th>
    </tr>
    <tr style="background-color:#ffffff; color:#004394;">
        <th>Architecture</th>
        <th><b>{{$data['architecture']}}</b></th>
    </tr>
</table>

<br><br>

<p style="text-align: justify;">Thank you for using our system. We hope our recommendations were useful to you, and that you would be back to us after graduation to feedback us with system evaluation.<br></p>
{{ config('app.name') }}
@endcomponent