@extends('layouts.bscmains')

@section('content')
    {{-- {{Subject starts from here(card)}} --}}
    <h1 style="text-align: center; margin-top:20px;"> Second Semester of BSc.Csit syllabus!!</h1>
    <div class="col">
        <div class="allcol" style=" padding-left: 450px;">
            <div class="col-sm-4" style="width: 30rem; margin-bottom:20px; margin-top:30px;">
                <div class="card">
                    <img src="{{ asset('asset/bim_sy2b.png') }}" class="card-img-top">
                </div>
            </div>
            <div class="col-sm-4" style="width: 30rem;margin-bottom:20px;">
                <div class="card">
                    <img src="{{ asset('asset/bim_sy2c.png') }}" class="card-img-top">
                </div>
            </div>
            <div class="col-sm-4"style="width: 30rem;margin-bottom:20px;">
                <div class="card">
                    <img src="{{ asset('asset/bim_sy2d.png') }}" class="card-img-top">
                </div>
            </div>
        </div>
    </div>
@endsection
