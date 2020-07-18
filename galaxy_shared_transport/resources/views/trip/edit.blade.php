


@extends('layouts.app')

@section('content')
<div class="container-fluid">
	<center></center><h1>Trip</h1></center>
	<form action="{{url('/trip/save')}}" method="post">
		@csrf
	<div class="row justify-content-center">
 		<div class="col-md-8">
 			<div class="card">
 				<div class="card-header">{{ __('From Adresss') }}
 				</div>
 				<div class="card-body">
 					<div class="form-group row">
 						<label for="village" class="col-md-4 col-form-label text-md-right">{{ __('village') }}</label>

                            <div class="col-md-6">
                                <input id="from_village" type="text" class="form-control @error('from_village') is-invalid @enderror" name="from_village" required autocomplete="from_village" autofocus>

                                @error('from_village')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
 					</div>
 					<div class="form-group row">
                            <label for="from_taluka" class="col-md-4 col-form-label text-md-right">{{ __('taluka') }}</label>

                            <div class="col-md-6">
                                <input id="from_taluka" type="text" class="form-control @error('from_taluka') is-invalid @enderror" name="from_taluka" autocomplete="from_taluka">

                                @error('from_taluka')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                     <div class="form-group row">
                            <label for="from_nrCity" class="col-md-4 col-form-label text-md-right">{{ __('Nearest City') }}</label>

                            <div class="col-md-6">
                                <input id="from_nrCity" type="text" class="form-control @error('from_nrCity') is-invalid @enderror" name="from_nrCity" required autocomplete="from_nrCity">

                                @error('from_nrCity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                    <div class="form-group row">
                           <label for="from_distic" class="col-md-4 col-form-label text-md-right">{{ __('Distic') }}</label>

                            <div class="col-md-6">
                                <input id="from_distic" type="text" class="form-control @error('from_distic') is-invalid @enderror" name="from_distic" required autocomplete="from_distic">

                                @error('from_distic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                     
                     <div class="form-group row">
                           <label for="from_landmark" class="col-md-4 col-form-label text-md-right">{{ __('Landmark') }}</label>

                            <div class="col-md-6">
                                <input id="from_landmark" type="text" class="form-control @error('from_landmark') is-invalid @enderror" name="from_landmark" required autocomplete="from_landmark">

                                @error('from_landmark')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                       <div class="form-group row">
                           <label for="from_state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">
                                <input id="from_state" type="text" class="form-control @error('from_state') is-invalid @enderror" name="from_state" required autocomplete="from_state">

                                @error('from_state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                       <div class="form-group row">
                           <label for="from_pincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>

                            <div class="col-md-6">
                                <input id="from_pincode" type="text" class="form-control @error('from_pincode') is-invalid @enderror" name="from_pincode" required autocomplete="from_pincode">

                                @error('from_pincode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                    <div class="form-group row">
                           <label for="from_country" class="col-md-4 col-form-label text-md-right">{{ __('Contry') }}</label>

                            <div class="col-md-6">
                                <input id="from_country" type="text" class="form-control @error('from_country') is-invalid @enderror" name="from_country" required autocomplete="from_country">

                                @error('from_country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>

 				</div>
 		</div>
 		</div>
 	</div>
 	<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('To Adresss') }}
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="village" class="col-md-4 col-form-label text-md-right">{{ __('village') }}</label>

                            <div class="col-md-6">
                                <input id="to_village" type="text" class="form-control @error('to_village') is-invalid @enderror" name="to_village" required autocomplete="to_village" autofocus>

                                @error('to_village')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                    </div>
                    <div class="form-group row">
                            <label for="to_taluka" class="col-md-4 col-form-label text-md-right">{{ __('taluka') }}</label>

                            <div class="col-md-6">
                                <input id="to_taluka" type="text" class="form-control @error('to_taluka') is-invalid @enderror" name="to_taluka" autocomplete="to_taluka">

                                @error('to_taluka')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                     <div class="form-group row">
                            <label for="to_nrCity" class="col-md-4 col-form-label text-md-right">{{ __('Nearest City') }}</label>

                            <div class="col-md-6">
                                <input id="to_nrCity" type="text" class="form-control @error('to_nrCity') is-invalid @enderror" name="to_nrCity" required autocomplete="to_nrCity">

                                @error('to_nrCity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                    <div class="form-group row">
                           <label for="to_distic" class="col-md-4 col-form-label text-md-right">{{ __('Distic') }}</label>

                            <div class="col-md-6">
                                <input id="to_distic" type="text" class="form-control @error('to_distic') is-invalid @enderror" name="to_distic" required autocomplete="to_distic">

                                @error('to_distic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                     <div class="form-group row">
                           <label for="to_landmark" class="col-md-4 col-form-label text-md-right">{{ __('Landmark') }}</label>

                            <div class="col-md-6">
                                <input id="to_landmark" type="text" class="form-control @error('to_landmark') is-invalid @enderror" name="to_landmark" required autocomplete="to_landmark">

                                @error('to_landmark')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                     <div class="form-group row">
                           <label for="to_landmark" class="col-md-4 col-form-label text-md-right">{{ __('Landmark') }}</label>

                            <div class="col-md-6">
                                <input id="to_landmark" type="text" class="form-control @error('to_landmark') is-invalid @enderror" name="to_landmark" required autocomplete="to_landmark">

                                @error('to_landmark')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                       <div class="form-group row">
                           <label for="to_state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            <div class="col-md-6">
                                <input id="to_state" type="text" class="form-control @error('to_state') is-invalid @enderror" name="to_state" required autocomplete="to_state">

                                @error('to_state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                       <div class="form-group row">
                           <label for="to_pincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>

                            <div class="col-md-6">
                                <input id="to_pincode" type="text" class="form-control @error('to_pincode') is-invalid @enderror" name="to_pincode" required autocomplete="to_pincode">

                                @error('to_pincode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                    <div class="form-group row">
                           <label for="to_country" class="col-md-4 col-form-label text-md-right">{{ __('Contry') }}</label>

                            <div class="col-md-6">
                                <input id="to_country" type="text" class="form-control @error('to_country') is-invalid @enderror" name="to_country" required autocomplete="to_country">

                                @error('to_country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                     
                        

                </div>
        </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Trip') }}
                </div>
                <div class="card-body">
                    <div class="form-group row">
                           <label for="loading" class="col-md-4 col-form-label text-md-right">{{ __('Loading in KG') }}</label>

                            <div class="col-md-6">
                                <input id="loading" type="text" class="form-control @error('loading') is-invalid @enderror" name="loading" required autocomplete="loading">
                                <input id="user_id" type="hidden" class="form-control @error('user_id') is-invalid @enderror" name="user_id"
                                value="{{Auth::user()->id}}">

                                <input id="status" type="hidden" class="form-control @error('status') is-invalid @enderror" name="status" value="1" >


                                @error('loading')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                     </div>
                    <div class="form-group row">
                        <div class="col-md-8">
                            <center>
                        <input type="submit" class="btn btn-primary" value="{{ __('Trip  Now') }}" name="trip_btn" />
                        </center>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
	</form>
</div>

@endsection