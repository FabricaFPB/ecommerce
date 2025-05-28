<div class="col s6 m6 m6">
    <div class="card">
        <div class="card-image card-image-fixed ">
            <img src="{{ $imagem ?? 'images/placeholder.jpg'}}">
            <span class="card-title" style="color: {{ $corTitulo ?? 'white' }};">{{ $titulo ?? 'Categorias' }}</span>
        </div>
        <div class="card-action">
            <a href="{{$link ?? '#'}}">Ver produtos</a>
        </div>
    </div>
</div>