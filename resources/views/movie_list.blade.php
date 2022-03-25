@extends('template')

@section('content')
    <div class="row pt-3">
        <div class="col-12">
            <form action="{{ route(Route::currentRouteName(), ['id' => $data[0]->id]) }}" method="get">
                <div class="form-row">
                    <div class="form-group col-11">
                        <input type="text" name="search" class="form-control input-text" placeholder="Cari Film" value="{{ $search }}">
                    </div>
                    <div class="form-group col-1">
                        <input type="submit" class="btn btn-info btn-block" value="Cari">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row p-3">
        @foreach($data as $d)
        <div class="col-12 pb-3">
            <div class="row">
                <h4>{{ $d->name }}</h4>
            </div>
            <div class="row">
                @foreach($d->movies as $m)
                    @if($search == null || strpos(strtolower($m->title), strtolower($search)) !== false)
                    <div class="col-3 card">
                        <img src="{{ asset($m->photo) }}" class="card-img-top card-image">
                        <div class="card-body">
                            <h5 class="card-title">{{ $m->title }}</h5>
                            <p class="card-text">{{ substr($m->description, 0, 50) }}...</p>
                            <a href="{{ route('movie', ['id' => $m->id]) }}" class="btn btn-info">Lihat Film</a>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
@endsection
