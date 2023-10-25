<h2>{{ $product->title }}</h2>
<img src="{{ $product->featured_image }}" alt="{{ $product->title }}" width="100%">
<p>{{ $product->description }}</p>
<button class="buy-button">Buy</button>
<button class="try-button">Try</button>