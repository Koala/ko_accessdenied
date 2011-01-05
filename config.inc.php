<?php

/**
 * Access Denied "Addon"
 * 
 * @author redaxo[at]koalashome[dot]de Sven Eichler
 * 
 * @package redaxo4
 * @version svn:$Id$
 */

$mypage = 'ko_accessdenied';

/* Addon Parameter */
$REX['ADDON']['rxid'][$mypage] = '853';
//$REX['ADDON']['name'][$mypage] = 'ko_AccessDenied';
$REX['ADDON']['perm'][$mypage] = 'ko_accessdenied[]';
$REX['ADDON']['version'][$mypage] = '0.1';
$REX['ADDON']['author'][$mypage] = 'Sven Eichler';
$REX['ADDON']['supportpage'][$mypage] = 'forum.redaxo.de';

$REX['PERM'][] = 'ko_accessdenied[]';

if ($REX['REDAXO'] && $REX['USER']) {

  // Sprachdateien anhaengen
  $I18N->appendFile(dirname(__FILE__) .'/lang/');
  
  rex_register_extension('ART_STATUS_TYPES', 'rex_status_types');
  rex_register_extension('CAT_STATUS_TYPES', 'rex_status_types');
  
  /**
   * Füge Artikel- und Kategoriestatus 'Gesperrt' hinzu.
   * Verwende als CSS-Klasse die vom Offline-Status
   * 
   * @param array $params
   * @return array $subject
   */
  function rex_status_types($params) {
    global $I18N;
    $subject = $params['subject'];
    $subject[] = array($I18N->msg('status_gesperrt'), 'rex-offline');
    return $subject;
  }
  
}
