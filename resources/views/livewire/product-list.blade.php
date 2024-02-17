<div class="row">
    @foreach ($products as $product)
    <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item" x-data="{selectedProduct: 0, selectedSize: 0, selectedColor: 0, errorMessage: '', 'currentPrice':0, variantId}">
        <div class="product">
            <img src="{{ asset('image/product.png') }}" alt="">
        </div>
        <div class="product-list-cart">
            <div class="product-cart-amount" id="product_amount_{{ $product->id }}">RS. <span x-text="(currentPrice > 0) ? currentPrice : {{ $product->price }}"></span></div>
            <div style='cursor: pointer;'  @click = "(!{{ auth()->check() }}) ? loginFrom() : $wire.addToCart(selectedProduct, variantId).then(result => {
                if(result['count']) {
                    alert('product add to cart');
                }
            });" class="product-add-to-cart">
                <div x-show="variantId > 0">
                    <svg width="50" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M15.8333 5.83332H13.3333V4.99999C13.3333 4.11594 12.9821 3.26809 12.3569 2.64297C11.7318 2.01785 10.884 1.66666 9.99992 1.66666C9.11586 1.66666 8.26802 2.01785 7.6429 2.64297C7.01777 3.26809 6.66658 4.11594 6.66658 4.99999V5.83332H4.16659C3.94557 5.83332 3.73361 5.92112 3.57733 6.0774C3.42105 6.23368 3.33325 6.44564 3.33325 6.66666V15.8333C3.33325 16.4964 3.59664 17.1323 4.06549 17.6011C4.53433 18.0699 5.17021 18.3333 5.83325 18.3333H14.1666C14.8296 18.3333 15.4655 18.0699 15.9344 17.6011C16.4032 17.1323 16.6666 16.4964 16.6666 15.8333V6.66666C16.6666 6.44564 16.5788 6.23368 16.4225 6.0774C16.2662 5.92112 16.0543 5.83332 15.8333 5.83332ZM8.33325 4.99999C8.33325 4.55796 8.50885 4.13404 8.82141 3.82148C9.13397 3.50892 9.55789 3.33332 9.99992 3.33332C10.4419 3.33332 10.8659 3.50892 11.1784 3.82148C11.491 4.13404 11.6666 4.55796 11.6666 4.99999V5.83332H8.33325V4.99999ZM14.9999 15.8333C14.9999 16.0543 14.9121 16.2663 14.7558 16.4226C14.5996 16.5789 14.3876 16.6667 14.1666 16.6667H5.83325C5.61224 16.6667 5.40028 16.5789 5.244 16.4226C5.08772 16.2663 4.99992 16.0543 4.99992 15.8333V7.49999H6.66658V8.33332C6.66658 8.55434 6.75438 8.7663 6.91066 8.92258C7.06694 9.07886 7.2789 9.16666 7.49992 9.16666C7.72093 9.16666 7.93289 9.07886 8.08917 8.92258C8.24545 8.7663 8.33325 8.55434 8.33325 8.33332V7.49999H11.6666V8.33332C11.6666 8.55434 11.7544 8.7663 11.9107 8.92258C12.0669 9.07886 12.2789 9.16666 12.4999 9.16666C12.7209 9.16666 12.9329 9.07886 13.0892 8.92258C13.2455 8.7663 13.3333 8.55434 13.3333 8.33332V7.49999H14.9999V15.8333Z" fill="white" />
                    </svg><span> Add Cart</span>
                </div>

            </div>
        </div>
        <div class="product-list-title">
            <div class="product-cart-amount"><strong>{{ $product->name }} </strong> </div>
        </div>
        <div class="product-list-title">
            <div class="product-cart-amount" id="product_size_{{ $product->id }}">
                <p><span class="text-danger" id="error_product_size_{{ $product->id }}"></span> Size</p>

                <p id='product-cart-variant-size-{{ $product->id }}'>
                    @foreach ($sizes as $size)
                    <span x-data="{selectedCurrentSize: 0}" id="product_{{ $product->id }}_size_{{ $size->id }}" :class="({{ $size->id }} == selectedSize) ? 'select-variant-size' : ''" class="dot cursor product-size-dot-{{ $product->id }}" @click="selectedCurrentSize = selectedSize={{ $size->id }}; selectedProduct = {{ $product->id }}; errorMessage=''; if(selectedColor > 0) {
                        $wire.getPrice(selectedProduct, selectedSize, selectedColor).then(data => {
                            currentPrice = data['price'];
                            variantId = data['variant_id'];
                        });
                    }">
                        {{ $size->size }}
                    </span>
                    @endforeach
                </p>
                <p><span x-text="errorMessage"></span></p>
            </div>
            <div class="product-add-to-cart" id="product_color_{{ $product->id }}" x-data="{faclass: 'fa fa-check'}">
                <p><span class="text-danger" id="error_product_color_{{ $product->id }}"></span>Color</p>
                <p id='product-cart-variant-color-{{ $product->id }}' x-data="{ faCheck: '<i :class=faclass aria-hidden=true style=color:#fff></i>' }">
                    @foreach ($colors as $color )
                    <span class="dot-color cursor" x-html="{{ $color->id }} == selectedColor ? faCheck : '&nbsp;' " id="product_{{ $product->id }}_color_{{ $color->id }}" @click="if(selectedSize > 0) { selectedColor = {{ $color->id }}; $wire.getPrice(selectedProduct, selectedSize, selectedColor).then(data => {
                            currentPrice = data['price'];
                            variantId = data['variant_id'];
                        });
                    } else { errorMessage='Select Size'; } " style="background-color: {{ $color->code }};"></span>
                    @endforeach
                </p>
            </div>
        </div>
    </div>
    @endforeach

    @if (sizeOf($products) == 0)
    <div style="text-align: center;">
        <h4 class="text-center ">No Product available</h4>
        <a href="{{ route('home.index') }}" class="link_404">Go to Home</a>
    </div>
    @endif

</div>
