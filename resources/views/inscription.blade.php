@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >


                <div class="card-body" style="background:url(images/dd.png);background-size:cover;font-weight:bold;">

                    <div class="form-group row">

                        <div>
                            <img src="images/{{$photo}}" alt="" style="width: 100px;height:100px;margin-left:300px; border-radius: 10%">
                         </div>
                       
                        
                        </div>
                    
                        <div class="form-group row text-center" style="padding-top: 80px">

                            <div class="col-12">
    
                                <p>First name : <</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>Last name : </p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>CIN :<  
                            </div>
    
                            <div class="col-12">
    
                                <p>CNE :<  
                            </div>
    
                            <div class="col-12">
    
                                <p>Baccalaureate : {{Auth::user()->exampleFormControlSelect2 }}</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>E-Mail Address : <    
                            </div>
    
                            <div class="col-12">
    
                                <p>Date Of Register : {{$date}}</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>Phone Number :  {{$phone}}</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>Options : <ntrolSelect1 }}</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>Level : </p>
    
                            </div>
    
                        </div>

                        <br><br><br>

                        @if($level=='First year license cycle'||$level=='First year master cycle'||$level=='First year doctorat cycle')
                        <div class="form-group row" >
                            <div class="col-md-6">
                                <input id="printbtn" type="button" value="Print file" onclick="printPage();" class="btn btn-primary" style="margin-left:300px;">
                                <script type="text/javascript">
                                    function printPage()
                                    {
                                        var buttonImprimer = document.getElementById('printbtn');
                                        buttonImprimer.style.visibility = 'hidden';
                                        window.print();
                                        buttonImprimer.style.visibility = 'visible';
                                    }
                                </script>
                            </div>
                        </div>
                        @endif
                </div>
            </div>
            
        </div>
    </div>
    @endsection