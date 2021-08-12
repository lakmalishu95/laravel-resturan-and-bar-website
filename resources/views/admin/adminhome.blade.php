<!DOCTYPE html>
<html lang="en">
    <head>
        @include("admin.admincss")
    </head>

<body>
    <div class="container-scroller">
    @include('admin.sidebar')
    @include("admin.navbar")
        <div class="main-panel">
            <div class="content-wrapper">
            </div>
        </div>   
    @include("admin.adminscript")
    </div>
</body>
</html>
