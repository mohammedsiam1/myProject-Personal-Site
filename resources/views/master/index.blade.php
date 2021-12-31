<!DOCTYPE html>
<html dir="rtl" lang="ar">
<head>
    <meta charset="UTF-8">
    <title>My Web Site</title>
    @include('pages.links')

</head>
<body>


@include('pages.header')



<!-- home section starts  -->

@include('pages.homeSection')

@include('pages.aboutMeSection')

<!-- service section starts  -->

@include('pages.serveisSection')

@include('pages.MyProfile')

<!-- blog section start  -->

@include('pages.plogSection')


<!-- contact section starts  -->
@include('pages.contuneo')


<!-- footer section  -->
@foreach ($infoFooters as $infoFooter)

@endforeach
    <div class="footer">{{  $infoFooter->Titel  }} <span> {{ $infoFooter->Year }} </span> </div>


@include('pages.scripts')
</body>
</html>
