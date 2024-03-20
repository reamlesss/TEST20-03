<nav class="navbar navbar-expand-lg bg-success" data-bs-theme="light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">ChovateleZvirat</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">home</a>
                </li>
                <?php
                session_start();
                if(isset($_SESSION['username'])) {
                    echo '<li class="nav-item">
                        <a class="nav-link active" href="owned-list.php">Animal-list</a>
                        </li>';
                                    echo '<li class="nav-item">
                        <a class="nav-link active" href="wish-list.php">Animal-WishList</a>
                      </li>';
                                    echo '<li class="nav-item">
                        <a class="nav-link active " href="logout.php">Log out</a>
                      </li>';
                }
                ?>
            </ul>
        </div>
    </div>
</nav>
