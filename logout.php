<?php

include "UserSession.class.php";

$userSession = new UserSession();

$userSession->destroy();

header ("location: index.php");
exit();