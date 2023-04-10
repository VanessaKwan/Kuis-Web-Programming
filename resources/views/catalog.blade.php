@extends('product')

@section('Judul')
    Catalogs
@endsection

@section('Isi')
    <div class="flex flex-row justify-around">
        @foreach ($products as $pro)
            @if ($pro['Status'] == 'SSR')
            <a class="bg-red-600 w-[30vw] h-[37vw] text-white rounded-xl" href="/details/{{$pro['Name']}}">
                <div class="w-[20vw] h-[20vw] ml-[5vw] pt-[5vw]">
                    <img  src="Assets/Sandal.png" alt="">
                </div>
                <p class="ml-[2vw] mt-[7vw]">Product name   : {{$pro['Name']}}</p>
                <div class="ml-[2vw] flex flex-row">
                    <p>Product status : </p>
                    <p class="text-transparent">.</p>
                    <p class="font-bold"> {{$pro['Status']}}</p>
                </div>
                <p class="ml-[2vw]">Product price  : {{$pro['Price']}}</p>
            </a>

            @elseif ($pro['Status'] == 'SR')
                <a class="bg-[#FFCC00] w-[30vw] h-[37vw] text-black rounded-xl" href="/details/{{$pro['Name']}}">
                    <div class="w-[20vw] h-[20vw] ml-[5vw] pt-[5vw] ">
                        <img  src="Assets/Baju.jpg" alt="">
                    </div>
                    <p class="ml-[2vw] mt-[7vw]">Product name   : {{$pro['Name']}}</p>
                    <div class="ml-[2vw] flex flex-row">
                        <p>Product status : </p>
                        <p class="text-transparent">.</p>
                        <p class="font-bold"> {{$pro['Status']}}</p>
                    </div>
                    <p class="ml-[2vw]">Product price  : {{$pro['Price']}}</p>
                </a>

            @else
                <a class="bg-[#C0C0C0] w-[30vw] h-[37vw] text-black rounded-xl" href="/details/{{$pro['Name']}}">
                    <div class="w-[20vw] h-[20vw] ml-[5vw] pt-[5vw] ">
                        <img  src="Assets/Topi.jpg" alt="">
                    </div>
                    <p class="ml-[2vw] mt-[7vw]">Product name   : {{$pro['Name']}}</p>
                    <div class="ml-[2vw] flex flex-row">
                        <p>Product status : </p>
                        <p class="text-transparent">.</p>
                        <p class="font-bold"> {{$pro['Status']}}</p>
                    </div>
                    <p class="ml-[2vw]">Product price  : {{$pro['Price']}}</p>
                </a>
            @endif
        @endforeach

    </div>
@endsection
