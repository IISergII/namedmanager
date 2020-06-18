<?php

/*
  NamedManager Application Libraries

  Provides functions for NamedManager.
 */

log_debug("start", "");
log_debug("start", "NAMEDMANAGER LIBRARIES LOADED");
log_debug("start", "");

// include main code functions
require_once 'inc_changelog.php';
require_once 'inc_domain.php';
require_once 'inc_servers.php';
require_once 'inc_server_groups.php';

// cloud providers
require_once 'inc_cloud_route53.php';
