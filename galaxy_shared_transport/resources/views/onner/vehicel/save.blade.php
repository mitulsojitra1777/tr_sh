@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        	<div class="card">
                <div class="card-header">{{ __('vehicle') }}</div>

                <div class="card-body">
                	 <form method="POST" action="{{ url('/onner/save/vehicle') }}" enctype="multipart/form-data">
                	 @csrf
                                        	 	
                	 	<input type="hidden" name="verify" value="false">
                	 	<input type="hidden" name="onner_id" value="{{Auth::user()->id}}">
                	 <div class="form-group row">
                            <label for="vehicle_number" class="col-md-4 col-form-label text-md-right">{{ __('Number') }}</label>

                            <div class="col-md-6">
                                <input id="vehicle_number" type="text" class="form-control @error('vehicle_number') is-invalid @enderror" name="vehicle_number" value="{{ old('vehicle_number') }}" required autocomplete="" autofocus>

                                @error('vehicle_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="vehicle_name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="vehicle_name" type="text" class="form-control @error('vehicle_name') is-invalid @enderror" name="vehicle_name" value="{{ old('vehicle_name') }}" required autocomplete="" autofocus>

                                @error('vehicle_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="logingcapecity" class="col-md-4 col-form-label text-md-right">{{ __('Loding Capecity') }}</label>

                            <div class="col-md-6">
                                <input id="logingcapecity" type="text" class="form-control @error('logingcapecity') is-invalid @enderror" name="logingcapecity" value="{{ old('logingcapecity') }}" required autocomplete="" autofocus>

                                @error('logingcapecity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="doc_f" class="col-md-4 col-form-label text-md-right">{{ __('Document') }}</label>

                            <div class="col-md-6">
                                <input id="doc_f" type="file" class="form-control @error('doc_f') is-invalid @enderror" name="doc_f" value="{{ old('doc_f') }}" required autocomplete="" autofocus>

                                @error('doc_f')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <input id="doc_b" type="file" class="form-control @error('doc_b') is-invalid @enderror" name="doc_b" value="{{ old('doc_b') }}" required autocomplete="" autofocus>

                                @error('doc_b')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="doc_n" class="col-md-4 col-form-label text-md-right">{{ __('Document Number') }}</label>

                            <div class="col-md-6">
                                <input id="doc_n" type="text" class="form-control @error('doc_n') is-invalid @enderror" name="doc_n" value="{{ old('doc_n') }}" required autocomplete="" autofocus>

                                @error('doc_n')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                	 </form>
                </div>
            </div>
        </div>
    </div>

@endsection
