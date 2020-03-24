
@extends('layouts.template')

@section('content')
<div class="container">
<div class="circle">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
         <table id="table1">
<tr bgcolor="#C0C0C0" height="400"  >
<td >  <image src="services/tradingim.jpg" height="350" width="350"> <br><a href="{{route('service_treading')}}">TREADING</td>
<td>  <image src="services/waxing.jpg" height="350" width="350"><br><a href="{{route('service_waxing')}}"> WAXING</td>
<td>  <image src="services/facial.jpg" height="350" width="350"><br><a href="{{route('service_facial')}}">  FACIAL</td>
<td>  <image src="services/haircut.jpg" height="350" width="350"><br><a href="{{route('service_haircut')}}">  HAIR CUTS</td>
</tr>
<tr bgcolor="#C0C0C0" height="400">
<td>  <image src="services/haircolor.jpg" height="350" width="350"><br><a href="{{route('service_haircolors')}}"> HAIR COLORS</td>
<td>  <image src="services/hairthreatment.jpg" height="350" width="350"><br> <a href="{{route('service_hairthreatment')}}">HAIR THREATMENT</td>
<td>  <image src="services/hairstyles.jpg" height="350" width="350"><br><a href="{{route('service_hairstyling')}}"> HAIR STYLING</td>
<td>  <image src="services/dressing.jpg"height="350" width="350"><br><a href="{{route('service_dressing')}}"> DRESSING</td>
</tr>

         </table>
    </div>
</div></div>
</div>
@endsection