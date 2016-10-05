<?php

use Contracts\Common\EntityManager;

/**
 * @return EntityManager
 */
function getEM(){
    return app(EntityManager::class);
}