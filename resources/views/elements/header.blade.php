<div class="navbar navbar-inverse  navbar-static-top" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle pull-right" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="/" class="navbar-brand"><img src="/img/logo-small.png" /></a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse" role="navigation">
            <ul class="nav navbar-nav navbar-right">
                <li @if($page=="home")class="active"@endif><a href="/novice">Novice</a></li>
                <li @if($page=="articles")class="active"@endif><a href="/clanki">Članki</a></li>
                <li @if($page=="tournaments")class="active"@endif><a href="/turnirji">Turnirji</a></li>
                <li @if($page=="leagues")class="active"@endif><a href="/lige">Lige</a></li>
                <li @if($page=="stores")class="active"@endif><a href="/trgovine">Trgovine</a></li>
                <li @if($page=="competitions")class="active"@endif><a href="/nagradne">Nagradne igre</a></li>
            </ul>
        </div>
    </div>
</div>