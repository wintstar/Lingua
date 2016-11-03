<?php
// Version: 2.1 Beta 3; Themes

global $settings, $scripturl;

$txt['themeadmin_explain'] = 'Themes definieren das visuelle Erscheinungsbild deines Board. Diese Einstellungen beeinflussen die Auswahl der Themes, und welche Theme Gäste und andere Mitglieder nutzen.';

$txt['theme_allow'] = 'Mitglieder können ihre eigenes Theme auswählen.';
$txt['theme_guests'] = 'Board-Standard Gäste';
$txt['theme_select'] = 'wählen...';
$txt['theme_reset'] = 'Zurücksetzen für alle auf';
$txt['theme_nochange'] = 'Keine Änderung';
$txt['theme_forum_default'] = 'Board-Standard';

$txt['theme_remove'] = 'Entfernen';
$txt['theme_enable'] = 'Aktivieren';
$txt['theme_disable'] = 'Deaktivieren';
$txt['theme_remove_confirm'] = 'Bist du sicher, dass du dieses Theme dauerhaft entfernen möchtest?';
$txt['theme_enable_confirm'] = 'Bist du sicher, dass du dieses Theme aktivieren möchtest?';
$txt['theme_disable_confirm'] = 'Bist du sicher, dass du dieses Theme deaktivieren möchtest?';
$txt['theme_confirmed_disabling'] = 'Das Theme wurde erfolgreich deaktiviert.';
$txt['theme_confirmed_enabling'] = 'Das Theme wurde erfolgreich aktiviert.';
$txt['theme_confirmed_removing'] = 'Das Theme wurde erfolgreich entfernt.';

$txt['theme_install'] = 'Neues Theme installieren';
$txt['theme_install_file'] = 'Von einem Archiv (z.B. .zip, .tar.gz)';
$txt['theme_install_dir'] = 'Von einem Verzeichnis auf dem Server';
$txt['theme_install_error'] = 'Das Theme Verzeichnis existiert nicht oder enthält kein Theme.';
$txt['theme_install_write_error'] = 'Das Theme Verzeichnis muss beschreibbar sein, um fortzufahren zu können.';
$txt['theme_install_go'] = 'Installieren';
$txt['theme_install_new'] = 'Erstelle eine Kopie des <em>SMF Standard-Theme</em> mit dem Namen';
$txt['theme_install_new_confirm'] = 'Bist du sicher, dass du dieses neue Theme installieren möchtest?';
$txt['theme_install_writable'] = 'Warnung - Du kannst kein neues Theme erstellen oder installieren, da dein Theme Verzeichnis nicht beschreibbar ist.';
$txt['theme_installed'] = 'Erfolgreich installiert';
$txt['theme_installed_message'] = 'wurde erfolgreich installiert.';
$txt['theme_updated_message'] = 'wurde erfolgreich aktualisiert.';
$txt['theme_install_no_action'] = 'Dies ist keine gültige Installationsaktion.';
$txt['theme_install_error_title'] = 'Beim Installieren des Theme ist ein Fehler aufgetreten.';
$txt['theme_install_error_file_1'] = 'Die hochgeladene Datei überschreitet die upload_max_filesize Richtlinie der php.ini.';
$txt['theme_install_error_file_2'] = 'Die hochgeladene Datei überschreitet die MAX_FILE_SIZE Richtlinie, die im HTML-Formular angegeben wurde.';
$txt['theme_install_error_file_3'] = 'Die hochgeladene Datei wurde nur teilweise hochgeladen.';
$txt['theme_install_error_file_4'] = 'Es wurde keine Datei hochgeladen.';
$txt['theme_install_error_file_6'] = 'Temporären Hochlade Verzeichnis fehlt.';
$txt['theme_install_error_file_7'] = 'Fehler beim Schreiben in der Datenbank.';
$txt['theme_install_invalid_dir'] = 'Du hast keinen Pfad für das aktuelle Theme hinzugefügt, das Standard-Theme kann nicht erneut hinzugefügt werden.';
$txt['theme_install_already_dir'] = 'Der von dir angegebene Name wird bereits von einem anderen Theme verwendet. Bitte versuche es mit einem anderen Namen.';
$txt['theme_install_invalid_id'] = 'Dies ist keine gültige Theme ID.';

$txt['theme_pick'] = 'Wähle ein Theme...';
$txt['theme_preview'] = 'Theme Vorschau';
$txt['theme_set'] = 'Diese Theme verwenden';
$txt['theme_user'] = 'Benutzer verwenden dieses Theme.';
$txt['theme_users'] = 'Benutzer verwenden dieses Theme.';
$txt['theme_pick_variant'] = 'Wähle Variante';

$txt['theme_edit'] = 'Theme bearbeiten';
$txt['theme_edit_style'] = 'Stylesheets ändern. (Farben, Schriftarten, usw.)';
$txt['theme_edit_index'] = 'index.template ändern. (das Haupt-Template)';
$txt['theme_edit_no_save'] = 'Diese Datei kann nicht gespeichert werden, weil sie nicht beschreibbar ist. Bitte stellen Sie sicher, dass die folgende Datei chmod:777 hat oder die entsprechenden Berechtigungen';
$txt['theme_edit_save'] = 'Änderungen speichern';

$txt['theme_global_description'] = 'Dies ist das Standard-Theme das du gerade anschaust. Das heißt, das dein Board und Forum Theme abhängig ist von den Einstellungen des Administrators.';

$txt['theme_url_config'] = 'Theme URLs & Konfiguration';
$txt['theme_variants'] = 'Theme Varianten';
$txt['theme_options'] = 'Theme Optionen & Einstellungen';
$txt['actual_theme_name'] = 'Name dieses Theme:&nbsp;';
$txt['actual_theme_dir'] = 'Theme Verzeichnis:&nbsp;';
$txt['actual_theme_url'] = 'Theme URL:&nbsp;';
$txt['actual_images_url'] = 'Theme Bilder URL:&nbsp;';
$txt['current_theme_style'] = 'Theme Stylesheet URL:&nbsp;';

$txt['theme_variants_default'] = 'Standard-Theme Variante';
$txt['theme_variants_user_disable'] = 'Theme Variante Auswahl für Benutzer deaktivieren';

$txt['site_slogan'] = 'Beschreibung des Board';
$txt['site_slogan_desc'] = 'Füge eine Beschreibung für dein Board ein. Anstelle des SMF Logo wird dann deine Boardbeschreibung angezeigt.';

$txt['enable_random_news'] = 'Aktiviere zufällige News im Board-Header';
$txt['show_group_key'] = 'Gruppe in der Legende von "Wer ist Online" anzeigen';
$txt['allow_no_censored'] = 'Benutzern erlauben Wortzensur auszuschalten';
$txt['who_display_viewing'] = 'Anzeigen, wer Foren und Beiträge anschaut';
$txt['who_display_viewing_off'] = 'Nicht anzeigen';
$txt['who_display_viewing_numbers'] = 'Nur Anzahl der Betrachter anzeigen';
$txt['who_display_viewing_names'] = 'Mitgliedername anzeigen';
$txt['disable_recent_posts'] = 'Aktuelle Beiträge deaktivieren';
$txt['enable_single_post'] = 'Einzelner Beitrag aktivieren';
$txt['enable_multiple_posts'] = 'Mehrere Beiträge aktivieren';
$txt['show_stats_index'] = 'Statistik in der Foren-Übersicht anzeigen';
$txt['latest_members'] = 'Neueste Mitglider in der Foren-Übersicht anzeigen';
$txt['news_fader'] = 'News-Fader in der Foren-Übersicht anzeigen';
$txt['member_list_bar'] = 'Liste der Mitglieder in der Foren-Übersicht anzeigen';
$txt['header_logo_url'] = 'Bild-Logo URL';
$txt['header_logo_url_desc'] = '(leer lassen um Board Titel anzuzeigen)';
$txt['number_recent_posts'] = 'Anzahl der aktuellen Beiträge in der Foren-Übersicht';

$txt['theme_adding_title'] = 'Themes von SMF erhalten';
$txt['theme_adding'] = 'Neue Themes für dein Board findest du immer im SMF Themenbereich - <strong><a href="http://custom.simplemachines.org/themes/" target="_blank">http://custom.simplemachines.org/themes/</a></strong>. Du kannst die Website durchsuchen, Kommentare lesen und auf deinen Computer herunterladen und kannst dann hier (unten, \'Von einem Archiv\') das Theme in dein Board hochladen und installieren.<br><br>Wenn du Fragen zu Themes hast, schau auf simplemachines.org. Jede Änderung wird veröffentlicht und hat ein spezielles Thema darüber, wo Anfragen und Anmerkungen gerichtet werden sollten.';

$txt['theme_options_defaults'] = 'Dies sind die Standardwerte für einige benutzerspezifische Einstellungen. Dies wird sich nur auf neue Mitglieder und Gäste auswirken.';
$txt['theme_options_title'] = 'Ändern oder Zurücksetzen von Standardoptionen';

$txt['themeadmin_title'] = 'Themes and Layout-Einstellungen';
$txt['themeadmin_description'] = 'Auf dieser Seite kannst du die Einstellungen deiner Themes, die Liste der Themes aktualisieren, Optionen für die Mitglieder zurücksetzen und andere Einstellungen die du möchtest.';
$txt['themeadmin_admin_desc'] = 'Auf dieser Seite kannst du das Standard-Theme deines Board ändern, zurücksetzen der Mitglieder zu einem bestimmten Theme und andere Einstellungen wählen in Bezug auf die Auswahl der Themes. Du kannst auch neue Themes über diesen Bereich installieren.<br ><br/>Vergesse nicht, einen Blick auf die Theme Einstellungen deines Theme für <a href="' . $scripturl . '?action=admin;area=featuresettings;sa=layout"><strong>Gestaltung</strong></a> zu schauen.';
$txt['themeadmin_list_desc'] = 'Auf dieser Seite kannst du die Liste der aktuell installierten Themes anzeigen, ihre Pfade und Einstellungen ändern und sie deinstallieren.<br>Zum Einstellen des Theme, klicke auf dessen Namen.';
$txt['themeadmin_reset_desc'] = 'Im folgenden ist eine Schnittstelle, die Theme spezifische Optionen für alle Mitglieder ändert. Es sind nur diejenigen Themen mit ihren eigenen Einstellungen zusehen.';
$txt['themeadmin_edit_desc'] = 'Ändere das Stylesheet und den Quellcode deiner installierten Themes. Weitere Informationen findest du in der Dokumentation.<br>Zum Ändern des Theme, klicke auf dessen Namen.';

$txt['themeadmin_list_heading'] = 'Themes-Einstellungen Übersicht';
$txt['themeadmin_list_tip'] = 'Denke daran, dass die Layout-Einstellungen von einem Theme zum anderen, unterschiedlich sein kann.';
$txt['themeadmin_list_theme_dir'] = 'Theme Verzeichnis (Templates)';
$txt['themeadmin_list_invalid'] = '(Warnung! dieser Pfad ist nicht korrekt.)';
$txt['themeadmin_list_theme_url'] = 'URL zu dem oben genannten Verzeichnis';
$txt['themeadmin_list_images_url'] = 'URL zum Bildverzeichnis ';
$txt['themeadmin_list_reset'] = 'Zurücksetzen der URL von den Themes und ihre Verzeichnisse';
$txt['themeadmin_list_reset_dir'] = 'Basis-Pfad zu Themes Verzeichnisse';
$txt['themeadmin_list_reset_url'] = 'Basis-URL zu Themes Verzeichnisse';
$txt['themeadmin_list_reset_go'] = 'Versuche, alle Themes zurückzusetzen';

$txt['themeadmin_reset_tip'] = 'Jedes Theme kann eine eigene benutzerdefinierten Optionen für die Auswahl der Mitglieder haben. Dazu gehören Dinge wie Avatare, Signaturen, Layout-Optionen und andere ähnlichen Optionen. Hier kannst du die Standardeinstellungen ändern oder alle Optionen zurücksetzen.<br><br>Bitte beachten, dass einige Theme möglerweise nur die Standardoptionen verwenden können. In diesem Fall haben sie keine eigenen Optionen.';
$txt['themeadmin_reset_defaults'] = 'Gast und neue Benutzeroptionen für dieses Theme konfigurieren';
$txt['themeadmin_reset_defaults_current'] = 'Optionen derzeit gesetzt';
$txt['themeadmin_reset_members'] = 'Aktuelle Optionen ändern für Mitglieder die dieses Theme verwenden';
$txt['themeadmin_reset_remove'] = 'Alle Mitglieder-Optionen entfernen und Standardeinstellungen verwenden';
$txt['themeadmin_reset_remove_current'] = 'Mitglieder, die derzeit ihre eigenen Optionen verwenden.';
// Don't use entities in the below string.
$txt['themeadmin_reset_remove_confirm'] = 'Bist du sicher, dass du alle Theme-Optionen entfernen möchtest? <br>Dies kann auch einige benutzerdefinierte Profilfelder zurücksetzen.';
$txt['themeadmin_reset_options_info'] = 'Die Optionen unten, werden Optionen für <em>alle<em> zurücksetzen. Um eine Option zu ändern, wähle &quot;Ändern&quot; im Feld daneben, und wähle dann einen Wert für sie. Um die Standardeinstellung zu verwenden, wähle &quot;Standard&quot;. Ansonsten verwende &quot;Nicht ändern&quot; um es zu belassen, wie es ist.';
$txt['themeadmin_reset_options_change'] = 'Ändern';
$txt['themeadmin_reset_options_none'] = 'Nicht ändern';
$txt['themeadmin_reset_options_default'] = 'Standard';

$txt['themeadmin_edit_browse'] = 'Templates und Dateien für diesem Theme durchsuchen';
$txt['themeadmin_edit_style'] = 'Styleheets für diesem Theme bearbeiten';
$txt['themeadmin_edit_copy_template'] = 'Kopiere ein Template aus dem Theme, auf dessen es basiert';
$txt['themeadmin_edit_exists'] = 'bereits vorhanden';
$txt['themeadmin_edit_do_copy'] = 'Kopieren';
$txt['themeadmin_edit_copy_warning'] = 'Wenn das SMF eine Template oder Sprachdatei nicht finden sollte, schaut es bei dem Template nach, auf welchem es basiert, oder beim Standard-Template.<br>Wenn du ein Template nicht ändern möchtest, solltest du es nicht kopieren.';
$txt['themeadmin_edit_copy_confirm'] = 'Bist du sicher, dass du dieses Template kopieren möchtest?';
$txt['themeadmin_edit_overwrite_confirm'] = 'Bist du sicher, dass du dieses Template über die bereits vorhandene kopieren möchtest?<br>Hierdurch werden alle Änderungen <strong>überschrieben!</strong>';
$txt['themeadmin_edit_no_copy'] = '<em>(kann nicht kopiert werden)</em>';
$txt['themeadmin_browsing_theme'] = 'Dateien durchsuchen des Theme: %1$s';
$txt['themeadmin_edit_filename'] = 'Dateiname';
$txt['themeadmin_edit_modified'] = 'Zuletzt bearbeitet';
$txt['themeadmin_edit_size'] = 'Größe';
$txt['themeadmin_edit_bytes'] = 'B';
$txt['themeadmin_edit_kilobytes'] = 'KB';
$txt['themeadmin_edit_error'] = 'Die Datei, die du versuchst zu speichern, generierte den folgenden Fehler:';
$txt['themeadmin_edit_on_line'] = 'Beginnend auf Zeile';
$txt['themeadmin_edit_preview'] = 'Vorschau';
$txt['themeadmin_selectable'] = 'Themes, die der Benutzer auswählen kann';
$txt['themeadmin_themelist_link'] = 'Liste aller Themes anzeigen';

/* Open Graph */
$txt['og_image'] = 'OG Bild';
$txt['og_image_desc'] = 'Link zu deinem Open Graph optimierten Bild, vorgeschlagene Größe 175x175px<br><span class="smalltext">Lese hier mehr darüber <a href="http://ogp.me/" target="_blank">Open Graph</a></span>';
?>