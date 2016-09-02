<?php include "data.php" ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Alexis faye - CV</title>
    <meta name="description" content="TODO"/>

    
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no'>
    <meta http-equiv="cleartype" content="on">
    

    <link rel="stylesheet" href="main.css" media="screen, print"/>
</head>

<body>

    <div class="wrapper">
        <header class="header">
            <div class="header__inside">
                <div class="layout--small">
                    <div class="layout__item palm-1/1 lap-1/4 2/10">
                        <h1 class="header__name"><span class="header__name-label">Alexis Faye</span></h1>
                        <p class="header__infos">
                            35 ans | Paris 20e<br/>
                            alexis.faye@hotmail.fr
                        </p>
                    </div><!--
                 --><div class="layout__item palm-1/1 lap-2/4 7/10">

                        <h2 class="header__job">
                            <span class="header__job-label">CTO</span>
                            <span class="header__job-spe">Site à fort traffic / e-commerce</span>
                        </h2>
                    </div><!--
                 --><div class="layout__item palm-1/1 lap-1/4 1/10">
                        <img class="header__img" src="photo.jpg"/>
                    </div>
                </div>

            </div>
        </header>
        
        <div class="content">

            <h2 class="section-title"><span class="section-title__inside">Expérience</span></h2>

            <section class="section section--br-after">
                <div class="section__inside">
                    <?php foreach ($experiences as $experience) : ?>
                        <div class="exp">
                            <div class="layout--small">

                                <div class="layout__item palm-1/1 lap-1/4 2/10">
                                    <div class="exp__date"><?php echo $experience->title ?></div>
                                </div><!--
                             --><div class="layout__item palm-1/1 lap-3/4 8/10 ">
                                    <div class="exp__job"><?php echo $experience->job ?></div>
                                    <div class="exp__context"> @ <a href="<?php echo $experience->link ?>" class="exp__company"><?php echo $experience->company ?></a>, <?php echo $experience->area ?></div>
                                    <ul class="exp__tasks">
                                    <?php foreach ($experience->tasks as $task) : ?>
                                        <li class="exp__task"><?php echo $task ?></li>
                                    <?php endforeach ?>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    <?php endforeach ?>
                </div>
            </section>

            <h2 class="section-title section-title--br-before"><span class="section-title__inside">Expertise</span></h2>

            <section class="section">
                <div class="section__inside">
                    <?php foreach ($skills as $skill) : ?>
                        <div class="skill">
                            <div class="layout">
                                <div class="layout__item palm-1/1 lap-1/4 2/10">
                                    <div class="skill__title"><?php echo $skill->title ?></div>
                                </div><!--
                             --><div class="layout__item palm-1/1 lap-3/4 8/10">
                                    <?php echo $skill->detail ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
            </section>

            <h2 class="section-title"><span class="section-title__inside">Formation</span></h2>

            <section class="section">
                <div class="section__inside">
                    <?php foreach ($formations as $formation) : ?>
                        <div class="formation">
                            <div class="layout">
                                <div class="layout__item palm-1/1 lap-1/4 2/10">
                                    <div class="formation__date"><?php echo $formation->title ?></div>
                                </div><!--
                             --><div class="layout__item palm-1/1 lap-3/4 8/10">
                                    <?php echo $formation->detail ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
            </section>

            <h2 class="section-title"><span class="section-title__inside">Hobbies</span></h2>

            <section class="section">
                <div class="section__inside">
                    Danse (rock, tango), parachutisme, littérature et cinéma de science fiction, guitare, développement web
                </div>
            </section>

        </div>


        <footer class="footer">
            <div class="footer__inside">
                <span class="footer__elem">Site web : <a href="<?php echo $_SERVER['PHP_SELF']; ?>">alexis-faye.fr</a></span>
                <span class="footer__elem">twitter : <a href="https://twitter.com/Stolalex" target="_blank">@stolalex</a></span>
                <span class="footer__elem">github : <a href="https://github.com/stol" target="_blank">stol</a></span>
                <span class="footer__elem">Veille technologique : <a href="https://www.diigo.com/user/stolalex/" target="_blank">diigo.com/user/stolalex</a></span>
            </div>
        </footer>

    </div>

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-16219114-1', 'auto');
      ga('send', 'pageview');

</script>


</body>
</html>
