
<section class="navbar-header">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="assets/images/logo.png" alt="" class="logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="true" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="index.php">{{ $home }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutus.php">{{ $aboutus }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="allcourse.php">{{ $allcourse }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="product.php">{{ $product7 }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="gallery.php">{{ $gallery }}</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">{{ $contactus }}</a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" href="login.php">{{ $login }}</a>
                </li> -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/{{ $profile }}" alt="" class='profile-icon'>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <?php if (isset($_SESSION['username'])) { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="user.php">{{ $user }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?logout='1'">{{ $logout }}</a>
                            </li>
                        <?php } else { ?>
                            <li class="nav-item">
                                <a class="nav-link" href="login.php">{{ $login }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="register.php">{{ $register }}</a>
                            </li>
                        <?php } ?>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="assets/images/{{ $flag }}" alt="">
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                        <li>
                            <a class="dropdown-item" wire:click="changeLanguage(1)">
                                <img src="{{asset("images/thflag.png")}}" alt="">
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" wire:click="changeLanguage(2)">
                                <img src="{{asset("images/enflag.png")}}" alt="">
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<script>
    function changeLng(id) {
        $.post("", {
                lang: id,
            },
            function(data, status) {
                location.reload();
            });
    }
</script>