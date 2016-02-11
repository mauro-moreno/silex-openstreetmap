<?php
/**
 * Created by PhpStorm.
 * User: magia
 * Date: 2/11/16
 * Time: 1:02 AM
 */

namespace MauroMoreno\OpenStreetMap\Silex;

use MauroMoreno\OpenStreetMap\Client\NominatimClient;
use Silex\Application;
use Silex\ServiceProviderInterface;

class OpenStreetMapServiceProvider implements ServiceProviderInterface
{

    /**
     * {@inheritdoc}
     */
    public function register(Application $app)
    {
        $app['openstreetmap.format'] =
            isset($app['openstreetmap.format']) ?
                $app['openstreetmap.format'] : 'json';
        $app['openstreetmap.nominatim.addressinfo'] =
            isset($app['openstreetmap.nominatim.addressinfo']) ?
                $app['openstreetmap.nominatim.addressinfo'] : 1;

        $app['openstreetmap.nominatim'] = function () use ($app) {
            return new NominatimClient([
                'format' => $app['openstreetmap.format'],
                'addressinfo' => $app['openstreetmap.nominatim.addressinfo']
            ]);
        };
    }
    /**
     * {@inheritdoc}
     */
    public function boot(Application $app)
    {
    }

}
