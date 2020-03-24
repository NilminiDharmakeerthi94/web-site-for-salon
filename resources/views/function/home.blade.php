
@extends('layouts.template')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <!--    <div class="panel panel-default">
                <div class="panel-heading"> Wel Come to your special days!!! <br>
                SALON [name here]</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                  
                    Treat your special occasion
                    -->
                    <table style="width:100%">
  <tr  bgcolor="#C0C0C0">
   <td height="300" colspan="3"> 
   <image src="home.jpg" height="500" width="100%">
   </td>
  </tr>
  <tr>
    <td width="800" height="300"  bgcolor="#D3D3D3">
    <h2>SALON [name]</h2>
    providing excellent service in hair 
    care, beauty care 
    and bridal dressing. Our sophisticated yet herbal spa treatments
     has been able to maintain a steady flow of clients throughout, 
     hoping to get themselves pampered in our professional hands. We
      also offer full time and part time courses in hair and
     beauty care for the enthusiastic youth seeking a career in the 
     current beauty industry.</td>
    <td colspan="2" bgcolor="#D3D3D3">News</td>
 
  </tr>
  </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection