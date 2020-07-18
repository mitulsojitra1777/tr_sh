@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('add/address') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="village" class="col-md-4 col-form-label text-md-right">{{ __('village') }}</label>

                            <div class="col-md-6">
                                <input id="village" type="text" class="form-control @error('village') is-invalid @enderror" name="village" required autocomplete="name" autofocus>

                                @error('village')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="taluka" class="col-md-4 col-form-label text-md-right">{{ __('taluka') }}</label>

                            <div class="col-md-6">
                                <input id="taluka" type="email" class="form-control @error('taluka') is-invalid @enderror" name="taluka" autocomplete="taluka">

                                @error('taluka')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nrCity" class="col-md-4 col-form-label text-md-right">{{ __('Nearest City') }}</label>

                            <div class="col-md-6">
                                <input id="nrCity" type="password" class="form-control @error('nrCity') is-invalid @enderror" name="nrCity" required autocomplete="nrCity">

                                @error('nrCity')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="distic" class="col-md-4 col-form-label text-md-right">{{ __('Distic') }}</label>

                            

                            <div class="col-md-6">
                                <input id="distic" type="password" class="form-control@error('distic') is-invalid @enderror" name="distic" required autocomplete="distic">
                            </div>
                            @error('distic')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="form-group row">
                            <label for="landmark" class="col-md-4 col-form-label text-md-right">{{ __('Landmark') }}</label>

                            

                            <div class="col-md-6">
                                <input id="landmark" type="password" class="form-control@error('landmark') is-invalid @enderror" name="landmark" required autocomplete="landmark">
                            </div>
                            @error('landmark')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <label for="state" class="col-md-4 col-form-label text-md-right">{{ __('State') }}</label>

                            

                            <div class="col-md-6">
                                <input id="state" type="password" class="form-control@error('state') is-invalid @enderror" name="state" required autocomplete="lstate">
                            </div>
                            @error('state')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <label for="pincode" class="col-md-4 col-form-label text-md-right">{{ __('Pincode') }}</label>

                            

                            <div class="col-md-6">
                                <input id="pincode" type="password" class="form-control@error('pincode') is-invalid @enderror" name="pincode" required autocomplete="pincode">
                            </div>
                            @error('pincode')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            

                            <div class="col-md-6">
                                <input id="country" type="password" class="form-control@error('country') is-invalid @enderror" name="country" required autocomplete="country">
                            </div>
                            @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('save') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
