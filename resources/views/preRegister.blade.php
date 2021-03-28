@extends('layouts.app')

@section('content')
<!--<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
            
        </div>
    </div>-->
    <div class="container" >
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" >
                    <div class="card-header bg-info">{{ __('Pre-Inscription') }}</div>
    
                    <div class="card-body">
                        <!--@if(session()->has('message'))
                        <h4>{{session()->get('message')}}</h4>
                        @endif-->
                        
                        <form method="GET" action="/showInfo" >
                            @csrf
    
                            <div class="form-group row">
                                <label for="First_name" class="col-md-4 col-form-label text-md-right">{{ __('First name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="First_name" readonly value="zakaria" type="text" class="form-control" name="First_name" required autocomplete="First_name" autofocus>
                                </div>
                            </div>
    
                           <div class="form-group row">
                                <label for="Last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last name') }}</label>
    
                                <div class="col-md-6">
                                    <input id="Last_name" type="text" class="form-control" name="Last_name" readonly value="elmahalli" required autocomplete="Last_name" autofocus>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="CIN" class="col-md-4 col-form-label text-md-right">{{ __('CIN') }}</label>
    
                                <div class="col-md-6">
                                    <input id="CIN" type="text" class="form-control" name="CIN" readonly value="GH100245" required autocomplete="CIN" autofocus>
                                </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="CNE" class="col-md-4 col-form-label text-md-right">{{ __('CNE') }}</label>
    
                                <div class="col-md-6">
                                    <input id="CNE" type="text" class="form-control" name="CNE" readonly value="GH214587" required autocomplete="CNE" autofocus>
                                </div>
                            </div>
    
                            <div class="form-group row" >
    
                                <label for="exampleFormControlSelect2" class="col-md-4 col-form-label text-md-right">Baccalaureate</label>
                                <div class="col-md-6">
                                    <input id="exampleFormControlSelect2" type="text" class="form-control" name="exampleFormControlSelect2" readonly value="2018" required autocomplete="exampleFormControlSelect2" autofocus>
                              </div>
                            </div>
    
                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control" name="email" readonly value="{{ Auth::user()->email }}" required autocomplete="email">
                                </div>
                            </div>
    

                            <div class="form-group row">
                                <label for="datetimepicker1" class="col-md-4 col-form-label text-md-right">{{ __('Date Of Register') }}</label>
                                <div class="col-md-6">
                                    <div class='input-group date' >
                                        <input type='date' id='datetimepicker1' min="2021-01-30" max="2021-03-31"  name="datetimepicker1" class="form-control @error('datetimepicker1') is-invalid @enderror" required />
                                        <span class="input-group-addon">
                                        <span class="glyphicon glyphicon-calendar"></span>
                                        </span>
                                     </div>
                                     <script type="text/javascript">
                                        $(function () {
                                            $('#datetimepicker1').datepicker();
                                        });
                                        
                                     </script>
                            
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="telephone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>
    
                                <div class="col-md-6">
                                    <input id="telephone" type="tel" class="form-control @error('telephone') is-invalid @enderror" name="telephone" required />
                                    @error('telephone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                            </div>
                            
                            <div class="form-group row" >
    
                                <label for="exampleFormControlSelect1" class="col-md-4 col-form-label text-md-right">Options</label>
                                <div class="col-md-6">
                                   <input type='text' id='exampleFormControlSelect1' name="exampleFormControlSelect1" class="form-control " required readonly value="GI2" />
                                </div>
                            </div>
    
                            <div class="form-group row" >
    
                                <label for="exampleFormControlSelect3" class="col-md-4 col-form-label text-md-right">Level</label>
                                <div class="col-md-6">
                                <select class="form-control" id="exampleFormControlSelect3" name="exampleFormControlSelect3">
                                  <option>First year license cycle</option>
                                  <option>Second year license cycle</option>
                                  <option>Third year license cycle</option>
    
                                  <option>First year master cycle</option>
                                  <option>Second year master cycle</option>
    
                                  <option>First year doctorat cycle</option>
                                  <option>Second year doctorat cycle</option>
                                  <option>Third year doctorat cycle</option>
                                </select>
                              </div>
                            </div>
    
                            
                            <!--<div class="cform-goup row">
                                <label for="photo" class=" col-md-4 col-form-label text-md-right">Add photo</label>
                                <div class="custom-file col-md-6">
                                   <input type='file' id='photo' name="photo" class="custom-file-input  @error('photo') is-invalid @enderror " required />
                                   <label for="photo" class="custom-file-label "></label>
                                   <script>
                                    // Add the following code if you want the name of the file appear on select
                                    /*$(".custom-file-input").on("change", function() {
                                      var fileName = $(this).val().split("\\").pop();
                                      $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                                    });*/
                                    $(document).ready(function(){ 
                                        $('input[type="file"]').change(function(e){ 
                                            var geekss = e.target.files[0].name; 
                                            alert(geekss + ' is the selected file .'); 
                                        }); 
                                    }); 
                                    </script>
                                </div>
                            </div>-->
                            
                            <div class="form-goup row">
                                <label for="photo" class=" col-md-4 col-form-label text-md-right">Add photo</label>
                                <div class="col-md-6">
                                <input type="file" id="photo" name="photo" class="form-control  @error('photo') is-invalid @enderror " style="border:none;background-color:transparent;">
                                <script> 
                                    $(document).ready(function(){ 
                                        $('input[type="file"]').change(function(e){ 
                                            var geekss = e.target.files[0].name; 
                                            alert(geekss + ' is the selected file .'); 
                                        }); 
                                    }); 
                                </script> 
                                </div>
                            </div>

                            <br>
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" >
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection
