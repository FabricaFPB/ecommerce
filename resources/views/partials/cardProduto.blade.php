<div class="card">
  <div class="card-image card-image-fixed">
    <img src="{{ $imagem ?? 'images/placeholder.jpg'}}">
  </div>
  <div class="card-content">
    <p class="card-title" style="color: {{ $corTitulo ?? 'white' }};">{{ $titulo ?? 'Produto' }}</p>
    <p>{{ $corDesc ?? 'Descrição do produto' }}</p>
    <div class="price-container" style="margin-top: 10px;">
      @if(isset($precoAntigo))
      <span class="grey-text" style="text-decoration: line-through;">{{ $precoAntigo }}</span>
    @endif
      <h5 class="blue-text bolder">{{ $precoProduto ?? 'R$ 10,00' }}</h5>
    </div>
    <div class="cartArea">
      <a href="#" class="waves-effect waves-light btn blue">
        <i class="material-icons">shopping_cart</i>
        <span>Adicionar</span>
      </a>
    </div>
  </div>
  <div class="card-action">
    <a href="{{$link ?? '#'}}">Ver produto</a>
  </div>
</div>