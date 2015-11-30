<?php
    require_once __DIR__.'/../vendor/autoload.php';
    require_once __DIR__.'/../src/Coin.php';
    use Symfony\Component\Debug\Debug;
    Debug::enable();

    $app = new Silex\Application();
    $app['debug'] = TRUE;
    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

    $app->get('/', function () use ($app)
    {
        return $app['twig']->render('coin.html.twig');
    });

    $app->get('combination', function() use ($app)
    {
        $my_Coin = new Coin(...);
        $combinations = $my_Coin->change($_GET..);
        return $app['twig']->render('combination.html.twig', array('combinations' => $combinations));
    });

    return $app;

 ?>
