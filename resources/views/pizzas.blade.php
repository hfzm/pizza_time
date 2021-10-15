@extends('layouts.app')
@section('content')
        <h1>لیست پیتزا ها</h1>

        {{-- @for($i = 0; $i < 5; $i++)
            <p>قیمت آی مساوی است به {{$i}}</p>
        @endfor --}}

        {{-- @for($i = 0; $i < count($pizzas); $i++)
            <p>{{$pizzas[$i]['type']}}</p>
        @endfor --}}

        @foreach($pizzas as $pizza)
            <div>
                {{$loop->index}} - {{$pizza['type']}} - {{$pizza['base']}}

                @if($loop->first)
                    <span>- معلومات نخست است</span>
                @endif

                @if($loop->last)
                    <span>- معلومات آخر است</span>
                @endif
            </div>
        @endforeach
@endsection