<nav class="bor bor-expand-lg bor-light bg-light">
                <a class="bor-brand" href="#" id="logo">Borga</a>
                <button class="bor-toggler custom-toggler" type="button" data-toggle="collapse"
                    data-target="#borNavDropdown" aria-controls="borNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="bor-toggler-icon"></span>
                </button>
                <div class="collapse bor-collapse" id="borNavDropdown">
                    <ul class="bor-nav">
                        <li class="b-item mr-auto">
                            <?php
                                    if(isset($_SESSION['NameEmail']))
                                    {
                                            echo '<h1>'.$_SESSION['NameEmail'].'</h1>';

                                            echo '<a class="b-link" href="includes/logout.inc.php"> logout<img src="images/icons/user.png" alt=""
                                    style="height: 0.85em;"> </a>';
                                    }
                                    else
                                    {
                                            echo '<a class="b-link" href="login.php">login <img src="images/icons/user.png" alt=""
                                    style="height: 0.85em;"> </a>';
                                    }
                            ?>
                          
                        </li>

                    </ul>
                </div>
            </nav>