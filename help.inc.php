<?php

/**
 * Access Denied "Addon"
 *
 * @author redaxo[at]koalashome[dot]de Sven Eichler
 *
 * @package redaxo4
 */


?>
<h3>Access Denied Addon</h3>
<br />
<p style="font-style: italic;">Für dieses Addon ist kein Eintrag im
Addon-Menü notwendig. Also suche auch nicht danach :-)</p>
<br />

<p>Dieses Addon fügt einen zusätzlichen Status "Gesperrt" bei den
Artikeln und Kategorien ein. Mit dessen Hilfe kann ein direkter Zugriff
auf den Artikel von der normalen Webseite aus verhindert werden.
Offline-Artikel werden zwar nicht angezeigt, aber es kann immer noch auf
sie drauf zugegriffen werden.</p>
<br />

<p>Folgender Code muss in das Standardtemplate eingetragen werden, damit
der Zugriff auch tatsächlich gesperrt wird:</p>
<br />
<pre>
// wenn der Artikelstatus auf "Gesperrt" gesetzt ist, dann erfolgt keine Ausgabe des Artikels
if ($this->getValue('status') == 2 && (!isset($_SESSION['UID']) || $_SESSION['UID'][$REX['INSTNAME']] <= 0))  {
  header ('HTTP/1.1 301 Moved Permanently');
  header ('location: http://www.ZielDoomain.Tld');
}
</pre>
<br />
<br />

<p>Beachte auch den Beitrag im Wiki dazu: <a
  href="http://wiki.redaxo.de/index.php?n=R3.ArtikelstatusAccessDeniedPatch">http://wiki.redaxo.de/index.php?n=R3.ArtikelstatusAccessDeniedPatch</a></p>
