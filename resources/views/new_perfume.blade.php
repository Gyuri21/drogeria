@extends( "layouts.master" )

@section( "content" )
@section( "title", "Új termék" )

<form action="add-perfume" method="post">
    @csrf
    <p>
        <label for="">Név</label>
        <input type="text" name="name">
    </p>
    @error( "name" )
            <span>{{ $message }}</span>
        @enderror
    <p>
        <label for="">Típus</label>
        <input type="text" name="type">
    </p>
    @error( "type" )
            <span>{{ $message }}</span>
        @enderror
    <p>
        <label for="">Ár</label>
        <input type="text" name="price">
    </p>
    @error( "price" )
            <span>{{ $message }}</span>
        @enderror
    <p>
        <button type="submit">Küldés</button>
    </p>
</form>
@endsection