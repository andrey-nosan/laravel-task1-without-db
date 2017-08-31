<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
            </button>
            <a class="navbar-brand" href="/">LARAVEL TASK 1</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="menu">
                <li class="active"><a href="{{ route('articles')}} ">Articles</a></li>
                <li class="active"><a href="{{route('about')}}">About</a></li>
                <li class="active"><a href="{{route('contactUs')}}">Contact Us</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>