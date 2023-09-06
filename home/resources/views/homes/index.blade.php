@extends('layouts.main')

@section('content')
    <div class="image-container">
        <div class="My_Image">
            <img src="{{ asset('asset/Easy_Notes.png') }}" alt="myimage" style="width: 100%;">
        </div>
    </div>
    {{-- {{Subject starts from here(card)}} --}}
    <div class="row" style="margin: 20px 20px; padding-left:100px;">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem; ">
                <img src="{{ asset('asset/BIM.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="card-text" href="{{ route('faculties.bim') }}">You can find all the notes related to BIM.</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/BCA.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="card-text" href="{{ route('faculties.bca') }}">You can find all the notes related to BCA.</a>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
                <img src="{{ asset('asset/BSc.png') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <a class="card-text" href="{{ route('faculties.bsc') }}">You can find all the notes related to
                        BSc.Csit.</a>
                </div>
            </div>
        </div>
    </div>

    {{-- {{Ends here}} --}}
@endsection
