<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="<?=BASEURL?>/home">Brand</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link <?=($data['title'] === 'Home' ? 'active' :  '')?>" href="<?=BASEURL?>/home">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?=($data['title'] === 'kelas' ? 'active' :  '')?>" href="<?=BASEURL?>/kelas">Kelas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled">Disabled</a>
            </li>
        </ul>
    </div>
</nav>
