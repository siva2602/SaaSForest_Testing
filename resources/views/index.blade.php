<!DOCTYPE html>
<html lang="en">

<head>
    <title>Bootstrap Example</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .border-box-login {
            padding: 1px 10px;
            border: 1px solid #000;
        }

        a {
            font-size: 14px !important;
            color: #000;
        }

        .a-tag-login {
            padding: 0 10px;
        }

        .border-left {
            border-left: 1px solid #000;
        }

        .border-right {
            border-right: 1px solid #000;
        }

        .container-fluid {
            width: 95%;
        }

        .border-top {
            border-top: 1px solid #000 !important;
        }

        .border-bottom {
            border-bottom: 1px solid #000 !important;
        }

        .active-menu {
            border: 1px solid #000;
            background: #000;
            color: #fff;
        }

        .padding-left-right {
            padding: 10px 30px;
        }

        .padding-left-right a {
            padding: 0 !important;
        }

        .active-menu a {
            color: #fff;
        }

        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;800&display=swap');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif
        }

        .container-fluid .product-item {
            min-height: 450px;
            border: none;
            overflow: hidden;
            position: relative;
            border-radius: 0;

        }

        .container-fluid .product-item .product {
            width: 100%;
            height: 350px;
            position: relative;
            overflow: hidden;
            cursor: pointer
        }

        .container-fluid .product-item .product img {
            width: 100%;
            height: 100%;
            object-fit: cover
        }

        .container-fluid .product-item .product .icons .icon {
            width: 40px;
            height: 40px;
            background-color: #fff;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: transform 0.6s ease;
            transform: rotate(180deg);
            cursor: pointer
        }

        .container-fluid .product-item .product .icons .icon:hover {
            background-color: #b71c1c;
            color: #fff
        }

        .container-fluid .product-item .product .icons .icon:nth-last-of-type(3) {
            transition-delay: 0.2s
        }

        .container-fluid .product-item .product .icons .icon:nth-last-of-type(2) {
            transition-delay: 0.15s
        }

        .container-fluid .product-item .product .icons .icon:nth-last-of-type(1) {
            transition-delay: 0.1s
        }

        .container-fluid .product-item:hover .product .icons .icon {
            transform: translateY(-60px)
        }

        .container-fluid .product-item .tag {
            text-transform: uppercase;
            font-size: 0.75rem;
            font-weight: 500;
            position: absolute;
            top: 10px;
            left: 20px;
            padding: 0 0.4rem
        }

        .container-fluid .product-item .title {
            font-size: 0.95rem;
            letter-spacing: 0.5px
        }

        .container-fluid .product-item .fa-star {
            font-size: 0.65rem;
            color: goldenrod
        }

        .container-fluid .product-item .price {
            margin-top: 10px;
            margin-bottom: 10px;
            font-weight: 600
        }

        .fw-800 {
            font-weight: 800
        }

        .bg-green {
            background-color: #208f20 !important;
            color: #fff
        }

        .bg-black {
            background-color: #1f1d1d;
            color: #fff
        }

        .bg-red {
            background-color: #bb3535;
            color: #fff
        }

        @media (max-width: 767.5px) {

            .navbar-nav .nav-link.active,
            .navbar-nav .nav-link:hover {
                background-color: #b71c1c;
                color: #fff !important
            }

            .navbar-nav .nav-link {
                border: 3px solid transparent;
                margin: 0.8rem 0;
                display: flex;
                border-radius: 10px;
                justify-content: center
            }
        }

        .margin-product-list {
            margin: 30px auto;
        }

        .product-list-cart {
            width: 100%;
            top: -45px;
            position: relative;
            padding: 11px 10px;
            background: #1e2832;
            color: #fff;
        }

        .product-list-title {
            width: 100%;
            top: -45px;
            position: relative;
            padding: 11px 10px;
        }

        .product-cart-amount {
            float: left;
        }

        .product-add-to-cart {
            float: right;
        }

        .product-add-to-cart svg {
            top: -3px;
            position: relative;
        }

        h5 {
            margin-bottom: 0;
        }

        .dot {
            width: 100px;
            min-height: 100px;
            height: 100px;
            padding: 10px;
            border-radius: 50%;
            text-align: center;
            font-size: 14px;
            border: 2px solid #666;
        }

        .dot-color {
            width: 100px;
            min-height: 100px;
            height: 100px;
            padding: 10px;
            border-radius: 50%;
            text-align: center;
            font-size: 14px;
        }

        a {
            color: #000;
            text-decoration: none !important;
        }

        .search-textbox,
        .search-textbox:focus-visible {
            font-size: 14px;
            border: 0 !important;
            width: 250px;
        }

        .nav-link {
            color: #000;
        }

        input:focus-visible {
            outline: none;
        }

        .badge {
            padding-left: 9px;
            padding-right: 9px;
            -webkit-border-radius: 9px;
            -moz-border-radius: 9px;
            border-radius: 9px;
        }

        .label-warning[href],
        .badge-warning[href] {
            background-color: #c67605;
        }

        #lblCartCount {
            font-size: 10px;
            background: #000;
            color: #fff;
            padding: 1px;
            vertical-align: top;
            margin-left: -10px;
            border-radius: 50%;
            width: 18px;
            font-weight: unset;
    line-height: unset;
            text-align: center;
            display: inline-block;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-sm mt-1 mb-1">
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
                <a class="a-tag-login" href="#">Login</a>
                <a class="a-tag-login border-left" href="#">Register</a>
            </div>
        </div>
    </nav>
    <div class="navbar navbar-expand-sm  border-top border-bottom p-0">
        <div class="container-fluid ">
            <ul class="navbar-nav">
                <li class="nav-item padding-left-right active-menu">
                    <a class="nav-link" href="#">Men's</a>
                </li>
                <li class="nav-item padding-left-right border-right">
                    <a class="nav-link" href="#">Men's</a>
                </li>
                <li class="nav-item padding-left-right border-right">
                    <a class="nav-link" href="#">Men's</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item padding-left-right">
                    <input class="search-textbox" type="text" placeholder="SEARCH" /> <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M18.0917 16.9083L15 13.8417C16.2001 12.3454 16.7813 10.4461 16.6241 8.53443C16.4668 6.62276 15.5831 4.844 14.1546 3.56388C12.7262 2.28377 10.8615 1.5996 8.94414 1.65207C7.02674 1.70454 5.20231 2.48965 3.84599 3.84596C2.48968 5.20228 1.70457 7.02671 1.6521 8.94411C1.59963 10.8615 2.2838 12.7262 3.56391 14.1546C4.84403 15.5831 6.62279 16.4668 8.53446 16.624C10.4461 16.7813 12.3454 16.2001 13.8417 15L16.9084 18.0667C16.9858 18.1448 17.078 18.2068 17.1796 18.2491C17.2811 18.2914 17.39 18.3132 17.5 18.3132C17.6101 18.3132 17.719 18.2914 17.8205 18.2491C17.9221 18.2068 18.0142 18.1448 18.0917 18.0667C18.2419 17.9113 18.3259 17.7036 18.3259 17.4875C18.3259 17.2714 18.2419 17.0637 18.0917 16.9083ZM9.16671 15C8.01298 15 6.88517 14.6579 5.92588 14.0169C4.9666 13.3759 4.21892 12.4649 3.77741 11.399C3.3359 10.3331 3.22038 9.16021 3.44546 8.02865C3.67054 6.8971 4.22611 5.8577 5.04192 5.04189C5.85773 4.22608 6.89713 3.67051 8.02868 3.44543C9.16024 3.22035 10.3331 3.33587 11.399 3.77738C12.4649 4.21889 13.376 4.96657 14.0169 5.92585C14.6579 6.88514 15 8.01295 15 9.16668C15 10.7138 14.3855 12.1975 13.2915 13.2915C12.1975 14.3854 10.7138 15 9.16671 15Z" fill="black" />
                    </svg>

                </li>
                <li class="nav-item padding-left-right border-right">
                    <a class="nav-link" href="#">Cart <svg width="50" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8333 5.83332H13.3333V4.99999C13.3333 4.11594 12.9821 3.26809 12.3569 2.64297C11.7318 2.01785 10.884 1.66666 9.99992 1.66666C9.11586 1.66666 8.26802 2.01785 7.6429 2.64297C7.01777 3.26809 6.66658 4.11594 6.66658 4.99999V5.83332H4.16659C3.94557 5.83332 3.73361 5.92112 3.57733 6.0774C3.42105 6.23368 3.33325 6.44564 3.33325 6.66666V15.8333C3.33325 16.4964 3.59664 17.1323 4.06549 17.6011C4.53433 18.0699 5.17021 18.3333 5.83325 18.3333H14.1666C14.8296 18.3333 15.4655 18.0699 15.9344 17.6011C16.4032 17.1323 16.6666 16.4964 16.6666 15.8333V6.66666C16.6666 6.44564 16.5788 6.23368 16.4225 6.0774C16.2662 5.92112 16.0543 5.83332 15.8333 5.83332ZM8.33325 4.99999C8.33325 4.55796 8.50885 4.13404 8.82141 3.82148C9.13397 3.50892 9.55789 3.33332 9.99992 3.33332C10.4419 3.33332 10.8659 3.50892 11.1784 3.82148C11.491 4.13404 11.6666 4.55796 11.6666 4.99999V5.83332H8.33325V4.99999ZM14.9999 15.8333C14.9999 16.0543 14.9121 16.2663 14.7558 16.4226C14.5996 16.5789 14.3876 16.6667 14.1666 16.6667H5.83325C5.61224 16.6667 5.40028 16.5789 5.244 16.4226C5.08772 16.2663 4.99992 16.0543 4.99992 15.8333V7.49999H6.66658V8.33332C6.66658 8.55434 6.75438 8.7663 6.91066 8.92258C7.06694 9.07886 7.2789 9.16666 7.49992 9.16666C7.72093 9.16666 7.93289 9.07886 8.08917 8.92258C8.24545 8.7663 8.33325 8.55434 8.33325 8.33332V7.49999H11.6666V8.33332C11.6666 8.55434 11.7544 8.7663 11.9107 8.92258C12.0669 9.07886 12.2789 9.16666 12.4999 9.16666C12.7209 9.16666 12.9329 9.07886 13.0892 8.92258C13.2455 8.7663 13.3333 8.55434 13.3333 8.33332V7.49999H14.9999V15.8333Z" fill="black" />
                        </svg><span class='badge badge-warning' id='lblCartCount'> 5 </span></a>
                </li>
            </ul>
        </div>
    </div>

    <div class="container-fluid margin-product-list">
        <div class="row">
            @for ($i=0; $i< 10; $i++) <div class="col-lg-3 col-sm-6 d-flex flex-column align-items-center justify-content-center product-item">
                <div class="product">
                    <img src="{{ asset('image/product.png') }}" alt="">
                </div>
                <div class="product-list-cart">
                    <div class="product-cart-amount">RS. 1000</div>
                    <div class="product-add-to-cart"><svg width="50" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.8333 5.83332H13.3333V4.99999C13.3333 4.11594 12.9821 3.26809 12.3569 2.64297C11.7318 2.01785 10.884 1.66666 9.99992 1.66666C9.11586 1.66666 8.26802 2.01785 7.6429 2.64297C7.01777 3.26809 6.66658 4.11594 6.66658 4.99999V5.83332H4.16659C3.94557 5.83332 3.73361 5.92112 3.57733 6.0774C3.42105 6.23368 3.33325 6.44564 3.33325 6.66666V15.8333C3.33325 16.4964 3.59664 17.1323 4.06549 17.6011C4.53433 18.0699 5.17021 18.3333 5.83325 18.3333H14.1666C14.8296 18.3333 15.4655 18.0699 15.9344 17.6011C16.4032 17.1323 16.6666 16.4964 16.6666 15.8333V6.66666C16.6666 6.44564 16.5788 6.23368 16.4225 6.0774C16.2662 5.92112 16.0543 5.83332 15.8333 5.83332ZM8.33325 4.99999C8.33325 4.55796 8.50885 4.13404 8.82141 3.82148C9.13397 3.50892 9.55789 3.33332 9.99992 3.33332C10.4419 3.33332 10.8659 3.50892 11.1784 3.82148C11.491 4.13404 11.6666 4.55796 11.6666 4.99999V5.83332H8.33325V4.99999ZM14.9999 15.8333C14.9999 16.0543 14.9121 16.2663 14.7558 16.4226C14.5996 16.5789 14.3876 16.6667 14.1666 16.6667H5.83325C5.61224 16.6667 5.40028 16.5789 5.244 16.4226C5.08772 16.2663 4.99992 16.0543 4.99992 15.8333V7.49999H6.66658V8.33332C6.66658 8.55434 6.75438 8.7663 6.91066 8.92258C7.06694 9.07886 7.2789 9.16666 7.49992 9.16666C7.72093 9.16666 7.93289 9.07886 8.08917 8.92258C8.24545 8.7663 8.33325 8.55434 8.33325 8.33332V7.49999H11.6666V8.33332C11.6666 8.55434 11.7544 8.7663 11.9107 8.92258C12.0669 9.07886 12.2789 9.16666 12.4999 9.16666C12.7209 9.16666 12.9329 9.07886 13.0892 8.92258C13.2455 8.7663 13.3333 8.55434 13.3333 8.33332V7.49999H14.9999V15.8333Z" fill="white" />
                        </svg><span> Add Cart</span></div>
                </div>
                <div class="product-list-title">
                    <div class="product-cart-amount">Product {{ $i }}</div>
                </div>
                <div class="product-list-title">
                    <div class="product-cart-amount">
                        <p>Size</p>
                        <p>
                            <span class="dot">39</span>
                            <span class="dot">39</span>
                            <span class="dot">39</span>
                        </p>
                    </div>
                    <div class="product-add-to-cart">
                        <p>Color</p>
                        <p>
                            <span class="dot-color" style="background-color: #1f1d1d;">39</span>
                            <span class="dot-color" style="background-color: #000; color:#fff"><i class="fa fa-check" aria-hidden="true"></i></span>
                            <span class="dot-color" style="background-color: #b71c1c;">39</span>
                        </p>
                    </div>
                </div>
        </div>
        @endfor
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>
