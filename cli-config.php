<?php

// cli-config.php

/* CONSTANTES NECESARIAS */

include_once join(DIRECTORY_SEPARATOR, array('conf','define.php'));

require_once join(DIRECTORY_SEPARATOR, array(__BASE_PATH , "framework" , "AppConfig.php"));
require_once join(DIRECTORY_SEPARATOR, array("app","models","persistence","bootstrap","relational.php"));

return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);
