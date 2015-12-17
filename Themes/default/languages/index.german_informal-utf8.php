<?php
// Version: 2.0.10; Index

global $forum_copyright, $forum_version, $webmaster_email, $scripturl, $context, $boardurl;

// Locale (strftime, pspell_new) and spelling. (pspell_new, can be left as '' normally.)
// For more information see:
//   - http://www.php.net/function.pspell-new
//   - http://www.php.net/function.setlocale
// Again, SPELLING SHOULD BE '' 99% OF THE TIME!!  Please read this!
$txt['lang_locale'] = 'de_DE.utf8';
$txt['lang_dictionary'] = 'de';
$txt['lang_spelling'] = 'german';

// Ensure you remember to use uppercase for character set strings.
$txt['lang_character_set'] = 'UTF-8';
// Character set and right to left?
$txt['lang_rtl'] = false;
// Capitalize day and month names?
$txt['lang_capitalize_dates'] = 'ja';

$txt['days'] = array('Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag');
$txt['days_short'] = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months'] = array(1 => 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
$txt['months_titles'] = array(1 => 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
$txt['months_short'] = array(1 => 'Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez');

$txt['time_am'] = 'Vormittag';
$txt['time_pm'] = 'Nachmittag';

$txt['newmessages0'] = 'ist neu';
$txt['newmessages1'] = 'sind neu';
$txt['newmessages3'] = 'Neu';
$txt['newmessages4'] = ',';

$txt['admin'] = 'Administrator';
$txt['moderate'] = 'Moderieren';

$txt['save'] = 'Speichern';

$txt['modify'] = 'Ändern';
$txt['forum_index'] = $context['forum_name'] . ' - Index';
$txt['members'] = 'Mitglieder';
$txt['board_name'] = 'Boardname';
$txt['posts'] = 'Beiträge';

$txt['member_postcount'] = 'Beiträge';
$txt['no_subject'] = '(Kein Betreff)';
$txt['view_profile'] = 'Profil anzeigen';
$txt['guest_title'] = 'Gast';
$txt['author'] = 'Autor';
$txt['on'] = 'am';
$txt['remove'] = 'Löschen';
$txt['start_new_topic'] = 'Neues Thema starten';

$txt['login'] = 'Einloggen';
// Use numeric entities in the below string.
$txt['username'] = 'Benutzername';
$txt['password'] = 'Passwort';

$txt['username_no_exist'] = 'Benutzername nicht vorhanden.';
$txt['no_user_with_email'] = 'Es sind keine Benutzernamen mit dieser E-Mail verknüpft.';

$txt['board_moderator'] = 'Moderator';
$txt['remove_topic'] = 'Thema löschen';
$txt['topics'] = 'Themen';
$txt['modify_msg'] = 'Beitrag editieren';
$txt['name'] = 'Name';
$txt['email'] = 'E-Mail';
$txt['subject'] = 'Betreff';
$txt['message'] = 'Text';
$txt['redirects'] = 'Umleitungen';
$txt['quick_modify'] = 'Sofortiges Editieren';

$txt['choose_pass'] = 'Passwort wählen';
$txt['verify_pass'] = 'Passwort wiederholen';
$txt['position'] = 'Position';

$txt['profile_of'] = 'Profil anzeigen von';
$txt['total'] = 'Alle';
$txt['posts_made'] = 'Beiträge';
$txt['website'] = 'Webseite';
$txt['register'] = 'Registrieren';
$txt['warning_status'] = 'Verwarnungsstatus';
$txt['user_warn_watch'] = 'Benutzer wird von Moderatoren beobachtet';
$txt['user_warn_moderate'] = 'Beiträge des Benutzers werden moderiert';
$txt['user_warn_mute'] = 'Benutzer kann nicht schreiben';
$txt['warn_watch'] = 'Beobachtet';
$txt['warn_moderate'] = 'Moderiert';
$txt['warn_mute'] = 'Stumm';

$txt['message_index'] = 'Themen-Index';
$txt['news'] = 'Neuigkeiten';
$txt['home'] = 'Übersicht';

$txt['lock_unlock'] = 'Thema schließen/öffnen';
$txt['post'] = 'Schreiben';
$txt['error_occured'] = 'Ein Fehler ist aufgetreten!';
$txt['at'] = 'von';
$txt['logout'] = 'Ausloggen';
$txt['started_by'] = 'Begonnen von';
$txt['replies'] = 'Antworten';
$txt['last_post'] = 'Letzter Beitrag';
$txt['admin_login'] = 'Administrator-Login';
// Use numeric entities in the below string.
$txt['topic'] = 'Thema';
$txt['help'] = 'Hilfe';
$txt['notify'] = 'Benachrichtigen';
$txt['unnotify'] = 'Benachrichtigung aufheben';
$txt['notify_request'] = 'Möchtest du eine Benachrichtigung per E-Mail, wenn eine Antwort zu diesem Thema geschrieben wird?';
// Use numeric entities in the below string.
$txt['regards_team'] = "Lieben Gruß,\ndas " . $context['forum_name'] . ' Team.';
$txt['notify_replies'] = 'Benachrichtigen';
$txt['move_topic'] = 'Thema verschieben';
$txt['move_to'] = 'Verschieben nach';
$txt['pages'] = 'Seiten';
$txt['users_active'] = 'Aktive Benutzer in den letzten %s Minuten';
$txt['personal_messages'] = 'Private Mitteilungen';
$txt['reply_quote'] = 'Zitat';
$txt['reply'] = 'Antwort';
$txt['reply_noun'] = 'Antwort';
$txt['approve'] = 'Genehmigen';
$txt['approve_all'] = 'Alle genehmigen';
$txt['awaiting_approval'] = 'Benötigt Genehmigung';
$txt['attach_awaiting_approve'] = 'Anhänge benötigen Genehmigung';
$txt['post_awaiting_approval'] = 'Achtung: Dieser Beitrag benötigt eine Genehmigung eines Moderators.';
$txt['there_are_unapproved_topics'] = '%1$s Themen und %2$s Beiträge benötigen eine Genehmigung in diesem Board. Klicken sie <a href="%3$s">hier</a> um alle anzuzeigen.';

$txt['msg_alert_none'] = 'Keine Nachrichten...';
$txt['msg_alert_you_have'] = 'Du hast';
$txt['msg_alert_messages'] = 'Nachrichten';
$txt['remove_message'] = 'Beitrag löschen';

$txt['online_users'] = 'Benutzer Online';
$txt['personal_message'] = 'Private Mitteilung';
$txt['jump_to'] = 'Gehe zu';
$txt['go'] = 'Los';
$txt['are_sure_remove_topic'] = 'Sind Sie sicher, dass Sie dieses Thema löschen möchten?';
$txt['yes'] = 'Ja';
$txt['no'] = 'Nein';

$txt['search_end_results'] = 'Ende der Ergebnisse';
$txt['search_on'] = 'am';

$txt['search'] = 'Suche';
$txt['all'] = 'Alle';

$txt['back'] = 'Zurück';
$txt['password_reminder'] = 'Passwort erinnern';
$txt['topic_started'] = 'Thema gestartet von';
$txt['title'] = 'Titel';
$txt['post_by'] = 'Beitrag von';
$txt['memberlist_searchable'] = 'Liste aller registrierten Mitglieder';
$txt['welcome_member'] = 'Herzlich Willkommen';
$txt['admin_center'] = 'Administrator-Center';
$txt['last_edit'] = 'Letzte Änderung';
$txt['notify_deactivate'] = 'Möchtest du die E-Mail Benachrichtigung zu diesem Thema deaktivieren?';

$txt['recent_posts'] = 'Neueste Beiträge';

$txt['location'] = 'Ort';
$txt['gender'] = 'Geschlecht';
$txt['date_registered'] = 'Registrierungsdatum';

$txt['recent_view'] = 'Anzeigen der neuesten Beiträge';
$txt['recent_updated'] = 'ist das zuletzt geänderte Thema';

$txt['male'] = 'Männlich';
$txt['female'] = 'Weiblich';

$txt['error_invalid_characters_username'] = 'Ungültiges Zeichen im Benutzernamen.';

$txt['welcome_guest'] = 'Willkommen <strong>%1$s</strong>. Bitte <a href="' . $scripturl . '?action=login">einloggen</a> oder <a href="' . $scripturl . '?action=register">registrieren</a>.';
$txt['login_or_register'] = 'Bitte <a href="' . $scripturl . '?action=login">logg dich ein</a> oder <a href="' . $scripturl . '?action=register">registriere dich</a>.';
$txt['welcome_guest_activate'] = '<br />Hast du deine <a href="' . $scripturl . '?action=activate">Aktivierungs E-Mail</a> übersehen?';
$txt['hello_member'] = 'Hallo';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Willkommen';
$txt['welmsg_hey'] = 'Hallo';
$txt['welmsg_welcome'] = 'Willkommen';
$txt['welmsg_please'] = 'Bitte';
$txt['select_destination'] = 'Bitte wähle ein Ziel';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'Autor';

$txt['icon_smiley'] = 'Smiley';
$txt['icon_angry'] = 'Ärgerlich';
$txt['icon_cheesy'] = 'Lächelnd';
$txt['icon_laugh'] = 'Lachend';
$txt['icon_sad'] = 'Traurig';
$txt['icon_wink'] = 'Zwinkernd';
$txt['icon_grin'] = 'Grinsend';
$txt['icon_shocked'] = 'Schockiert';
$txt['icon_cool'] = 'Cool';
$txt['icon_huh'] = 'Huch';
$txt['icon_rolleyes'] = 'Augen rollen';
$txt['icon_tongue'] = 'Zunge';
$txt['icon_embarrassed'] = 'Verlegen';
$txt['icon_lips'] = 'Schweigend';
$txt['icon_undecided'] = 'Unentschlossen';
$txt['icon_kiss'] = 'Küsschen';
$txt['icon_cry'] = 'Weinen';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderatoren';

$txt['mark_board_read'] = 'Alle Themen im Board als gelesen markieren';
$txt['views'] = 'Aufrufe';
$txt['new'] = 'Neu';

$txt['view_all_members'] = 'Mitglieder anzeigen';
$txt['view'] = 'Anzeigen';

$txt['viewing_members'] = 'Mitglieder %1$s bis %2$s anzeigen';
$txt['of_total_members'] = 'von %1$s Mitgliedern';

$txt['forgot_your_password'] = 'Passwort vergessen?';

$txt['date'] = 'Datum';
// Use numeric entities in the below string.
$txt['from'] = 'Von';
$txt['check_new_messages'] = 'Neue Nachrichten abholen';
$txt['to'] = 'An';

$txt['board_topics'] = 'Themen';
$txt['members_title'] = 'Mitglieder';
$txt['members_list'] = 'Mitgliederliste';
$txt['new_posts'] = 'Neue Beiträge';
$txt['old_posts'] = 'Keine neuen Beiträge';
$txt['redirect_board'] = 'Umgeleitetes Board';

$txt['sendtopic_send'] = 'Senden';
$txt['report_sent'] = 'Dein Bericht wurde erfolgreich versendet.';

$txt['time_offset'] = 'Zeitverschiebung';
$txt['or'] = 'oder';

$txt['no_matches'] = 'Keine Übereinstimmungen gefunden';

$txt['notification'] = 'Benachrichtigung';

$txt['your_ban'] = '%1$s, du bist aus diesem Forum verbannt!';
$txt['your_ban_expires'] = 'Dein Bann läuft aus am %1$s';
$txt['your_ban_expires_never'] = 'Dein Bann wird nie ablaufen.';
$txt['ban_continue_browse'] = 'Du kannst das Forum weiterhin als Gast durchstöbern.';

$txt['mark_as_read'] = 'Alle Beiträge gelesen';

$txt['hot_topics'] = 'Heißes Thema (mehr als %s Antworten)';
$txt['very_hot_topics'] = 'Sehr heißes Thema (mehr als %s Antworten)';
$txt['locked_topic'] = 'Thema geschlossen';
$txt['normal_topic'] = 'Normales Thema';
$txt['participation_caption'] = 'Themen auf die du geantwortet hast';

$txt['go_caps'] = 'Los';

$txt['print'] = 'Drucken';
$txt['profile'] = 'Profil';
$txt['topic_summary'] = 'Zusammenfassung';
$txt['not_applicable'] = 'Nicht verfügbar';
$txt['message_lowercase'] = 'Nachricht';
$txt['name_in_use'] = 'Dieser Name ist bereits in Verwendung.';

$txt['total_members'] = 'Mitglieder insgesamt';
$txt['total_posts'] = 'Beiträge insgesamt';
$txt['total_topics'] = 'Themen insgesamt';

$txt['mins_logged_in'] = 'Sitzungslänge in Minuten';

$txt['preview'] = 'Vorschau';
$txt['always_logged_in'] = 'Immer eingeloggt bleiben';

$txt['logged'] = 'Gespeichert';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['by'] = 'von';

$txt['hours'] = 'Stunden';
$txt['days_word'] = 'Tage';

$txt['newest_member'] = ', unser neuestes Mitglied.';

$txt['search_for'] = 'Suchen nach';

$txt['aim'] = 'AIM';
// In this string, please use +'s for spaces.
$txt['aim_default_message'] = 'Hallo.+Sind+Sie+online?';
$txt['aim_title'] = 'AOL Instant Messenger';
$txt['icq'] = 'ICQ';
$txt['icq_title'] = 'ICQ Messenger';
$txt['msn'] = 'MSN';
$txt['msn_title'] = 'MSN Messenger';
$txt['yim'] = 'YIM';
$txt['yim_title'] = 'Yahoo Instant Messenger';

$txt['maintain_mode_on'] = 'Nicht vergessen, das Forum ist im \'Wartungsmodus\'!';

$txt['read'] = 'Gelesen';
$txt['times'] = 'mal';

$txt['forum_stats'] = 'Forumstatistiken';
$txt['latest_member'] = 'Neuestes Mitglied';
$txt['total_cats'] = 'Kategorien insgesamt';
$txt['latest_post'] = 'Letzter Beitrag';

$txt['you_have'] = 'Du hast';
$txt['click'] = 'Klicke';
$txt['here'] = 'hier';
$txt['to_view'] = 'um sie zu sehen.';

$txt['total_boards'] = 'Boards insgesamt';

$txt['print_page'] = 'Seite drucken';

$txt['valid_email'] = 'Es muss eine gültige E-Mail-Adresse sein.';

$txt['geek'] = 'Ich bin ein Freak!!';
$txt['info_center_title'] = '%1$s - Info Center';

$txt['send_topic'] = 'Thema versenden';

$txt['sendtopic_title'] = 'Sende das Thema &quot;%1$s&quot; einem Freund.';
$txt['sendtopic_sender_name'] = 'Dein Name';
$txt['sendtopic_sender_email'] = 'Deine E-Mail-Adresse';
$txt['sendtopic_receiver_name'] = 'Name des Empfängers';
$txt['sendtopic_receiver_email'] = 'E-Mail-Adresse des Empfängers';
$txt['sendtopic_comment'] = 'Kommentar hinzufügen';

$txt['allow_user_email'] = 'E-Mails von anderen Benutzern erlauben?';

$txt['check_all'] = 'Alle markieren';

// Use numeric entities in the below string.
$txt['database_error'] = 'Datenbankfehler';
$txt['try_again'] = 'Bitte versuche es nochmal. Sollte der Fehler wieder auftreten, informiere bitte den Administrator.';
$txt['file'] = 'Datei';
$txt['line'] = 'Zeile';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF hat einen Datenbankfehler entdeckt und versucht ihn automatisch zu reparieren. Wenn du erneut Probleme haben sollten oder weiterhin diese E-Mails erhältst, kontaktiere bitte deinen Serveranbieter.';
$txt['database_error_versions'] = '<b>Hinweis:</b> Ihre Datenbank <em>könnte</em> veraltet zu sein! Die Dateien haben die Version %1$s, wogegen die Datenbank die Version %2$s hat. Ein Ausführen der neuesten Version von upgrade.php kann den oben angeführten Fehler beheben.';
$txt['template_parse_error'] = 'Template Analyse Fehler!';
$txt['template_parse_error_message'] = 'Ein Fehler ist im Template-System des Forums aufgetreten! Dieses Problem sollte nur temporär auftreten, bitte versuche es später nochmal. Solltest du die Fehlermeldung weiterhin erhalten, kontaktiere bitte den Administrator.<br /><br />Du kannst außerdem versuchen die Seite zu <a href="javascript:location.reload();">aktualisieren</a>.';
$txt['template_parse_error_details'] = 'Ein Problem trat beim Laden des <tt><strong>%1$s</strong></tt> Templates oder der Sprachdatei auf. Bitte überprüfe die Syntax und versuche es erneut. Bitte beachte, dass einzelne Anführungszeichen (<tt>\'</tt>) oft mit einem Backslash (<tt>\\</tt>) auskommentiert werden müssen. Um nähere Informationen von PHP zu diesem Fehler zu erhalten, versuche <a href="' . $boardurl . '%1$s">die Seite direkt aufzurufen</a>.<br /><br />Du kannst auch versuchen, die Seite zu <a href="javascript:location.reload();">aktualisieren</a> oder das <a href="' . $scripturl . '?theme=1">Standard-Theme</a> zu benutzen.';

$txt['today'] = '<strong>Heute</strong> um ';
$txt['yesterday'] = '<strong>Gestern</strong> um ';
$txt['new_poll'] = 'Neue Umfrage';
$txt['poll_question'] = 'Frage';
$txt['poll_vote'] = 'Abstimmen';
$txt['poll_total_voters'] = 'Stimmen insgesamt';
$txt['shortcuts'] = 'Shortcuts: Alt+S für das Absenden oder Alt+P für die Vorschau';
$txt['shortcuts_firefox'] = 'Kurzwahl-Tasten: Shift+Alt+s Beitrag absenden oder Shift+Alt+p für Vorschau ';
$txt['poll_results'] = 'Ergebnisse anzeigen';
$txt['poll_lock'] = 'Umfrage schließen';
$txt['poll_unlock'] = 'Umfrage öffnen';
$txt['poll_edit'] = 'Umfrage editieren';
$txt['poll'] = 'Umfrage';
$txt['one_day'] = '1 Tag';
$txt['one_week'] = '1 Woche';
$txt['one_month'] = '1 Monat';
$txt['forever'] = 'Immer';
$txt['quick_login_dec'] = 'Einloggen mit Benutzername, Passwort und Sitzungslänge';
$txt['one_hour'] = '1 Stunde';
$txt['moved'] = 'VERSCHOBEN';
$txt['moved_why'] = 'Bitte gib einen kurzen Hinweis ein, <br />warum das Thema verschoben wird.';
$txt['board'] = 'Kategorie';
$txt['in'] = 'in';
$txt['sticky_topic'] = 'Fixiertes Thema';

$txt['delete'] = 'Löschen';

$txt['your_pms'] = 'Deine Privaten Mitteilungen';

$txt['kilobyte'] = 'kB';

$txt['more_stats'] = '[Weitere Statistiken]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Code';
$txt['code_select'] = '[Auswählen]';
$txt['quote_from'] = 'Zitat von';
$txt['quote'] = 'Zitat';

$txt['merge_to_topic_id'] = 'ID des Ziel-Themas';
$txt['split'] = 'Thema teilen';
$txt['merge'] = 'Themen zusammenführen';
$txt['subject_new_topic'] = 'Betreff für das neue Thema';
$txt['split_this_post'] = 'Nur diesen Beitrag trennen.';
$txt['split_after_and_this_post'] = 'Thema ab und inkl. diesem Beitrag aufteilen.';
$txt['select_split_posts'] = 'Beiträge auswählen, welche geteilt werden sollen.';
$txt['new_topic'] = 'Neues Thema';
$txt['split_successful'] = 'Thema erfolgreich in zwei Themen aufgeteilt.';
$txt['origin_topic'] = 'Ursprüngliches Thema';
$txt['please_select_split'] = 'Bitte wähle die Beiträge aus, die du trennen möchten.';
$txt['merge_successful'] = 'Themen erfolgreich zusammengeführt.';
$txt['new_merged_topic'] = 'Neu zusammengeführtes Thema';
$txt['topic_to_merge'] = 'Thema, welches zusammengeführt werden soll';
$txt['target_board'] = 'Zielboard';
$txt['target_topic'] = 'Zielthema';
$txt['merge_confirm'] = 'Bist du sicher, dass du folgende Themen zusammenführen möchten';
$txt['with'] = 'mit';
$txt['merge_desc'] = 'Diese Funktion wird die Beiträge von zwei Themen zu einem Thema zusammenführen. Die Beiträge werden zeitlich sortiert sein, d.h. der älteste Beitrag wird der erste im zusammengeführten Thema sein.';

$txt['set_sticky'] = 'Thema fixieren';
$txt['set_nonsticky'] = 'Fixierung des Themas entfernen';
$txt['set_lock'] = 'Thema schließen';
$txt['set_unlock'] = 'Thema öffnen';

$txt['search_advanced'] = 'Erweiterte Suche';

$txt['security_risk'] = 'GROSSES SICHERHEITSRISIKO:';
$txt['not_removed'] = 'Du hast folgende Datei(en) nicht gelöscht: ';
$txt['not_removed_extra'] = '%1$s ist ein Backup von %2$s, das nicht von SMF erstellt wurde. Es kann direkt darauf zugegriffen werden und es kann verwendet werden, um unbefugten Zugriff auf Ihr Forum erlangen. Sie sollten dieses sofort löschen.';

$txt['cache_writable_head'] = 'Performance-Warnung';
$txt['cache_writable'] = 'Das Cache-Verzeichnis ist nicht beschreibbar - das hat große Auswirkungen auf die Geschwindigkeit ihres Forums.';

$txt['page_created'] = 'Seite erstellt in ';
$txt['seconds_with'] = ' Sekunden mit ';
$txt['queries'] = ' Abfragen.';

$txt['report_to_mod_func'] = 'Benutze diese Funktion, um Moderatoren/Administratoren über einen missbräuchlich oder falsch geschriebenen Beitrag zu informieren.<br /><em>Bitte beachte, dass deine E-Mail-Adresse zum betreffenden Moderator gesendet wird, wenn du diese Funktion benutzt.</em>';

$txt['online'] = 'Online';
$txt['offline'] = 'Offline';
$txt['pm_online'] = 'Private Mitteilung (Online)';
$txt['pm_offline'] = 'Private Mitteilung (Offline)';
$txt['status'] = 'Status';

$txt['go_up'] = 'Nach oben';
$txt['go_down'] = 'Nach unten';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="Simple Machines Forum" target="_blank" class="new_win">%1$s</a> |
<a href="http://www.simplemachines.org/about/smf/license.php" title="Lizenz" target="_blank" class="new_win">SMF &copy; 2014</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'Geburtstage:';
$txt['events'] = 'Ereignisse:';
$txt['birthdays_upcoming'] = 'Zukünftige Geburtstage:';
$txt['events_upcoming'] = 'Zukünftige Ereignisse:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = '';
$txt['calendar_month'] = 'Monat:';
$txt['calendar_year'] = 'Jahr:';
$txt['calendar_day'] = 'Tag:';
$txt['calendar_event_title'] = 'Ereignis Titel:';
$txt['calendar_event_options'] = 'Ereignis Optionen';
$txt['calendar_post_in'] = 'Erstellen in:';
$txt['calendar_edit'] = 'Ereignis editieren';
$txt['event_delete_confirm'] = 'Dieses Ereignis löschen?';
$txt['event_delete'] = 'Ereignis löschen';
$txt['calendar_post_event'] = 'Ereignis erstellen';
$txt['calendar'] = 'Kalender';
$txt['calendar_link'] = 'Link zum Kalender';
$txt['calendar_upcoming'] = 'Zukünftige Ereignisse';
$txt['calendar_today'] = 'Heutige Ereignisse';
$txt['calendar_week'] = 'Woche';
$txt['calendar_week_title'] = 'Woche %1$d von %2$d';
$txt['calendar_numb_days'] = 'Anzahl der Tage:';
$txt['calendar_how_edit'] = 'Wie ändert man diese Ereignisse?';
$txt['calendar_link_event'] = 'Ereignis verlinken';
$txt['calendar_confirm_delete'] = 'Bist du sicher, dass du dieses Ereignis löschen möchtest?';
$txt['calendar_linked_events'] = 'Verlinkte Ereignisse';
$txt['calendar_click_all'] = 'Alle %1$s anzeigen';

$txt['moveTopic1'] = 'Einen Umleitungshinweis angeben';
$txt['moveTopic2'] = 'Titel des Themas ändern';
$txt['moveTopic3'] = 'Neuer Titel';
$txt['moveTopic4'] = 'Titel jedes Themas ändern';
$txt['move_topic_unapproved_js'] = 'Achtung! Dieses Thema wurde noch nicht genehmigt.\\n\\nEs wird nicht empfohlen, ein Umleitungs-Thema zu erstellen, bevor der eigentliche Beitrag genehmigt wurde.';

$txt['theme_template_error'] = 'Kann das \'%1$s\' Template nicht laden.';
$txt['theme_language_error'] = 'Kann die \'%1$s\' Sprachdatei nicht laden.';

$txt['parent_boards'] = 'Untergeordnete Boards';

$txt['smtp_no_connect'] = 'Kann nicht zu SMTP Server verbinden';
$txt['smtp_port_ssl'] = 'SMTP Port Einstellung ist nicht korrekt; sie sollte auf 465 für SSL Server stehen.';
$txt['smtp_bad_response'] = 'Konnte Antwortcodes des E-Mail-Servers nicht empfangen';
$txt['smtp_error'] = 'Probleme beim Versenden der E-Mail. Fehler: ';
$txt['mail_send_unable'] = 'Die E-Mail konnte nicht an \'%1$s\' versendet werden.';

$txt['mlist_search'] = 'Mitglieder suchen';
$txt['mlist_search_again'] = 'Erneut suchen';
$txt['mlist_search_email'] = 'Nach E-Mail-Adresse suchen';
$txt['mlist_search_messenger'] = 'Nach Messenger Spitzname suchen';
$txt['mlist_search_group'] = 'Nach Position suchen';
$txt['mlist_search_name'] = 'Nach Namen suchen';
$txt['mlist_search_website'] = 'Nach Webseite suchen';
$txt['mlist_search_results'] = 'Suchergebnisse für';
$txt['mlist_search_by'] = 'Suchen nach %1$s';
$txt['mlist_menu_view'] = 'Mitgliederliste anschauen';

$txt['attach_downloaded'] = 'runtergeladen';
$txt['attach_viewed'] = 'angeschaut';
$txt['attach_times'] = 'Mal';

$txt['settings'] = 'Einstellungen';
$txt['never'] = 'Nie';
$txt['more'] = 'mehr';

$txt['hostname'] = 'Hostname';
$txt['you_are_post_banned'] = '%1$s, Ihnen ist das Schreiben in diesem Forum verboten worden.';
$txt['ban_reason'] = 'Grund';

$txt['tables_optimized'] = 'Tabellen der Datenbank optimiert';

$txt['add_poll'] = 'Umfrage hinzufügen';
$txt['poll_options6'] = 'Du darfst nur %1$s Optionen wählen.';
$txt['poll_remove'] = 'Umfrage entfernen';
$txt['poll_remove_warn'] = 'Bist du sicher, dass du die Umfrage vom Thema entfernen möchtest?';
$txt['poll_results_expire'] = 'Die Resultate werden angezeigt, wenn die Umfrage geschlossen wird';
$txt['poll_expires_on'] = 'Umfrage schließt';
$txt['poll_expired_on'] = 'Umfrage geschlossen';
$txt['poll_change_vote'] = 'Abstimmung ändern';
$txt['poll_return_vote'] = 'Abstimmungsoptionen';
$txt['poll_cannot_see'] = 'Du kannst das Ergebnis der Umfrage momentan nicht einsehen.';

$txt['quick_mod_approve'] = 'Ausgewählte genehmigen';
$txt['quick_mod_remove'] = 'Ausgewählte löschen';
$txt['quick_mod_lock'] = 'Ausgewählte öffnen/schließen';
$txt['quick_mod_sticky'] = 'Ausgewählte fixieren';
$txt['quick_mod_move'] = 'Ausgewählte verschieben';
$txt['quick_mod_merge'] = 'Ausgewählte zusammenführen';
$txt['quick_mod_markread'] = 'Ausgewählte als gelesen markieren';
$txt['quick_mod_go'] = 'Los';
$txt['quickmod_confirm'] = 'Bist du sicher, dass du das tun möchten?';

$txt['spell_check'] = 'Rechtschreibung prüfen';

$txt['quick_reply'] = 'Schnellantwort';
$txt['quick_reply_desc'] = 'Bei der <em>Schnellantwort</em> kannst du Bulletin Board Code und Smileys wie im normalen Beitrag benutzen.';
$txt['quick_reply_warning'] = 'Warnung: Das Thema ist momentan geschlossen! Nur Administratoren und Moderatoren können antworten.';
$txt['quick_reply_verification'] = 'Nach dem Senden deines Beitrags wirst du zur normalen Beitragsseite weitergeleitet um deinen Post zu überprüfen %1$s.';
$txt['quick_reply_verification_guests'] = '(für alle Gäste benötigt)';
$txt['quick_reply_verification_posts'] = '(notwendig für alle Benutzer mit weniger als %1$d Beiträgen)';
$txt['wait_for_approval'] = 'Achtung: Dieser Beitrag wird erst angezeigt, wenn er von einem Moderator genehmigt wurde.';

$txt['notification_enable_board'] = 'Bist du sicher, dass du Benachrichtigungen über neue Themen in diesem Board aktivieren möchtest?';
$txt['notification_disable_board'] = 'Bist du sicher, dass du Benachrichtigungen über neue Themen in diesem Board deaktivieren möchtest?';
$txt['notification_enable_topic'] = 'Bist du sicher, dass du Benachrichtigungen über neue Beiträge in diesem Thema aktivieren möchtest?';
$txt['notification_disable_topic'] = 'Bist du sicher, dass du Benachrichtigungen über neue Beiträge in diesem Thema deaktivieren möchtest?';

$txt['report_to_mod'] = 'Moderator informieren';
$txt['issue_warning_post'] = 'Eine Verwarnung wegen diesem Beitrag erteilen';

$txt['unread_topics_visit'] = 'Neue ungelesene Themen';
$txt['unread_topics_visit_none'] = 'Keine ungelesenen Themen seit dem letzten Besuch gefunden. <a href="' . $scripturl . '?action=unread;all">Klicke hier, um alle ungelesenen Themen zu suchen.</a>.';
$txt['unread_topics_all'] = 'Alle ungelesenen Themen';
$txt['unread_replies'] = 'Aktualisierte Themen';

$txt['who_title'] = 'Wer ist online';
$txt['who_and'] = ' und ';
$txt['who_viewing_topic'] = ' betrachten dieses Thema.';
$txt['who_viewing_board'] = ' betrachten dieses Board.';
$txt['who_member'] = 'Mitglieder';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_css'] = 'Prüfe CSS';

// Current footer strings
$txt['valid_html'] = 'Prüfe HTML 4.01';
$txt['valid_xhtml'] = 'Prüfe XHTML 1.0';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'Gast';
$txt['guests'] = 'Gäste';
$txt['user'] = 'Mitglied';
$txt['users'] = 'Mitglieder';
$txt['hidden'] = 'Versteckte';
$txt['buddy'] = 'Freund';
$txt['buddies'] = 'Freunde';
$txt['most_online_ever'] = 'Am meisten online (gesamt)';
$txt['most_online_today'] = 'Am meisten online (heute)';

$txt['merge_select_target_board'] = 'Wähle das Ziel-Board des zusammengeführten Themas';
$txt['merge_select_poll'] = 'Wähle die Umfrage, welche das zusammengführte Thema haben soll';
$txt['merge_topic_list'] = 'Wähle die Themen, die zusammengeführt werden sollen';
$txt['merge_select_subject'] = 'Wähle den Titel des zusammengeführten Themas';
$txt['merge_custom_subject'] = 'Neuer Titel';
$txt['merge_enforce_subject'] = 'Ändere Titel aller Beiträge';
$txt['merge_include_notifications'] = 'Inklusive Benachrichtigungen?';
$txt['merge_check'] = 'Zusammenführen?';
$txt['merge_no_poll'] = 'Keine Umfrage';

$txt['response_prefix'] = 'Antw:';
$txt['current_icon'] = 'Aktuelles Symbol';
$txt['message_icon'] = 'Nachrichten Icon';

$txt['smileys_current'] = 'Aktuelles Smiley-Set';
$txt['smileys_none'] = 'Keine Smileys';
$txt['smileys_forum_board_default'] = 'Forum/Board Standard';

$txt['search_results'] = 'Suchergebnisse';
$txt['search_no_results'] = 'Keine Übereinstimmungen gefunden';

$txt['totalTimeLogged1'] = 'Insgesamt eingeloggt: ';
$txt['totalTimeLogged2'] = ' Tage, ';
$txt['totalTimeLogged3'] = ' Stunden und ';
$txt['totalTimeLogged4'] = ' Minuten';
$txt['totalTimeLogged5'] = 'T ';
$txt['totalTimeLogged6'] = 'S ';
$txt['totalTimeLogged7'] = 'M';

$txt['approve_thereis'] = 'Es gibt';
$txt['approve_thereare'] = 'Es gibt';
$txt['approve_member'] = 'ein Mitglied, ';
$txt['approve_members'] = 'Mitglieder, ';
$txt['approve_members_waiting'] = 'welche(s) eine Genehmigung erwarten/erwartet.';

$txt['notifyboard_turnon'] = 'Möchtest du eine Benachrichtigungs E-Mail, wenn jemand ein neues Thema in diesem Board schreibt?';
$txt['notifyboard_turnoff'] = 'Möchtest du keine Benachrichtigung mehr, wenn jemand ein neues Thema in diesem Board schreibt?';

$txt['activate_code'] = 'Dein Aktivierungscode ist';

$txt['find_members'] = 'Suche Mitglieder';
$txt['find_username'] = 'Name, Benutzername oder E-Mail-Adresse';
$txt['find_buddies'] = 'Nur die Buddies zeigen?';
$txt['find_wildcards'] = 'Wildcards erlauben: *,?';
$txt['find_no_results'] = 'Kein Ergebnis gefunden';
$txt['find_results'] = 'Ergebnis';
$txt['find_close'] = 'Schließen';

$txt['unread_since_visit'] = 'Ungelesene Beiträge seit deinem letzten Besuch.';
$txt['show_unread_replies'] = 'Ungelesene Antworten zu deinen Beiträgen.';

$txt['change_color'] = 'Farbe ändern';

$txt['quickmod_delete_selected'] = 'Ausgewählte löschen';

// In this string, don't use entities. (&amp;, etc.)
$txt['show_personal_messages'] = 'Du hast eine oder mehrere Private Mitteilungen erhalten.\\nMöchtest du diese lesen (öffnet ein neues Fenster)?';

$txt['previous_next_back'] = '« vorheriges';
$txt['previous_next_forward'] = 'nächstes »';

$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[THEMEN LINK]';
$txt['movetopic_default'] = 'Dieses Thema wurde verschoben nach ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];

$txt['upshrink_description'] = 'Ein- oder Ausklappen der Kopfzeile';

$txt['mark_unread'] = 'Als ungelesen markieren';

$txt['ssi_not_direct'] = 'Bitte greife nicht direkt mit der URL auf die SSI.php zu. Benutze stattdessen den Pfad (%1$s) oder füge ?ssi_function=irgendwas der URL hinzu.';
$txt['ssi_session_broken'] = 'SSI.php konnte die Sitzung nicht laden! Das kann zu Problemen mit dem Ausloggen und anderen Funktionen führen - bitte überprüfe, ob SSI.php in deinen Skripts vor jeglichem(!) anderen Code aufgerufen wird!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Vorheriger Beitrag';
$txt['preview_fetch'] = 'Lade Vorschau...';
$txt['preview_new'] = 'Neue Nachricht';
$txt['error_while_submitting'] = 'Fehler beim Schreiben des Beitrages.';
$txt['error_old_topic'] = 'Achtung: In diesem Thema wurde seit %1$d Tagen nichts mehr geschrieben.<br />Solltest du deiner Antwort nicht sicher sein, starte ein neues Thema.';

$txt['split_selected_posts'] = 'Ausgewählte Beiträge';
$txt['split_selected_posts_desc'] = 'Die unten stehenden Beiträge werden zusammen ein neues Thema bilden.';
$txt['split_reset_selection'] = 'Auswahl löschen';

$txt['modify_cancel'] = 'Abbrechen';
$txt['mark_read_short'] = 'Alle gelesen';

$txt['pm_short'] = 'Meine Mitteilungen';
$txt['pm_menu_read'] = 'Meine Mitteilungen lesen';
$txt['pm_menu_send'] = 'Eine Mitteilung senden';

$txt['hello_member_ndt'] = 'Hallo';

$txt['unapproved_posts'] = 'Nicht genehmigte Beiträge (Themen: %1$d, Beiträge: %2$d)';

$txt['ajax_in_progress'] = 'Lade...';

$txt['mod_reports_waiting'] = 'Es sind momentan %1$d gemeldete Beiträge offen.';

$txt['view_unread_category'] = 'Ungelesene Beiträge';
$txt['verification'] = 'Verifizierung';
$txt['visual_verification_description'] = 'Gib die Buchstaben aus dem Bild ein';
$txt['visual_verification_sound'] = 'Buchstaben anhören';
$txt['visual_verification_request_new'] = 'Neues Bild laden';

// Sub menu labels
$txt['summary'] = 'Zusammenfassung';
$txt['account'] = 'Benutzerkonto';
$txt['forumprofile'] = 'Forum Profil';

$txt['modSettings_title'] = 'Features &amp; Optionen';
$txt['package'] = 'Paket Manager';
$txt['errlog'] = 'Fehlerprotokoll';
$txt['edit_permissions'] = 'Berechtigungen';
$txt['mc_unapproved_attachments'] = 'Nicht genehmigte Anhänge';
$txt['mc_unapproved_poststopics'] = 'Nicht genehmigte Themen und Beiträge';
$txt['mc_reported_posts'] = 'Gemeldete Beiträge';
$txt['modlog_view'] = 'Moderatorprotokoll';
$txt['calendar_menu'] = 'Kalender anzeigen';

//!!! Send email strings - should move?
$txt['send_email'] = 'E-Mail senden';
$txt['send_email_disclosed'] = 'Beachte, dass dies für den Empfänger sichtbar ist.';
$txt['send_email_subject'] = 'Betreff der E-Mail';

$txt['ignoring_user'] = 'Sie ignorieren diesen Benutzer.';
$txt['show_ignore_user_post'] = 'Beitrag anzeigen.';

$txt['spider'] = 'Bot';
$txt['spiders'] = 'Bots';
$txt['openid'] = 'OpenID';

$txt['downloads'] = 'Downloads';
$txt['filesize'] = 'Dateigröße';
$txt['subscribe_webslice'] = 'Webslice abonnieren';

// Restore topic
$txt['restore_topic'] = 'Thema wiederherstellen';
$txt['restore_message'] = 'Wiederherstellen';
$txt['quick_mod_restore'] = 'Gewähltes Wiederherstellen';

// Editor prompt.
$txt['prompt_text_email'] = 'Bitte gib die E-Mail Adresse ein.';
$txt['prompt_text_ftp'] = 'Bitte gib die FTP Adresse ein.';
$txt['prompt_text_url'] = 'Bitte gib die zu verlinkende URL ein.';
$txt['prompt_text_img'] = 'Gib den Bildort ein';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Objekt Löschen';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Schemata:';
$txt['debug_subtemplates'] = 'Sub Schemata:';
$txt['debug_language_files'] = 'Sprachdateien:';
$txt['debug_stylesheets'] = 'Formatvorlagen:';
$txt['debug_files_included'] = 'Eingeschlossene Dateien:';
$txt['debug_kb'] = 'Kb.';
$txt['debug_show'] = 'zeige';
$txt['debug_cache_hits'] = 'Cache Treffer:';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s Bytes ';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss für %2$s Bytes ';
$txt['debug_queries_used'] = 'Benutzte Abfragen: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Abfragen verwendet: %1$d, %2$d Warnungen. ';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> Zeile <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'die %1$s Sekunden dauerte. ';
$txt['debug_query_which_took_at'] = 'die %1$s Sekunden bei %2$s für die Abfrage dauerte. ';
$txt['debug_show_queries'] = '[Zeige Abfragen] ';
$txt['debug_hide_queries'] = '[Verberge Abfragen] ';

?>