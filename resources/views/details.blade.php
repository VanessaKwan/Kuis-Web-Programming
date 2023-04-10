@extends('product')

@section('Judul')
    Detail
@endsection

@section('Isi')
<div class="text-[4vw] ml-[3vw]">
    @if ($item['Name'] == "Sandal Berlian")
        <p class="font-bold">{{$item['Name']}}</p>
        <p>{{$item['Detail']}}</p>

    @elseif ($item['Name'] == "Baju Logam")
        <p class="font-bold">{{$item['Name']}}</p>
        <p>{{$item['Detail']}}</p>
    @else
        <p class="font-bold">{{$item['Name']}}</p>
        <p>{{$item['Detail']}}</p>
    @endif
</div>
@endsection
