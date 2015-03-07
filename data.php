<?php

$experiences = [
    [
        'title' => '2013 / actuellement',
        'job' => 'Lead Développeur Frontend',
        'company' => 'Académie du Goût (Webedia)',
        'link' => 'https://www.academiedugout.fr',
        'area' => 'Paris',
        'tasks' => [
            'Architecture et développement de toute la partie frontend du site <a href="https://www.academiedugout.fr" target="_blank">academiedugout.fr</a>',
            'Site responsive <em>Mobile first</em>',
            'Réflexion sur l\'ergonomie/UX de toutes les fonctionnalités du site, en association avec la DA',
            'Développement d\'un service (interne) de vidéo interractives et responsives',
            'Utilisation de la méthodologie <em>BEM</em> et de <em>Sass</em> pour l\'architecture CSS',
            'Outils notamment utilisés : Synfony2, angularJS, Sass, jQuery, bower, grunt, nodeJS, angularsJS, mongodb, mysql',
            'Versioning avec git, via github. Utilisation d\'un « gitflow » avec feature/fix branches et releases hebdomadaires',
            'Mise en place de tests fonctionnels automatisés via casperJS',
        ],
    ],[
        'title' => '2012 / 2013',
        'job' => 'Lead Développeur Frontend',
        'company' => 'Newsring (Webedia)',
        'link' => 'http://debats.terrafemina.com',
        'area' => 'Paris',
        'tasks' => [
            'Site de débat communautaire, avec messagerie et <em>UGC</em>, intégré par la suite au site <a href="http://debats.terrafemina.com" target="_blank">terrafemina.com</a> dans la rubrique « débats »',
            'Reprise en main et refonte de l\'intégralité de la partie frontend (templating + client) : mise en place d\'un preprocesseur CSS (sass) et de bonnes pratiques (méthodologie, architecture)',
            'Adaptation du site en Responsive Web Design',
            'Mise en place d\'un système de marque blanche, permettant de changer l\'apparence et les fonctionnalités du site en fonction de divers partenariats (tf1, eurosport...)',
            'Mis en place d\'un système de widgets, rendant exportable toute ou partie du site. Ces widgets sont des blocs de fonctionnalités (comme les « embed » youtube, facebook ou autre) affichés sur d\'autres sites. Chaque widget est personnalisable, tant niveau fonctionnalités qu\'apparence',
            'Mise en place de tests fonctionnels automatisés via casperJS',

        ],
    ],[
        'title' => '2011 / 2012',
        'job' => 'Développeur PHP/JS',
        'company' => 'Skyrock',
        'link' => 'http://www.skyrock.com',
        'area' => 'Paris',
        'tasks' => [
            'Architecture et structuration du code frontend. Mise en place de bonnes pratiques et d\'un framework maison inspiré de facebook (primer & bootloader)',
            'Architecture et migration du code backend. Développement d\'un framework maison MVC et mise en place de bonnes pratiques',
            'Transfert des connaissances via des présentations techniques et fonctionnelles',
            'Lead technique en petite équipe sur divers projets, dont la refonte des pages profil des utilisateurs, les albums photos ou encore la refonte de l\'espace d\'administration',
        ],
    ],[


        'title' => '2008 / 2011',
        'job' => 'Développeur Web',
        'company' => 'Cosmic Communication</a>',
        'link' => 'http://agencecosmic.com',
        'area' => 'Paris',
        'tasks' => [
            'Développement d\'intranets, d\'extranets et de sites corporate. Contact principal des clients pour le suivi technique des projets et leur formation aux outils',
            'Développement d\'une application type e-commerce avec le framework Ruby on Rails',
            'Administration de serveurs LAMP : installation et configuration d\'Apache et ses modules, de MySql ou encore de PHP. Gestion des environnement des dev/recette/prod',
            'Gestion administrative et technique des noms de domaines, configuration des DNS',
        ],
    ],[


        'title' => '2006 / 2007',
        'job' => 'Chargé de Q/A et Opérations Spéciales',
        'company' => 'Pixtel',
        'link' => 'http://www.pixtel.fr',
        'area' => 'Paris',
        'tasks' => [
            'Responsable Q/A des données intégrées en BDD, coordination des différents intervenants',
            'Développement en C, adaptation et suivi des opérations interactives (WAP, Audiotel, SMS)',

        ],
    ],[

        'title' => '2003 / 2006',
        'job' => 'Développeur Junior',
        'company' => 'Pixtel',
        'link' => 'http://www.pixtel.fr',
        'area' => 'Paris',
        'tasks' => [
            'Développement en PHP/MySql du site web de l\'équipe de jeux vidéo « goodgame »',
            'Intégration du site persomobiles.com, de sites WAP, et de services audiotel en C',
            'Suivi fonctionnel et technique d\'opérations interactives (WAP, Audiotel, SMS)',
        ],
    ],[


        'title' => '2001 / 2003',
        'job' => 'Assistant Technique (apprentissage/alternance)',
        'company' => 'Pixtel',
        'link' => 'http://www.pixtel.fr',
        'area' => 'Paris',
        'tasks' => [
            'Développement en PHP/MySql du site web du cybercafé « Akyrion »',
            'Modification et suivi d\'opérations interactives Audiotel/Minitel',
        ],
    ]
];

foreach($experiences as &$experience){
    $experience = json_decode(json_encode($experience), FALSE);
}
unset($experience);

$skills = [
    [
        'title' => 'Langages',
        'detail' => 'Javascript, PHP5, Ruby, HTML5, CSS3, MySql, MongoDB, Bash Shell, C',
    ],[
        'title' => 'Environnements',
        'detail' => 'Synfony2, AngularJS, jQuery, Rails3, node.js, Sass/Less, ExpressJS, inuit.css, bootstrap, MODx',
    ],[
        'title' => 'Concepts',
        'detail' => 'Design patterns, MVC, versioning, CSS pre/post processing, OOCSS, Responsive Web Design, UX, tests utilisateurs, Single Page Application, dependency management, task/builder, NoSql, caching, scaling, SEO, méthodes agiles, expressions régulières, accessibilité/standards, problématiques navigateurs, performance web',
    ],[
        'title' => 'Outils',
        'detail' => 'Sublime Text, Git, Bower, SVN, composer, casperJS, npm, grunt/gulp, Microsoft Office, Suite Adobe, FileMaker, Vi(m)',
    ],[
        'title' => 'Langues',
        'detail' => 'Anglais (fluent), Allemand (scolaire)',
    ]
];

foreach($skills as &$skill){
    $skill = json_decode(json_encode($skill), FALSE);
}
unset($skill);

$formations = [
    [
        'title' => 'Actuellement',
        'detail' => 'Veille technologique, conférences récurrentes (Parisweb, Web Performance, ParisJS...) ou ponctuelles (dotJS/CSS...)',
    ], [
        'title' => '2003',
        'detail' => 'DEUST multimedia et réseaux, gestion et réalisation (Université Paris II)',
    ], [
        'title' => '2000',
        'detail' => 'Baccalauréat scientifique',
    ]
];

foreach($formations as &$formation){
    $formation = json_decode(json_encode($formation), FALSE);
}
unset($formation);

