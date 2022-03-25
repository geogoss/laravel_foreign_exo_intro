@include('layouts.flash')

<div class="w-50 mx-auto mt-5">
    <form action="/car" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Car</label>
            <input type="text" name="car" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <select name="color_id" class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            @foreach ($colors as $color)
                <option value={{ $color->id }}>{{ $color->color }}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

{{-- <div>
@foreach ($cars as $car)
    <h1>{{$car->car}}</h1>
    <h3>{{$car->color->color}}</h3>
@endforeach
</div> --}}
<div class="w-50 mx-auto mt-5">
    @foreach ($colors as $color)
        <h2>L'élément : {{ $color->color }}</h2>
        @foreach ($color->car as $car)
            <h5 class="ms-5"> possède -> {{ $car->car }} </h5>
        @endforeach
    @endforeach
</div>
