<?php
/**
 * Created by JetBrains PhpStorm.
 * User: mdekrijger
 * Date: 5/13/12
 * Time: 9:48 AM
 * To change this template use File | Settings | File Templates.
 */

namespace Netvlies\Bundle\DoctrineStorageBridgeBundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;


class EntityListener
{
    public function postLoad(LifecycleEventArgs $args)
    {
        //@todo
    }


}