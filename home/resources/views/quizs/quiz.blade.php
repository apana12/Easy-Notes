@extends('layouts.main')

@section('content')
    <div class="image-container">
        <div class="My_Image">
            <img src="{{ asset('asset/Quiz Game.png') }}" alt="myimage" style="width: 100%;">
        </div>
    </div>
    <div class="row" style="margin: 20px 20px; padding-left:100px;">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem; ">
                <img src="{{ asset('asset/BCA_q.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="card-text" href="{{ route('quizs.bca_quiz') }}">1st semester BCA </a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/BIM_q.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="card-text" href="{{ route('quizs.bim_quiz') }}">1st semester BIM</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/BSc_q.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="card-text" href="{{ route('quizs.bsc_quiz') }}">1st semester BSc.Csit.</a>
                </div>
            </div>
        </div>
        {{-- <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/BSc.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="card-text" href="{{ route('quizs.bsc2_quiz') }}">2nd semester BSc.Csit.</a>
                </div>
            </div>
        </div> --}}
    </div>
@endsection
