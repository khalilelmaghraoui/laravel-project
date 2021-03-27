@extends('layouts.app')

@section('content')
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" >
                @if($level ?? '' ?? ''=='First year license cycle'||$level ?? '' ?? ''=='First year master cycle'||$level ?? '' ?? ''=='First year doctorat cycle')
                <div class="card-header">{{ __('Register Confirmed To ENSAblog') }}</div>
                @else
                <div class="card-header">{{ __('Re-Register Confirmed To ENSAblog') }}</div>
                @endif

                <div class="card-body" style="background:url(images/dd.png);background-size:cover;font-weight:bold;">

                    <div class="form-group row">

                        <div>
                            <img src="img/picture.jpg" alt="" style="width: 100px;height:100px;margin-left:300px; border-radius: 10%">
                         </div>
                       
                        
                        </div>
                    
                        <div class="form-group row text-center" style="padding-top: 80px">

                            <div class="col-12">
    
                                <p>First name : zakaria</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>Last name : elmahalli</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>CIN : GH100245</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>CNE : GH214587</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>Baccalaureate : 2018</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>E-Mail Address : mons.reys1@gmail.com</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>Date Of Register : 27/03/2021</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>Phone Number :  0606241589</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>Options : GI2</p>
    
                            </div>
    
                            <div class="col-12">
    
                                <p>Level : Seconde tear license cycle</p>
    
                            </div>
    
                        </div>

                        <br><br><br>

                       
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
                        
                </div>
            </div>
            
        </div>
    </div>
    @endsection