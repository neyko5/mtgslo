<!DOCTYPE html>
<html>
    @include("elements.head")
    <body class="pull_top">
        @include("elements.header")
        <div class="container">
            @yield("content")
        </div>
        @include("elements.footer")
    </body>
</html>
