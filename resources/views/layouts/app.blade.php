<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>

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
        <livewire:nav-bar />
    </section>

    <section class="container-fluid margin-product-list">
    {{ $slot }}
    </section>

    @include('_login_modal')

    @include('_custom_js')
</body>

</html>
