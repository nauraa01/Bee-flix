@extends('template')

@section('content')
    <div class="row p-3">
        <div class="col-6 image-background" style="background-image: url('{{ asset($data->photo) }}');"></div>
        <div class="col-6">
            <div class="row pl-1">
                <div class="col-12 text-info">
                    <h4>{{ $data->title }}</h4>
                </div>
                <div class="col-12 font-weight-bold">
                    <h5>
                    Rating :
                    @for($i = 0; $i < $data->rating; $i++)
                        <i class="fa fa-star text-warning"></i>
                    @endfor
                    </h5>
                </div>
                <div class="col-12">
                    <a href="{{ route('genre', ['id' => $data->genre->id]) }}" class="text-info">{{ $data->genre->name }}</a>
                </div>
                <div class="col-12">
                    {{ $data->description }}
                </div>
                <div class="col-12 pt-3">
                    <h6>Episodes</h6>
                    <table class="table">
                        <thead>
                            <tr class="table-info">
                                <th scope="col">Episode</th>
                                <th scope="col">Judul</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data->episodes()->paginate(3) as $e)
                                <tr>
                                    <th scope="row">{{ $e->episode }}</th>
                                    <td>{{ $e->title }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            @for($i = 1; $i <= $data->episodes()->paginate(3)->lastPage(); $i++)
                                <li class="page-item {{ (Request::get('page') == null && $i == 1) || (Request::get('page') != null && Request::get('page') == $i) ? 'active' : '' }}">
                                    <a class="page-link text-info" href="{{ route(Route::currentRouteName(), ['id' => $data->id]).'?page=' . $i }}">{{ $i }}</a>
                                </li>
                            @endfor
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
@endsection
