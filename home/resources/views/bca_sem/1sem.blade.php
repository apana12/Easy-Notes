@extends('layouts.bcabackmains')

@section('content')
    <h1 style="text-align: center; margin-top:20px;"> First Semester of BCA Notes!!</h1>

    {{-- {{Subject starts from here(card)}} --}}
    {{-- Form for marking first semester --}}
    <div class="col">
        <div class="allcol" style=" padding-left:  450px;">
            <div class="col-sm-4" style="width: 30rem; margin-bottom:20px; margin-top:30px;">
                <div class="card">
                    <img src="{{ asset('asset/sem1a.png') }}" class="card-img-top">
                </div>
            </div>
            <div class="col-sm-4" style="width: 30rem;margin-bottom:20px;">
                <div class="card">
                    <img src="{{ asset('asset/sem1b.png') }}" class="card-img-top">
                </div>
            </div>
            <div class="col-sm-4" style="width: 30rem;margin-bottom:20px;">
                <div class="card">
                    <img src="{{ asset('asset/sem1c.png') }}" class="card-img-top">
                </div>
            </div>
        </div>
    </div>
    {{-- {{Ends here}} --}}
@endsection
