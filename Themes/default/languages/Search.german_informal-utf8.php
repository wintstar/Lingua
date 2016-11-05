<?php
// Version: 2.1 Beta 3; Search

$txt['set_parameters'] = 'Suchanfrage';
$txt['choose_board'] = 'Wähle das Forum oder die Foren aus, in denen gesucht werden soll';
$txt['all_words'] = 'alle diese Wörter enthalten';
$txt['any_words'] = 'eines dieser Wörter enthalten';
$txt['by_user'] = 'Von Benutzer';

$txt['search_post_age'] = 'Alter der Nachrichten';
$txt['search_between'] = 'zwischen';
$txt['search_and'] = 'und';
$txt['search_options'] = 'Optionen';
$txt['search_show_complete_messages'] = 'Ergebnisse als Nachrichten anzeigen';
$txt['search_subject_only'] = 'Nur Betreff der Themen suchen';
$txt['search_relevance'] = 'Relevanz';
$txt['search_date_posted'] = 'Datum, geschrieben';
$txt['search_order'] = 'Suchreihenfolge';
$txt['search_orderby_relevant_first'] = 'meisten relevanten Ergebnisse zuerst';
$txt['search_orderby_large_first'] = 'größte Themen zuerst';
$txt['search_orderby_small_first'] = 'kleinstes Themen zuerst';
$txt['search_orderby_recent_first'] = 'neuesten Themen zuerst';
$txt['search_orderby_old_first'] = 'älteste Themen zuerst';
$txt['search_visual_verification_label'] = 'Spamschutz';
$txt['search_visual_verification_desc'] = 'Bitte gebe den oben dargestellten Code ein, um die Suche zu starten.';

$txt['search_specific_topic'] = 'Suche nur Beiträge im Thema';

$txt['mods_cat_search'] = 'Suche';
$txt['groups_search_posts'] = 'Mitgliedergruppen mit Zugriff auf die Suchfunktion';
$txt['search_results_per_page'] = 'Anzahl der Suchergebnisse pro Seite';
$txt['search_weight_frequency'] = 'Relative Suchfaktoren für die Anzahl der übereinstimmenden Nachrichten innerhalb eines Themas';
$txt['search_weight_age'] = 'Relative Suchfaktoren für Alter der letzten übereinstimmende Nachricht';
$txt['search_weight_length'] = 'Relative Suchfaktoren für Thema Länge';
$txt['search_weight_subject'] = 'Relative Suchfaktoren für ein passenden Betreff';
$txt['search_weight_first_message'] = 'Relative Suchfaktoren für eine erste Nachrichtenübereinstimmung';
$txt['search_weight_sticky'] = 'Relative Suchfaktoren für ein wichtiges Thema';

$txt['search_settings_desc'] = 'Hier kannst du die Grundeinstellungen der Suchfunktion ändern.';
$txt['search_settings_title'] = 'Suche_Einstellungen';

$txt['search_weights_desc'] = 'Hier kannst du die einzelnen Komponenten der Relevanzbewertung ändern. ';
$txt['search_weights_title'] = 'Suchfaktoren';
$txt['search_weights_total'] = 'Gesamt';
$txt['search_weights_save'] = 'Speichern';

$txt['search_method_desc'] = 'Hier kannst du festlegen, wie die Suche betrieben wird.';
$txt['search_method_title'] = 'Suchmethode';
$txt['search_method_save'] = 'Speichern';
$txt['search_method_messages_table_space'] = 'Verwendeter Speicherplatz der Board-Nachrichten in der Datenbank';
$txt['search_method_messages_index_space'] = 'Verwendeter Speicherplatz der Indexierung von Nachrichten in der Datenbank';
$txt['search_method_kilobytes'] = 'KB';
$txt['search_method_fulltext_index'] = 'Fulltext index';
$txt['search_method_no_index_exists'] = 'existiert derzeit nicht';
$txt['search_method_fulltext_create'] = 'Fulltext index erstellen';
$txt['search_method_fulltext_cannot_create'] = 'kann nicht erstellt werden, da die Nachrichtenlänge die Größe der 65.535 Zeichen überschreitet oder die Tabelle nicht vom Typ MyISAM ist';
$txt['search_method_index_already_exists'] = 'bereits erstellt';
$txt['search_method_fulltext_remove'] = 'Fulltext index entfernen';
$txt['search_method_index_partial'] = 'teilweise erstellt';
$txt['search_index_custom_resume'] = 'Zusammenfassung';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_method_fulltext_warning'] = 'Um die Volltextsuche (Fulltext index) nutzen zu können, musst du zuerst einen Fulltext index erstellen.';

$txt['search_index'] = 'Suchindex';
$txt['search_index_none'] = 'Kein Index';
$txt['search_index_custom'] = 'Benutzerdefinierter Index';
$txt['search_index_sphinx'] = 'Sphinx';
$txt['search_index_sphinx_desc'] = 'Das Admin-Panel ermöglicht nur das Umschalten zwischen den Suchindizes. Um weitere Sphinx-Einstellungen anzupassen, verwende das Tool <a href="https://github.com/SimpleMachines/sphinx-for-smf" target="_blank" class="new_win">Sphinx for SMF</a>.';
$txt['search_index_label'] = 'Index';
$txt['search_index_size'] = 'Größe';
$txt['search_index_create_custom'] = 'Benutzerdefinierter Index erstellen';
$txt['search_index_custom_remove'] = 'Benutzerdefinierter Index entfernen';
// This string is used in a javascript confirmation popup; don't use entities.
$txt['search_index_custom_warning'] = 'Um eine benutzerdefinierte Indexsuche verwenden zu können, muss du zunächst einen benutzerdefinierten Index erstellen!';

$txt['search_force_index'] = 'Verwendung eines Suchindex erzwingen';
$txt['search_match_words'] = 'Nur ganze Wörter';
$txt['search_max_results'] = 'Maximale Anzahl der Ergebnisse anzeigen';
$txt['search_max_results_disable'] = '(0: kein Limit)';
$txt['search_floodcontrol_time'] = 'Zeit zwischen Suchvorgängen des gleichen Benutzers';
$txt['search_floodcontrol_time_desc'] = '(0 kein Limit, in Sekunden)';

$txt['search_create_index'] = 'Index erstellen';
$txt['search_create_index_why'] = 'Warum einen Suchindex erstellen?';
$txt['search_create_index_start'] = 'Erstellen';
$txt['search_predefined'] = 'Vordefiniertes Profil';
$txt['search_predefined_small'] = 'Kleinen Größenindex';
$txt['search_predefined_moderate'] = 'Mäßiger Größenindex';
$txt['search_predefined_large'] = 'Großer Größenindex';
$txt['search_create_index_continue'] = 'Weiter';
$txt['search_create_index_not_ready'] = 'SMF erstellt derzeit einen Suchindex deiner Nachrichten. Um eine Überlastung des Servers zu vermeiden, wurde der Prozess vorübergehend angehalten. Dieser Vorgang sollte in wenigen Sekunden automatisch fortgesetzt werden. Falls nicht, klicke bitte unten auf \'Weiter\'.';
$txt['search_create_index_progress'] = 'Index wird erstellt...';
$txt['search_create_index_done'] = 'Benutzerdefinierter Suchindex wurde erstellt.';
$txt['search_create_index_done_link'] = 'Weiter';
$txt['search_double_index'] = 'Du hast derzeit zwei Indizes in der Nachrichten-Tabelle erstellt. Für eine optimale Leistung empfiehlt es sich, einer der beiden Indizes zu entfernen.';

$txt['search_error_indexed_chars'] = 'Ungültige Anzahl der indizierten Zeichen. Mindestens 3 Zeichen werden für einen brauchbaren Index benötigt..';
$txt['search_error_max_percentage'] = 'Ungültiger Prozentsatz der Wörter, die übersprungen werden sollen. Verwenden einen Wert von mindestens 5%.';
$txt['error_string_too_long'] = 'Suchstring muss kleiner als %1$d Zeichen lang sein.';

$txt['search_adjust_query'] = 'Suchanfrage anpassen';
$txt['search_warning_ignored_word'] = 'Der folgende Begriff wurde bei deiner Suche ignoriert, weil zu kurz.';
$txt['search_warning_ignored_words'] = 'Die folgende Begriffe wurden bei deiner Suche ignoriert, weil zu kurz.';
$txt['search_adjust_submit'] = 'Suche korrigieren';
$txt['search_did_you_mean'] = 'Hast du vielleicht gemeint zu suchen nach';

$txt['search_example'] = '<em>z.B.</em> Cameron "Titanic" -Film';

$txt['search_engines_description'] = 'Hier kannst du entscheiden wie genau die Suchmaschinen dein Board-Index verfolgen sollen, sowie Blick auf das Protokoll der Besuche dieser Suchmaschinen.';
$txt['spider_mode'] = 'Überwachung der Suchmaschine<br><small>Vorsicht:&nbspEine höhere Überwachung erhöht die Serverressourcen</small>';
$txt['spider_mode_note'] = 'Beachte, dass jede Spideraktion nur protokolliert wird, wenn die Verfolgung auf &quot;hoch&quot; oder &quot;sehr hoch&quot; eingestellt ist. Details jeder Spideraktion wird nur protokolliert, wenn die Verfolgung auf &quot;sehr hoch&quot; eingestellt ist.';
$txt['spider_mode_off'] = 'Deaktiviert';
$txt['spider_mode_standard'] = 'Standard';
$txt['spider_mode_high'] = 'Hoch';
$txt['spider_mode_vhigh'] = 'Sehr hoch';
$txt['spider_settings_desc'] = 'Hier kannst du Einstellungen für Verfolgung von Spider ändern. Beachte, wenn du das automatische Bereinigen der Trefferprotokolle aktivieren möchtest, kannst du dies <a href="%1$s">hier</a> tun.';

$txt['spider_group'] = 'Einschränkende Berechtigungen aus Gruppe anwenden';
$txt['spider_group_note'] = 'Ermöglicht es dir, die Indizierung von Spider einiger Seiten zu stoppen.<br><small>Tipp:&nbsp;Erstelle für Spider, eigene Berechtigungen</small>';
$txt['spider_group_none'] = 'Deaktiviert';

$txt['show_spider_online'] = 'Modus der Ansicht der Spider in der \'Benutzer-Online\' Liste';
$txt['show_spider_online_no'] = 'Überhaupt nicht';
$txt['show_spider_online_summary'] = 'Anzahl der Spider';
$txt['show_spider_online_detail'] = 'Name der Spider anzeigen';
$txt['show_spider_online_detail_admin'] = 'Name der Spider nur Admins anzeigen';

$txt['spider_name'] = 'Spider Name';
$txt['spider_last_seen'] = 'Zuletzt gesehen';
$txt['spider_last_never'] = 'Nie';
$txt['spider_agent'] = 'User Agent';
$txt['spider_ip_info'] = 'IP Adressen';
$txt['spiders_add'] = 'Neuen Spider hinzufügen';
$txt['spiders_edit'] = 'Spider bearbeiten';
$txt['spiders_remove_selected'] = 'Ausgewählte entfernen';
$txt['spider_remove_selected_confirm'] = 'Bist du sicher, dass du diese Spider entfernen möchtest?<br>Achtung: Alle zugehörigen Statistiken werden gelöscht!';
$txt['spiders_no_entries'] = 'Es sind derzeit keine Spider konfiguriert.';

$txt['add_spider_desc'] = 'Hier kannst du die Einstellungen ändern, um einen Spider zu erkennen. Wenn ein Gastbenutzer-Agent/IP-Adresse mit den unten eingegebenen übereinstimmt, wird es als Suchmaschinen-Sider erkannt und nach den Board-Einstellungen verfolgt.';
$txt['spider_name_desc'] = 'Name, auf den der Spider verwiesen wird';
$txt['spider_agent_desc'] = 'Verbundener User-Agent des Spider';
$txt['spider_ip_info_desc'] = 'Dem Spider zugeordnete Komma getrennte Liste von IP-Adressen';

$txt['spider'] = 'Spider';
$txt['spider_time'] = 'Zeit';
$txt['spider_viewing'] = 'Ansichten';
$txt['spider_logs_empty'] = 'Derzeit gibt es keine Spider Protokoll-Einträge.';
$txt['spider_logs_info'] = 'Beachte, dass jede Spideraktion nur protokolliert wird, wenn die Verfolgung auf &quot;hoch&quot; oder &quot;sehr hoch&quot; eingestellt ist. Details jeder Spideraktion wird nur protokolliert, wenn die Verfolgung auf &quot;sehr hoch&quot; eingestellt ist.';
$txt['spider_disabled'] = 'Deaktiviert';
$txt['spider_log_empty_log'] = 'Protokoll löschen';
$txt['spider_log_empty_log_confirm'] = 'Bist du sicher, dass du das Protokoll vollständig löschen möchtest';

$txt['spider_logs_delete'] = 'Einträge löschen';
$txt['spider_logs_delete_older'] = 'Alle Einträge löschen, die älter sind als';
$txt['spider_logs_delete_day'] = 'Tage.';
$txt['spider_logs_delete_submit'] = 'Löschen';

$txt['spider_stats_delete_older'] = 'Alle Statistiken von Spider löschen, die innerhlab von %1$s Tagen nicht mehr gesehen wurden.';

// Don't use entities in the below string.
$txt['spider_logs_delete_confirm'] = 'Bist du  sicher, dass du alle Protokolleinträge leeren möchtest?';

$txt['spider_stats_select_month'] = 'Springe zum Monat';
$txt['spider_stats_page_hits'] = 'Seitenaufrufe';
$txt['spider_stats_no_entries'] = 'Zur Zeit sind keine Spider-Statistiken verfügbar.';

?>