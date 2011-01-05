<?php

/**
 * Access Denied "Addon"
 * 
 * @author redaxo[at]koalashome[dot]de Sven Eichler
 * 
 * @package redaxo4
 * @version svn:$Id$
 */



$error = '';

if ($error != '')
  $REX['ADDON']['installmsg']['ko_accessdenied'] = $error;
else
  $REX['ADDON']['install']['ko_accessdenied'] = true;