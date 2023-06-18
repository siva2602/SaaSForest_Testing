<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/custom-css.css') }}">
</head>

<body>
    <section class="navbar navbar-expand-sm mt-1 mb-1">
        <div class="container-fluid">
            <div class="navbar-nav">
                <svg width="17" height="26" viewBox="0 0 17 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0.34 0.835998V-0.164002H-0.66V0.835998H0.34ZM16.936 0.835998H17.936V-0.164002H16.936V0.835998ZM16.936 3.932V4.932H17.936V3.932H16.936ZM4.012 3.932V2.932H3.012V3.932H4.012ZM4.012 11.96H3.012V12.96H4.012V11.96ZM13.66 11.96H14.66V10.96H13.66V11.96ZM13.66 14.876V15.876H14.66V14.876H13.66ZM4.012 14.876V13.876H3.012V14.876H4.012ZM4.012 26V27H5.012V26H4.012ZM0.34 26H-0.66V27H0.34V26ZM0.34 1.836H16.936V-0.164002H0.34V1.836ZM15.936 0.835998V3.932H17.936V0.835998H15.936ZM16.936 2.932H4.012V4.932H16.936V2.932ZM3.012 3.932V11.96H5.012V3.932H3.012ZM4.012 12.96H13.66V10.96H4.012V12.96ZM12.66 11.96V14.876H14.66V11.96H12.66ZM13.66 13.876H4.012V15.876H13.66V13.876ZM3.012 14.876V26H5.012V14.876H3.012ZM4.012 25H0.34V27H4.012V25ZM1.34 26V0.835998H-0.66V26H1.34Z" fill="black" />
                </svg>
            </div>
            <div class="navbar-nav">
                <h5>FAITHFUL BRAND</h5>
            </div>
            <div class="navbar-nav border-box-login">
                @if (!auth()->check())
                <span class="a-tag-login" onclick='loginFrom()'>Login</span>
                <span class="a-tag-login border-left" onclick='loginFrom()'>Register</span>
                @else
                <span class="a-tag-login">{{ auth()->user()->name }}</span>
                <a class="a-tag-login border-left" href="{{ route('auth.logout') }}">logout</a>
                @endif

            </div>
        </div>
    </section>
    <section class="navbar navbar-expand-sm  border-top border-bottom p-0">
        <div class="container-fluid ">
            <ul class="navbar-nav">
                @foreach ($categories as $index => $category)
                <li class="nav-item padding-left-right cursor @if ($index == 0) active-menu @else border-right @endif">
                    <a class="nav-link" href="#">{{ $category->name  }}</a>
                </li>
                @endforeach
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item padding-left-right">
                    <form method="get" action="{{ route('home.index') }}">
                        <input class="search-textbox" type="text" name="search_product" value="{{ $searchProduct }}" placeholder="SEARCH" />
                        <button type="submit" style="background: #fff;border: 0;">
                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.0917 16.9083L15 13.8417C16.2001 12.3454 16.7813 10.4461 16.6241 8.53443C16.4668 6.62276 15.5831 4.844 14.1546 3.56388C12.7262 2.28377 10.8615 1.5996 8.94414 1.65207C7.02674 1.70454 5.20231 2.48965 3.84599 3.84596C2.48968 5.20228 1.70457 7.02671 1.6521 8.94411C1.59963 10.8615 2.2838 12.7262 3.56391 14.1546C4.84403 15.5831 6.62279 16.4668 8.53446 16.624C10.4461 16.7813 12.3454 16.2001 13.8417 15L16.9084 18.0667C16.9858 18.1448 17.078 18.2068 17.1796 18.2491C17.2811 18.2914 17.39 18.3132 17.5 18.3132C17.6101 18.3132 17.719 18.2914 17.8205 18.2491C17.9221 18.2068 18.0142 18.1448 18.0917 18.0667C18.2419 17.9113 18.3259 17.7036 18.3259 17.4875C18.3259 17.2714 18.2419 17.0637 18.0917 16.9083ZM9.16671 15C8.01298 15 6.88517 14.6579 5.92588 14.0169C4.9666 13.3759 4.21892 12.4649 3.77741 11.399C3.3359 10.3331 3.22038 9.16021 3.44546 8.02865C3.67054 6.8971 4.22611 5.8577 5.04192 5.04189C5.85773 4.22608 6.89713 3.67051 8.02868 3.44543C9.16024 3.22035 10.3331 3.33587 11.399 3.77738C12.4649 4.21889 13.376 4.96657 14.0169 5.92585C14.6579 6.88514 15 8.01295 15 9.16668C15 10.7138 14.3855 12.1975 13.2915 13.2915C12.1975 14.3854 10.7138 15 9.16671 15Z" fill="black" />
                            </svg>
                        </button>
                    </form>

                </li>
                <li class="nav-item padding-left-right border-right">
                    <a class="nav-link" href="#">Cart <svg width="50" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8333 5.83332H13.3333V4.99999C13.3333 4.11594 12.9821 3.26809 12.3569 2.64297C11.7318 2.01785 10.884 1.66666 9.99992 1.66666C9.11586 1.66666 8.26802 2.01785 7.6429 2.64297C7.01777 3.26809 6.66658 4.11594 6.66658 4.99999V5.83332H4.16659C3.94557 5.83332 3.73361 5.92112 3.57733 6.0774C3.42105 6.23368 3.33325 6.44564 3.33325 6.66666V15.8333C3.33325 16.4964 3.59664 17.1323 4.06549 17.6011C4.53433 18.0699 5.17021 18.3333 5.83325 18.3333H14.1666C14.8296 18.3333 15.4655 18.0699 15.9344 17.6011C16.4032 17.1323 16.6666 16.4964 16.6666 15.8333V6.66666C16.6666 6.44564 16.5788 6.23368 16.4225 6.0774C16.2662 5.92112 16.0543 5.83332 15.8333 5.83332ZM8.33325 4.99999C8.33325 4.55796 8.50885 4.13404 8.82141 3.82148C9.13397 3.50892 9.55789 3.33332 9.99992 3.33332C10.4419 3.33332 10.8659 3.50892 11.1784 3.82148C11.491 4.13404 11.6666 4.55796 11.6666 4.99999V5.83332H8.33325V4.99999ZM14.9999 15.8333C14.9999 16.0543 14.9121 16.2663 14.7558 16.4226C14.5996 16.5789 14.3876 16.6667 14.1666 16.6667H5.83325C5.61224 16.6667 5.40028 16.5789 5.244 16.4226C5.08772 16.2663 4.99992 16.0543 4.99992 15.8333V7.49999H6.66658V8.33332C6.66658 8.55434 6.75438 8.7663 6.91066 8.92258C7.06694 9.07886 7.2789 9.16666 7.49992 9.16666C7.72093 9.16666 7.93289 9.07886 8.08917 8.92258C8.24545 8.7663 8.33325 8.55434 8.33325 8.33332V7.49999H11.6666V8.33332C11.6666 8.55434 11.7544 8.7663 11.9107 8.92258C12.0669 9.07886 12.2789 9.16666 12.4999 9.16666C12.7209 9.16666 12.9329 9.07886 13.0892 8.92258C13.2455 8.7663 13.3333 8.55434 13.3333 8.33332V7.49999H14.9999V15.8333Z" fill="black" />
                        </svg><span class='badge badge-warning' id='lblCartCount'> {{ $cartCount }} </span></a>
                </li>
            </ul>
        </div>
    </section>
    <section class="container-fluid margin-product-list">
        <div class="row">
            @foreach ($products as $product)
            <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item">
                <div class="product">
                    <img src="{{ asset('image/product.png') }}" alt="">
                </div>
                <div class="product-list-cart">
                    <div class="product-cart-amount" id="product_amount_{{ $product->id }}">RS. {{ $product->price  }}</div>
                    <div style='cursor: pointer;' @if (!auth()->check()) onclick = 'loginFrom()' @else onclick = 'addToCart({{ $product->id }})' @endif class="product-add-to-cart">
                        <svg width="50" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8333 5.83332H13.3333V4.99999C13.3333 4.11594 12.9821 3.26809 12.3569 2.64297C11.7318 2.01785 10.884 1.66666 9.99992 1.66666C9.11586 1.66666 8.26802 2.01785 7.6429 2.64297C7.01777 3.26809 6.66658 4.11594 6.66658 4.99999V5.83332H4.16659C3.94557 5.83332 3.73361 5.92112 3.57733 6.0774C3.42105 6.23368 3.33325 6.44564 3.33325 6.66666V15.8333C3.33325 16.4964 3.59664 17.1323 4.06549 17.6011C4.53433 18.0699 5.17021 18.3333 5.83325 18.3333H14.1666C14.8296 18.3333 15.4655 18.0699 15.9344 17.6011C16.4032 17.1323 16.6666 16.4964 16.6666 15.8333V6.66666C16.6666 6.44564 16.5788 6.23368 16.4225 6.0774C16.2662 5.92112 16.0543 5.83332 15.8333 5.83332ZM8.33325 4.99999C8.33325 4.55796 8.50885 4.13404 8.82141 3.82148C9.13397 3.50892 9.55789 3.33332 9.99992 3.33332C10.4419 3.33332 10.8659 3.50892 11.1784 3.82148C11.491 4.13404 11.6666 4.55796 11.6666 4.99999V5.83332H8.33325V4.99999ZM14.9999 15.8333C14.9999 16.0543 14.9121 16.2663 14.7558 16.4226C14.5996 16.5789 14.3876 16.6667 14.1666 16.6667H5.83325C5.61224 16.6667 5.40028 16.5789 5.244 16.4226C5.08772 16.2663 4.99992 16.0543 4.99992 15.8333V7.49999H6.66658V8.33332C6.66658 8.55434 6.75438 8.7663 6.91066 8.92258C7.06694 9.07886 7.2789 9.16666 7.49992 9.16666C7.72093 9.16666 7.93289 9.07886 8.08917 8.92258C8.24545 8.7663 8.33325 8.55434 8.33325 8.33332V7.49999H11.6666V8.33332C11.6666 8.55434 11.7544 8.7663 11.9107 8.92258C12.0669 9.07886 12.2789 9.16666 12.4999 9.16666C12.7209 9.16666 12.9329 9.07886 13.0892 8.92258C13.2455 8.7663 13.3333 8.55434 13.3333 8.33332V7.49999H14.9999V15.8333Z" fill="white" />
                        </svg><span> Add Cart</span>
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
                            <span id="product_{{ $product->id }}_size_{{ $size->id }}" class="dot cursor product-size-dot-{{ $product->id }}" @if (!auth()->check()) onclick = 'loginFrom()' @else onclick = 'selectSize({{ $product->id }} , {{ $size->id }})' @endif>{{ $size->size }}</span>
                            @endforeach
                        </p>
                    </div>
                    <div class="product-add-to-cart" id="product_color_{{ $product->id }}">
                        <p><span class="text-danger" id="error_product_color_{{ $product->id }}"></span>Color</p>
                        <p id='product-cart-variant-color-{{ $product->id }}'>
                            @foreach ($colors as $color )
                            <span class="dot-color cursor" id="product_{{ $product->id }}_color_{{ $color->id }}" @if (!auth()->check()) onclick = 'loginFrom()' @else onclick = 'selectColor({{ $product->id }} , {{ $color->id }})' @endif style="background-color: {{ $color->code }};">&nbsp;</span>
                            @endforeach
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>


    </section>
    @if (sizeOf($products) == 0)
        <div style="text-align: center;">
            <h4 class="text-center ">No Product available</h4>
            <a href="{{ route('home.index') }}" class="link_404">Go to Home</a>
        </div>
    @endif

    @include('_login_modal')

    @include('_custom_js')
</body>

</html>
