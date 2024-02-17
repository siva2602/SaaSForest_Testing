<div class="container-fluid">
    <ul class="navbar-nav">
        @foreach ($categories as $index => $category)
        <li class="nav-item padding-left-right cursor" @if ($index==0) "active-menu " @else "border-right" @endif>
            <a class="nav-link" href="#">{{ $category->name  }}</a>
        </li>
        @endforeach
    </ul>
    <ul class="navbar-nav">
        <li class="nav-item padding-left-right">
            <form method="get" action="{{ route('home.index') }}">
                <input class="search-textbox" type="text" name="search_product" value="{{ $searchProduct ?? '' }}" placeholder="SEARCH" />
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
                </svg><span class='badge badge-warning' id='lblCartCount' x-text='lblCartCount = {{ $cartCount }}'></span></a>
        </li>
    </ul>
</div>
