<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="/"><img  width="150"  src="/assets/images/logo.png" alt=""></a>
    <div class="navbar-brand">Developers Dashboard</div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/payloads-list">Payloads Recieved</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/trs-histories">TRS Payloads Sent</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/trello">Trello</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" target=_blank href="/log-viewer/logs/{{\Carbon\Carbon::now()->toDateString()}}">Today's Log</a>
            </li>
        </ul>
    </div>
</nav>