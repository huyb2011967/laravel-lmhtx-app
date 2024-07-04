<!doctype html>
<html lang="en">

@include('client.head')

<body>
    <div class="main-wrapper">
        <!-- header + nav -->
        @include('client.header')
        <!-- header + nav END -->

        <!-- body + footer -->
        <div class="inner-wrapper">
            <div class="main">

                <div class="main-content">
                    <!-- page head tile -->
                    <div class="page-head-tile">
                        <div class="container">
                            <div class="breadcrumbs-block">
                                <ul class="breadcrumbs">
                                    <li class="bc-item">
                                        <a href="{{route('home')}}">Trang chủ</a>
                                        <i class="fa fa-angle-right"></i>
                                    </li>
                                    <li class="bc-item">
                                        <a href="#">{{$title}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- page head tile END -->
                    <div class="section" style="position: relative;">
                        <div class="row">
                            @yield('content-articles')
                            <!-- side bar -->
                            @include('client.sidebar')
                            <!-- side bar END -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END -->
    </div>

    @include('client.btnBackTop')

    @include('client.footer')

    @include('client.script')

</body>

</html>