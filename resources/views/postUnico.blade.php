@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row align-items-center h-100">
        <div class="card col-md-8 mx-auto">
            <img src="{{asset($post->image) }}" alt="..." class="card-img-top">
            <div class="card-body">
                <h5 class="card-title">
                        {{$post->title}}
                </h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    {{ $post->created_at }}
                </h6>
                <p class="card-text">
                    {{ $post->content}}
                </p>
                <a href="{{url('/')}}" class="card-link">
                    Todas las publicaciones
                </a>
            </div>
            <div>
                @guest
                    <h4><b>Comentarios</b></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit ante viverra nostra ornare. Placerat nisl bibendum sociosqu pulvinar euismod velit neque mattis nunc, luctus dui mus tristique nibh nulla nisi eget interdum nec, tempor class suspendisse dis maecenas quis rhoncus libero</P>
                    <p style="position: relative; left:18.5cm">User 1 </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit ante viverra nostra ornare. Placerat nisl bibendum sociosqu pulvinar euismod velit neque mattis nunc, luctus dui mus tristique nibh nulla nisi eget interdum nec, tempor class suspendisse dis maecenas quis rhoncus libero</P>
                    <p style="position: relative; left:18.5cm">User 2 </p>

                @else
                    <textarea name="" id="" cols="100" rows="7" placeholder="Comenta"></textarea>
                    <input type="submit" value="Enviar" style="margin-bottom:30px; position: relative; left:18.5cm">
                    <h4><b>Comentarios</b></h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit ante viverra nostra ornare. Placerat nisl bibendum sociosqu pulvinar euismod velit neque mattis nunc, luctus dui mus tristique nibh nulla nisi eget interdum nec, tempor class suspendisse dis maecenas quis rhoncus libero</P>
                    <p style="position: relative; left:18.5cm">User 1 </p>
                    <p>Lorem ipsum dolor sit amet consectetur adipiscing, elit ante viverra nostra ornare. Placerat nisl bibendum sociosqu pulvinar euismod velit neque mattis nunc, luctus dui mus tristique nibh nulla nisi eget interdum nec, tempor class suspendisse dis maecenas quis rhoncus libero</P>
                    <p style="position: relative; left:18.5cm">User 2 </p>
                @endguest
            </div>
        </div>
    </div>
</div>
@endsection
