<!DOCTYPE html>
<html lang="fr, en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ask-it</title>

    <link rel="stylesheet" href="css/style.css">
    <script type="text/javascript" defer async src="js/script.js"></script>
    <?php include'function.php'; ?>
</head>

<body>
    <div class="toggle">
        <div class="toggle-icon">
            <div class="menu-icon">
                <input class="menu-icon__cheeckbox" type="checkbox" />
                <div>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>

    <header>
        <div class="nav-background"></div>
        <nav>
            <div class="logo">
                <h1>ask-it</h1>
            </div>
            <div class="nav-menu">
                <div class="profil">
                    <div class="profil-logo"><img alt="profil-logo" src="images/1x/Fichier 1-80.jpg"></div>
                    <div class="account-settings">

                    <?php
                    $connect = is_connect();/*boolean if user is connect*/

                    if ($connect) {
                        /*formulaire afficher par défaut si connecté*/
                        echo'
                        <form action="index.html" method="post">
                            <div class="account-profil">
                                <div>
                                    <a class="form-active">profil</a>
                                    <a>d&eacute;connexion</a>
                                </div>
                                <h2>Profil</h2>
                                <label for="name">nom</label>
                                <input type="text" id="fname" name="fname">
                                <label for="email">email</label>
                                <input type="text" id="email" name="email">
                                <label for="password">password</label>
                                <input type="password" id="password" name="password">
                            </div>
                            <div>
                                <h3>centres d&apos;int&eacute;r&ecirc;ts</h3>
                                <div class="tags">
                                    <input type="checkbox" name="php" id="php">
                                    <label for="php">php</label>
                                    <input type="checkbox" name="python" id="python">
                                    <label for="python">python</label>
                                    <input type="checkbox" name="css" id="css">
                                    <label for="css">css</label>
                                    <input type="checkbox" name="javascript" id="javascript">
                                    <label for="javascript">javascript</label>
                                    <input type="checkbox" name="cms" id="cms">
                                    <label for="cms">cms</label>
                                    <input type="checkbox" name="virtual-box" id="virtual-box">
                                    <label for="virtual-box">virtual-box</label>
                                    <input type="checkbox" name="html" id="html">
                                    <label for="html">html</label>
                                    <input type="checkbox" name="ui / ux" id="ui / ux">
                                    <label for="ui / ux">ui / ux</label>
                                    <input type="checkbox" name="autres" id="autres">
                                    <label for="autres">autres</label>
                                </div>
                            </div>
                            <button type="submit" class="registerbtn">
                                Enregistrer
                                <div class="icon-arrow"></div>
                            </button>
                        </form>
                        ';
                    } else {
                        /*switch des formulaires inscription et connexion avec JavaScript*/
                        /*class log-hidden = formulaire masquer par défaut si non connecté*/
                        echo'    
                        <form class="connexion log-hidden" action="index.html" method="post">
                            <div class="">
                                <div>
                                    <a class="form-active">connexion</a>
                                    <a>inscription</a>
                                </div>
                                <h2>Connexion</h2>
                                <label for="email">email</label>
                                <input type="text" id="email" name="email">
                                <label for="password">password</label>
                                <input type="password" id="password" name="password">
                            </div>
                            
                            <button type="submit" class="registerbtn">
                                Enregistrer
                                <div class="icon-arrow"></div>
                            </button>
                        </form>
                        ';

                        /*pas de class log-hidden = formulaire afficher par défaut si non connecté*/
                        echo'
                        <form class="inscription" action="inscription.php" method="post">
                            <div class="">
                                <div>
                                    <a>connexion</a>
                                    <a class="form-active">inscription</a>
                                </div>
                                <h2>Inscription</h2>
                                <label for="fname">nom</label>
                                <input type="name" id="fname" name="fname">
                                <label for="registerEmail">email</label>
                                <input type="email" id="registerEmail" name="registerEmail">
                                <label for="registerPassword">password</label>
                                <input type="password" id="registerPassword" name="registerPassword">
                            </div>
                            
                            <button type="submit" class="registerbtn">
                                Enregistrer
                                <div class="icon-arrow"></div>
                            </button>
                        </form>
                        ';
                        
                    }
                    ?>
                    </div>
                </div>


            </div>
        </nav>
    </header>

    <main>
        <div class="question">
            <div class="question-container">
                <h2>Mes questions</h2>
                <div class="my-question">
                    <div class="question-list">
                        <ul>
                            <li>
                                <h3>Help media query, comment sp&eacute;cifier le type d'orientation ?</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                    <li><a class="edit" href="#edit">edit</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Installation virtual box</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                    <li><a class="edit" href="#edit">edit</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Quelle technologie introduire dans son projet pour l'accélérer ?</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                    <li><a class="edit" href="#edit">edit</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Help validation w3c</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                    <li><a class="edit" href="#edit">edit</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Comment faire une fonction en php ?</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                    <li><a class="edit" href="#edit">edit</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Wordpress, cr&eacute;ation th&egrave;me enfant</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                    <li><a class="edit" href="#edit">edit</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Help media query, comment sp&eacute;cifier le type d'orientation.</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                    <li><a class="edit" href="#edit">edit</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Help media query, comment sp&eacute;cifier le type d'orientation.</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                    <li><a class="edit" href="#edit">edit</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Help media query, comment sp&eacute;cifier le type d'orientation.</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                    <li><a class="edit" href="#edit">edit</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Help media query, comment sp&eacute;cifier le type d'orientation.</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                    <li><a class="edit" href="#edit">edit</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    
                    <div id=searchContainer>
                        <div class="wrap">
                            <div class="search">
                                <input type="text" class="searchTerm" placeholder="What are you looking for?">
                                <button type="submit" class="searchButton">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <br/>
            <div class="question-container">
                <h2>Toutes les questions</h2>
                <div class="all-question">
                    <div class="question-list">
                        <ul>
                            <li>
                                <h3>Help media query, comment sp&eacute;cifier le type d'orientation ?</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Installation virtual box</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Qu'elle technologie introduire dans son projet pour l'accélérer ?</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Help validation w3c</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Comment faire une fonction en php ?</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Wordpress, cr&eacute;ation th&egrave;me enfant</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Help media query, comment sp&eacute;cifier le type d'orientation.</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Help media query, comment sp&eacute;cifier le type d'orientation.</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Help media query, comment sp&eacute;cifier le type d'orientation.</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                </ul>
                            </li>
                            <li>
                                <h3>Help media query, comment sp&eacute;cifier le type d'orientation.</h3>
                                <ul>
                                    <li><a class="cat" href="categorie">css</a></li>
                                    <li><a class="view-question" href="#voir">voir</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>       
                    
                    <div id=searchContainer>
                        <div class="wrap">
                            <div class="search">
                                <input type="text" class="searchTerm" placeholder="What are you looking for?">
                                <button type="submit" class="searchButton">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
        
        <div class="container">
            <h2>Créer une question</h2>
            <div class="new-question">
                <div class="new-question-settings">
                    <div class="new-question-title"></div>
                    <ul>
                        <li class=questionMark>
                            <input type="checkbox" name="brouillon" id="brouillon">
                            <label for="brouillon">Cr&eacute;er cette question en tant que brouillon</label>
                        </li>
                        <li class=questionMark>
                            <input type="checkbox" name="priority" id="priority">
                            <label for="priority">D&eacute;clarer cette question comme urgente</label>
                        </li>
                    </ul>
                </div>
                <div class="info-question">
                    <input class=questionMark type="text" name="question">
                    <textarea class=questionMark name="description-question"></textarea>
                </div>
                <button class=questionMark type="submit" class="create-question-btn">
                    Cr&eacute;er ma question
                    <div class="icon-arrow"></div>
                </button>
            </div>
        </div>
    </main>
</body>

</html>