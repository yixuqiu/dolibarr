#!/usr/bin/env php
<?php
/**
 * \file scripts/company/sync_contacts_dolibarr2ldap.php
 * \ingroup ldap company
 * \brief Script to update all contacts from Dolibarr into a LDAP database
 */

include "../../htdocs/master.inc.php";
include_once DOL_DOCUMENT_ROOT.'/core/lib/files.lib.php';

$langs->setDefaultLang('fr');
$langs->loadLangs(array('main', 'companies'));

var_dump($langs->tab_translate["Preview"]);

print $langs->tr("Preview");
print "\n";
print $langs->trans("Preview");
print "\n";

print ">>> dol_escape_htmltag(eée < > bb<b>bold ç) - should not happen</b>\n";
print dol_escape_htmltag("eée < > bb<b>bold</b> ç", 1);
print "\n";
print ">>> dol_escape_htmltag(eée &lt; &gt; bb<b>bold ç)</b>\n";
print dol_escape_htmltag("eée &lt; &gt; bb<b>bold</b> ç", 1);
print "\n";
print '>>> dol_escape_htmltag(&lt;script&gt;alert("azerty")&lt;/script&gt;)'."\n";
print dol_escape_htmltag('&lt;script&gt;alert("azerty")&lt;/script&gt;', 1);
print "\n";

print "\n";

// dol_escape_htmltag(dol_htmlwithnojs(dol_string_onlythesehtmltags(dol_htmlentitiesbr($s), 1, 1, 1, array())), 1, 1, 'common', 0, 1);
print ">>> dolPrintHtml(eée < > bb<b>bold</b> ç) - should not happen\n";
print dolPrintHtml("eée < > bb<b>bold</b> ç");
print "\n";
print ">>> dolPrintHtml(eée &lt; &gt; bb<b>bold</b> ç)\n";
print dolPrintHtml("eée &lt; &gt; bb<b>bold</b> ç");
print "\n";
print '>>> dolPrintHtml(&lt;script&gt;alert("azerty")&lt;/script&gt;)'."\n";
print dolPrintHtml('&lt;script&gt;alert("azerty")&lt;/script&gt;');
print "\n";

print "\n";

// dol_escape_htmltag(dol_string_onlythesehtmltags(dol_htmlentitiesbr($s), 1, 0, 0, 0, array('br', 'b', 'font', 'hr', 'span')), 1, -1, '', 0, 1);
print ">>> dolPrintHtmlForattribute(eée < > bb<b>bold</b> ç)\n";
print dolPrintHTMLForAttribute("eée < > bb<b>bold</b> ç");
print "\n";
print ">>> dolPrintHTMLForAttribute(eée &lt; &gt; bb<b>bold</b> ç)\n";
print dolPrintHTMLForAttribute("eée &lt; &gt; bb<b>bold</b> ç");
print "\n";
print '>>> dolPrintHtmlForattribute(&lt;script&gt;alert("azerty")&lt;/script&gt;)'."\n";
print dolPrintHTMLForAttribute('&lt;script&gt;alert("azerty")&lt;/script&gt;');
print "\n";
