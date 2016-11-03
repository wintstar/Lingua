<?php
// Version: 2.1 Beta 3; index #00154

global $forum_copyright, $webmaster_email, $scripturl, $context, $boardurl;

// Native name, please use full HTML entities to write your language's name.
$txt['native_name'] = 'German';

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
// Number format.
$txt['number_format'] = '1.234.00';

$txt['days_title'] = 'Tage';
$txt['days'] = array('Sonntag', 'Montag', 'Dienstag', 'Mittwoch', 'Donnerstag', 'Freitag', 'Samstag');
$txt['days_short'] = array('So', 'Mo', 'Di', 'Mi', 'Do', 'Fr', 'Sa');
// Months must start with 1 => 'January'. (or translated, of course.)
$txt['months_title'] = 'Monate';
$txt['months'] = array(1 => 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
$txt['months_titles'] = array(1 => 'Januar', 'Februar', 'März', 'April', 'Mai', 'Juni', 'Juli', 'August', 'September', 'Oktober', 'November', 'Dezember');
$txt['months_short'] = array(1 => 'Jan', 'Feb', 'Mär', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Dez');

$txt['minutes_label'] = 'Minuten';
$txt['hours_label'] = 'Stunden';
$txt['years_title'] = 'Jahre';

$txt['time_am'] = 'Vormittag';
$txt['time_pm'] = 'Nachmittag';

$txt['admin'] = 'Adm.';
$txt['moderate'] = 'Mod.';

$txt['save'] = 'Speichern';
$txt['upload'] = 'Hochladen';
$txt['upload_all'] = 'Alle hochladen';
$txt['processing'] = 'Verarbeitung...';

$txt['modify'] = 'Ändern';
$txt['forum_index'] = '%1$s - Übersicht';
$txt['members'] = 'Mitglieder';
$txt['board_name'] = 'Forum Name';
$txt['posts'] = 'Beiträge';

$txt['member_postcount'] = 'Beiträge';
$txt['no_subject'] = '(Kein Betreff)';
$txt['view_profile'] = 'Profil anzeigen';
$txt['guest_title'] = 'Gast';
$txt['author'] = 'Autor';
$txt['on'] = 'am';
$txt['remove'] = 'Entfernen';
$txt['start_new_topic'] = 'Neues Thema eröffnen';

$txt['login'] = 'Anmelden';
// Use numeric entities in the below string.
$txt['username'] = 'Benutzername';
$txt['password'] = 'Passwort';

$txt['username_no_exist'] = 'Dieser Benutzername existiert nicht.';
$txt['no_user_with_email'] = 'Es gibt keine Benutzernamen, die mit dieser E-Mail verbunden sind.';

$txt['board_moderator'] = 'Forum Moderator';
$txt['remove_topic'] = 'Thema entfernen';
$txt['topics'] = 'Themen';
$txt['modify_msg'] = 'Beitrag bearbeiten';
$txt['name'] = 'Name';
$txt['email'] = 'E-Mail';
$txt['user_email_address'] = 'E-Mail Adresse';
$txt['subject'] = 'Betreff';
$txt['message'] = 'Beitrag';
$txt['redirects'] = 'Weiterleitungen';
$txt['quick_modify'] = 'Inline bearbeiten';
$txt['quick_modify_message'] = 'Beitrag erfolgreich bearbeitet.';
$txt['reason_for_edit'] = 'Grund für die Bearbeitung';

$txt['choose_pass'] = 'Wähle Passwort';
$txt['verify_pass'] = 'Bestätige Passwort';
$txt['notify_announcements'] = 'Den Administratoren ermöglichen, mir wichtige Nachrichten per E-Mail zu senden';

$txt['position'] = 'Rang';

$txt['profile_of'] = 'Profil anzeigen von';
$txt['total'] = 'Gesamt';
$txt['website'] = 'Webseite';
$txt['register'] = 'Registrieren';
$txt['warning_status'] = 'Verwarnungsstatus';
$txt['user_warn_watch'] = 'Benutzer ist auf der Moderator Beobachtungsliste';
$txt['user_warn_moderate'] = 'Benutzer Beiträge müssen vor der Veröffentlichung genehmigt werden';
$txt['user_warn_mute'] = 'Nach einer Verbannung kann der Benutzer nicht mehr schreiben';
$txt['warn_watch'] = 'Beobachtet';
$txt['warn_moderate'] = 'Moderiert';
$txt['warn_mute'] = 'Stumm geschaltet';

$txt['message_index'] = 'Nachricht Inhalt';
$txt['news'] = 'News';
$txt['home'] = 'Foren-Übersicht';
$txt['page'] = 'Seite';
$txt['prev'] = 'vorherige Seite';
$txt['next'] = 'nächste Seite';

$txt['lock_unlock'] = 'Thema sperren / entsperren';
$txt['post'] = 'Absenden';
$txt['error_occured'] = 'Ein Fehler ist aufgetreten';
$txt['at'] = 'um';
$txt['by'] = 'von';
$txt['logout'] = 'Abmelden';
$txt['started_by'] = 'Begonnen von';
$txt['topic_started_by'] = 'Begonnen von <strong>%1$s</strong> in <em>%2$s</em>';
$txt['replies'] = 'Antworten';
$txt['last_post'] = 'Letzter Beitrag';
$txt['first_post'] = 'Erster Beitrag';
$txt['last_poster'] = 'Letzter Beitrag von';
$txt['last_post_message'] = '<strong>Letzter Beitrag: </strong> %3$s <span class="postby">%2$s von %1$s</span>';
$txt['last_post_topic'] = '%1$s<br>von %2$s';
$txt['post_by_member'] = '<strong>%1$s</strong> von <strong>%2$s</strong><br>';
$txt['boardindex_total_posts'] = '%1$s Beiträge in %2$s Themen von %3$s Mitglieder';
$txt['show'] = 'Anzeigen';
$txt['hide'] = 'Verbergen';

$txt['admin_login'] = 'Administration Anmeldung';
// Use numeric entities in the below string.
$txt['topic'] = 'Thema';
$txt['help'] = 'Hilfe';
$txt['terms_and_rules'] = 'Nutzungsbedingungen';
$txt['watch_board'] = 'Forum beobachten';
$txt['unwatch_board'] = 'Forum nicht mehr beobachten';
$txt['watch_topic'] = 'Thema beobachten';
$txt['unwatch_topic'] = 'Thema nicht mehr beobachten';
$txt['watching_this_topic'] = 'Du beobachtest dieses Thema, und erhälst Benachrichtigungen darüber.';
$txt['notify'] = 'Benachrichtigen';
$txt['unnotify'] = 'Nicht Benachrichtigen';
$txt['notify_request'] = 'Möchtest du eine Benachrichtigung per E-Mail, wenn jemand auf dieses Thema antwortet?';
// Use numeric entities in the below string.
$txt['regards_team'] = "Danke, das " . $context['forum_name'] . ' Team.';
$txt['notify_replies'] = 'Über Antworten Benachrichtigen';
$txt['move_topic'] = 'Thema verschieben';
$txt['move_to'] = 'Verschieben nach';
$txt['pages'] = 'Seiten';
$txt['users_active'] = 'Aktive Benutzer in den letzten %1$d Minuten';
$txt['personal_messages'] = 'Private Nachrichten';
$txt['reply_quote'] = 'Mit Zitat antworten';
$txt['reply'] = 'Antworten';
$txt['reply_noun'] = 'Antworten';
$txt['reply_number'] = 'Antworten #%1$s';
$txt['approve'] = 'Genehmigen';
$txt['unapprove'] = 'Nicht genehmigen';
$txt['approve_all'] = 'Alle genehmigen';
$txt['issue_warning'] = 'Verwarnung erteilen';
$txt['awaiting_approval'] = 'Warten auf Genehmigung';
$txt['attach_awaiting_approve'] = 'Dateianhänge warten auf Genehmigung';
$txt['post_awaiting_approval'] = 'Hinweis: Diese Nachricht wartet auf eine Freigabe durch einen Moderator.';
$txt['there_are_unapproved_topics'] = 'Es gibt in diesem Forum %1$s Themen und %2$s Beiträge, die auf Genehmigung warten. Klick <a href="%3$s">hier</a>, um sie alle zu sehen.';
$txt['send_message'] = 'Nachricht senden';

$txt['msg_alert_no_messages'] = 'Du hast keine Nachricht';
$txt['msg_alert_one_message'] = 'Du hast <a href="%1$s">1 Nachricht</a>';
$txt['msg_alert_many_message'] = 'Du hast <a href="%1$s">%2$d Nachrichten</a>';
$txt['msg_alert_one_new'] = '1 ist neu';
$txt['msg_alert_many_new'] = '%1$d sind neu';
$txt['new_alert'] = 'Neue Benachrichtigung';
$txt['remove_message'] = 'Diesen Beitrag entfernen';
$txt['remove_message_question'] = 'Dieser Beitrag entfernen?';

$txt['topic_alert_none'] = 'Keine Nachrichten...';
$txt['pm_alert_none'] = 'Keine Nachrichten...';
$txt['no_messages'] = 'Keine Nachrichten';

$txt['online_users'] = 'Benutzer Online';
$txt['jump_to'] = 'Gehe zu';
$txt['go'] = 'Los';
$txt['are_sure_remove_topic'] = 'Bist du sicher, dass du dieses Thema entfernen möchtest?';
$txt['yes'] = 'Ja';
$txt['no'] = 'Nein';

$txt['search_end_results'] = 'Ende der Ergebnisse';
$txt['search_on'] = 'auf';

$txt['search'] = 'Suche';
$txt['all'] = 'Alle';
$txt['search_entireforum'] = 'Gesamtes Board';
$txt['search_thisbrd'] = 'Dieses Forum';
$txt['search_thistopic'] = 'Dieses Thema';
$txt['search_members'] = 'Mitglieder';

$txt['back'] = 'Zurück';
$txt['continue'] = 'Weiter';
$txt['password_reminder'] = 'Passworterinnerung';
$txt['topic_started'] = 'Thema erstellt von';
$txt['title'] = 'Titel';
$txt['post_by'] = 'Beitrag von';
$txt['memberlist_searchable'] = 'Durchsuchbare Liste aller registrierten Mitglieder.';
$txt['welcome_newest_member'] = 'Bitte begrüßt %1$s, unser neuestes Mitglied.';
$txt['admin_center'] = 'Administrations-Bereich';
$txt['last_edit_by'] = '<span class="lastedit">Letzte Änderung</span>: %1$s von %2$s';
$txt['last_edit_reason'] = '<span class="lastedit">Grund</span>: %1$s';
$txt['notify_deactivate'] = 'Möchtest du die Benachrichtigung zu diesem Thema deaktivieren?';

$txt['recent_posts'] = 'Aktuelle Beiträge';

$txt['location'] = 'Wohnort';
$txt['gender'] = 'Geschlecht';
$txt['personal_text'] = 'Persönlicher Text';
$txt['date_registered'] = 'Registriert';

$txt['recent_view'] = 'Anzeigen der neuesten Beiträge aus dem Forum';
$txt['recent_updated'] = 'ist das zuletzt aktualisierte Thema';
$txt['is_recent_updated'] = '%1$s ist das zuletzt aktualisierte Thema';

$txt['male'] = 'Männlich';
$txt['female'] = 'Weiblich';

$txt['error_invalid_characters_username'] = 'Ungültiges Zeichen im Benutzernamen verwendet.';

$txt['welcome_guest'] = 'Willkommen, <strong>%1$s</strong>. Bitte <a href="%3$s" onclick="%4$s">melde dich an</a>.';

//$txt['welcome_guest_register'] = 'Welcome, <strong>%1$s</strong>. Please <a href="' . $scripturl . '?action=login">login</a> or <a href="' . $scripturl . '?action=register">register</a>.';
$txt['welcome_guest_register'] = 'Willkommen zu <strong>%2$s</strong>. <a href="%3$s" onclick="%4$s">Anmelden</a> oder <a href="%5$s">Registrieren</a>.';

$txt['please_login'] = 'Bitte <a href="' . $scripturl . '?action=login">melde dich an</a>.';
$txt['login_or_register'] = '<a href="' . $scripturl . '?action=login">Anmelden</a> oder <a href="' . $scripturl . '?action=signup">Registrieren</a>.';
$txt['welcome_guest_activate'] = '<br>Vermisst du deine <a href="' . $scripturl . '?action=activate">Aktivierungs E-Mail</a>?';
// @todo the following to sprintf
$txt['hello_member'] = 'Hallo,';
// Use numeric entities in the below string.
$txt['hello_guest'] = 'Willkommen,';
$txt['welmsg_hey'] = 'Hallo,';
$txt['welmsg_welcome'] = 'Willkommen,';
$txt['welmsg_please'] = 'Bitte';
$txt['select_destination'] = 'Gehe zu';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['posted_by'] = 'erstellt von';

$txt['icon_smiley'] = 'Smiley';
$txt['icon_angry'] = 'Verärgert';
$txt['icon_cheesy'] = 'Lächeln';
$txt['icon_laugh'] = 'Lachen';
$txt['icon_sad'] = 'Traurig';
$txt['icon_wink'] = 'Zwinkern';
$txt['icon_grin'] = 'Grinsen';
$txt['icon_shocked'] = 'Schockiert';
$txt['icon_cool'] = 'Lässig';
$txt['icon_huh'] = 'Wie?';
$txt['icon_rolleyes'] = 'Naja...';
$txt['icon_tongue'] = 'Bähhh..';
$txt['icon_embarrassed'] = 'Verlegen';
$txt['icon_lips'] = 'Mund zu';
$txt['icon_undecided'] = 'Unentschlossen';
$txt['icon_kiss'] = 'Küsschen';
$txt['icon_cry'] = 'Weinen';

$txt['moderator'] = 'Moderator';
$txt['moderators'] = 'Moderatoren';

$txt['mark_board_read'] = 'Themen in diesem Forum als gelesen markieren';
$txt['views'] = 'Zugriffe';
$txt['new'] = 'Neu';

$txt['view_all_members'] = 'Alle Mitglieder anzeigen';
$txt['view'] = 'Ansehen';

$txt['viewing_members'] = 'Mitglieder anzeigen %1$s bis %2$s';
$txt['of_total_members'] = 'von %1$s insgesamt';

$txt['forgot_your_password'] = 'Passwort vergessen?';

$txt['date'] = 'Datum';
// Use numeric entities in the below string.
$txt['from'] = 'Von';
$txt['check_new_messages'] = 'Auf neue Nachrichten prüfen';
$txt['to'] = 'Zu';

$txt['board_topics'] = 'Themen';
$txt['members_title'] = 'Mitglieder';
$txt['members_list'] = 'Mitglieder Liste';
$txt['new_posts'] = 'Neue Beiträge';
$txt['old_posts'] = 'Keine neue Beiträge';
$txt['redirect_board'] = 'Umleitungs Forum';

$txt['sendtopic_send'] = 'Senden';
$txt['report_sent'] = 'Deine Meldung wurde erfolgreich gesendet.';
$txt['post_becomesUnapproved'] = 'Deine Nachricht wurde nicht zugelassen, da sie auf einem nicht genehmigten Thema veröffentlicht wurde, sobald das Thema genehmigt wurde, wird deine Nachricht genehmigt.';

$txt['time_offset'] = 'Zeitverschiebung';
$txt['or'] = 'oder';

$txt['no_matches'] = 'Es wurden keine Übereinstimmungen gefunden';

$txt['notification'] = 'Benachrichtigung';

$txt['your_ban'] = 'Tut uns leid %1$s, du bist gesperrt, von der Nutzung dieses Forums!';
$txt['your_ban_expires'] = 'Die Sperrung wird ablaufen %1$s.';
$txt['your_ban_expires_never'] = 'Diese Sperrung wird nicht ablaufen.';
$txt['ban_continue_browse'] = 'Sie können weiterhin das Board als Gast durchsuchen.';

$txt['mark_as_read'] = 'Alle Nachrichten als gelesen markieren';

$txt['locked_topic'] = 'Gesperrtes Thema';
$txt['normal_topic'] = 'Normales Thema';
$txt['participation_caption'] = 'Thema, in dem du geschrieben hast';
$txt['moved_topic'] = 'Verschobenes Thema';

$txt['go_caps'] = 'LOS';

$txt['print'] = 'Drucken';
$txt['profile'] = 'Profil';
$txt['topic_summary'] = 'Thema Zusammenfassung';
$txt['not_applicable'] = 'Nicht angegeben';
$txt['name_in_use'] = 'Dieser Name wird bereits von einem anderen Mitglied verwendet.';

$txt['total_members'] = 'Mitglieder gesamt';
$txt['total_posts'] = 'Beiträge gesamt';
$txt['total_topics'] = 'Themen gesamt';

$txt['mins_logged_in'] = 'Minuten als angemeldet';

$txt['preview'] = 'Vorschau';
$txt['always_logged_in'] = 'Dauerhaft angemeldet';

$txt['logged'] = 'Protokolliert';
// Use numeric entities in the below string.
$txt['ip'] = 'IP';

$txt['www'] = 'WWW';

$txt['hours'] = 'Stunden';
$txt['minutes'] = 'Minuten';
$txt['seconds'] = 'Sekunden';

// Used upper case in Paid subscriptions management
$txt['hour'] = 'Stunde';
$txt['days_word'] = 'Tage';

$txt['search_for'] = 'Suche nach';
$txt['search_match'] = 'Übereinstimmung';

$txt['forum_in_maintenance'] = 'Dein Board ist im Wartungsmodus. Nur Administratoren können sich derzeit anmelden.';
$txt['maintenance_page'] = 'Du kannst den Wartungsmodus deaktivieren unter <a href="%1$s">Server-Einstellungen</a> im Admin Bereich.';

$txt['read_one_time'] = '1 mal gelesen';
$txt['read_many_times'] = '%1$d mal gelesen';

$txt['forum_stats'] = 'Boardstatistik';
$txt['latest_member'] = 'Neuestes Mitglied';
$txt['total_cats'] = 'Gesamte Kategorien';
$txt['latest_post'] = 'Neuester Beitrag';

$txt['total_boards'] = 'Gesamte Foren';

$txt['print_page'] = 'Seite drucken';
$txt['print_page_text'] = 'Nur Text';
$txt['print_page_images'] = 'Text mit Bilder';

$txt['valid_email'] = 'Dies muss eine gültige E-Mail-Adresse sein.';

$txt['geek'] = 'Ich bin ein Aussenseiter!!';
$txt['info_center_title'] = '%1$s - Info Bereich';

$txt['watch'] = 'Beobachten';
$txt['unwatch'] = 'Beobachten beenden';

$txt['check_all'] = 'Alle markieren';

// Use numeric entities in the below string.
$txt['database_error'] = 'Datenbank Fehler';
$txt['try_again'] = 'Bitte versuche es nochmal. Sollte der Fehler wieder auftreten, informiere bitte den Administrator.';
$txt['file'] = 'Datei';
$txt['line'] = 'Zeile';
// Use numeric entities in the below string.
$txt['tried_to_repair'] = 'SMF hat einen Datenbankfehler entdeckt und versucht ihn automatisch zu reparieren. Wenn du erneut Probleme haben sollten oder weiterhin diese E-Mails erhältst, kontaktiere bitte deinen Serveranbieter.';
$txt['database_error_versions'] = '<strong>Hinweis:</strong> Die Datenbank <em>könnte</em> veraltet zu sein! Die Boarddateien haben aktuell die Version %1$s, wogegen die Datenbank die Version %2$s hat. Ein Ausführen der neuesten Version von upgrade.php kann den oben angeführten Fehler beheben.';
$txt['template_parse_error'] = 'Template Analyse Fehler!';
$txt['template_parse_error_message'] = 'Ein Fehler ist im Template-System des Boards aufgetreten! Dieses Problem sollte nur temporär auftreten, bitte versuche es später nochmal. Solltest du die Fehlermeldung weiterhin erhalten, kontaktiere bitte den Administrator.<br /><br />Du kannst außerdem versuchen die Seite zu <a href="javascript:location.reload();">aktualisieren</a>.';
$txt['template_parse_error_details'] = 'Ein Problem trat beim Laden des <pre><strong>%1$s</strong></pre> Templates oder der Sprachdatei auf. Bitte überprüfe die Syntax und versuche es erneut. Bitte beachte, dass einzelne Anführungszeichen (<pre>\'</pre>) oft mit einem Backslash (<pre>\\</pre>) auskommentiert werden müssen. Um nähere Informationen von PHP zu diesem Fehler zu erhalten, versuche <a href="' . $boardurl . '%1$s">die Seite direkt aufzurufen</a>.<br /><br />Du kannst auch versuchen, die Seite zu <a href="javascript:location.reload();">aktualisieren</a> oder das <a href="' . $scripturl . '?theme=1">Standard-Theme</a> zu benutzen.';
$txt['template_parse_errmsg'] = 'Leider sind zur Zeit keine weiteren Informationen verfügbar.';

$txt['today'] = '<strong>Heute</strong> um ';
$txt['yesterday'] = '<strong>Gestern</strong> um ';
$txt['new_poll'] = 'Neue Umfrage';
$txt['poll_question'] = 'Frage';
$txt['poll_vote'] = 'Abstimmung absenden';
$txt['poll_total_voters'] = 'Mitglieder insgesamt abgestimmt';
$txt['shortcuts'] = 'Tastenkombination: alt+s Absenden/Beitrag, alt+p Vorschau';
$txt['shortcuts_firefox'] = 'Tastenkombination: shift+alt+s Absenden/Beitrag, shift+alt+p Vorschau';
$txt['shortcuts_drafts'] = ', alt+d Entwurf speichern';
$txt['shortcuts_drafts_firefox'] = ', shift+alt+d Entwurf speichern';
$txt['poll_results'] = 'Ergebnisse anzeigen';
$txt['poll_lock'] = 'Abstimmung sperren';
$txt['poll_unlock'] = 'Abstimmung entsperren';
$txt['poll_edit'] = 'Umfrage ändern';
$txt['poll'] = 'Umfrage';
$txt['one_day'] = '1 Tag';
$txt['one_week'] = '1 Woche';
$txt['two_weeks'] = '2 Wochen';
$txt['one_month'] = '1 Monat';
$txt['two_months'] = '2 Monate';
$txt['forever'] = 'Dauerhaft';
$txt['quick_login_dec'] = 'Anmelden mit Benutzername, Passwort und Session Länge';
$txt['one_hour'] = '1 Stunde';
$txt['moved'] = 'VERSCHOBEN';
$txt['move_why'] = 'Bitte gebe eine kurze Beschreibung ein, <br>warum dieses Thema verschoben wird.';
$txt['board'] = 'Forum';
$txt['in'] = 'in';
$txt['sticky_topic'] = 'Wichtiges Thema';

$txt['delete'] = 'Löschen';

$txt['your_pms'] = 'Deine persönlichen Nachrichten';

$txt['kilobyte'] = 'KB';
$txt['megabyte'] = 'MB';

$txt['more_stats'] = '[weitere Statistik]';

// Use numeric entities in the below three strings.
$txt['code'] = 'Code';
$txt['code_select'] = 'Wählen';
$txt['quote_from'] = 'Zitat von';
$txt['quote'] = 'Zitat';
$txt['quote_action'] = 'Zitat';
$txt['quote_selected_action'] = 'Ausgewählten Text zitieren';
$txt['fulledit'] = 'Vollständige&nbsp; Bearbeitung';
$txt['edit'] = 'Ändern';
$txt['quick_edit'] = 'Fix bearbeiten';
$txt['post_options'] = 'Mehr...';

$txt['merge_to_topic_id'] = 'ID des Ziel-Thema';
$txt['split'] = 'Thema teilen';
$txt['merge'] = 'Themen zusammenführen';
$txt['target_id'] = 'Ziel durch Themen-ID wählen';
$txt['target_below'] = 'Ziel aus der unteren Liste auswählen';
$txt['subject_new_topic'] = 'Betreff für neues Thema';
$txt['split_this_post'] = 'Nur diesen Beitrag teilen.';
$txt['split_after_and_this_post'] = 'Thema teilen nach und mit diesem Beitrag.';
$txt['select_split_posts'] = 'Beiträge zum teilen auswählen.';
$txt['new_topic'] = 'Neues Thema';
$txt['split_successful'] = 'Thema erfolgreich in zwei Themen aufgeteilt.';
$txt['origin_topic'] = 'Original Thema';
$txt['please_select_split'] = 'Bitte wähle die Beiträge aus, die du teilen möchtest.';
$txt['merge_successful'] = 'Themen erfolgreich zusammengeführt.';
$txt['new_merged_topic'] = 'Neu zusammengefasstes Thema';
$txt['topic_to_merge'] = 'Thema, welches zusammengeführt werden soll';
$txt['target_board'] = 'Zielforum';
$txt['target_topic'] = 'Zielthema';
$txt['merge_confirm'] = 'Bist du sicher, diese zusammen zuführen?';
$txt['with'] = 'mit';
$txt['merge_desc'] = 'Diese Funktion verbindet die Nachrichten zweier Themen zu einem Thema. Die Nachrichten werden nach der Beitragserstellung sortiert. Daher ist die früheste geschriebene Nachricht die erste Nachricht des zusammengeführten Themas.';

$txt['set_sticky'] = 'Thema wichtig';
$txt['set_nonsticky'] = 'Thema nicht wichtig';
$txt['set_lock'] = 'Thema sperren';
$txt['set_unlock'] = 'Thema entsperren';

$txt['search_advanced'] = 'Erweiterte Suche';

$txt['security_risk'] = 'HÖCHSTES SICHERHEITSRISIKO:';
$txt['not_removed'] = 'Noch nicht entfernt: ';
$txt['not_removed_extra'] = '%1$s Ist eine Sicherungskopie von %2$s die nicht von SMF erzeugt wurde. Es kann direkt zugegriffen und verwendet werden, um unbefugten Zugriff auf dein Board zu bekommen. Du solltest sie sofort löschen.';
$txt['generic_warning'] = 'Warnung';
$txt['agreement_missing'] = 'Die benötigte Datei (agreement.txt), um die Nutzungsbedingungen zu akzeptieren, existiert nicht.';

$txt['cache_writable'] = 'Das Cache-Verzeichnis ist nicht beschreibbar - Dies wirkt sich negativ auf die Leistung dein Board aus.';

$txt['page_created_full'] = 'Seite erstellt in %1$.3f Sekunden mit %2$d Abfragen.';

$txt['report_to_mod_func'] = 'Verwende diese Funktion, um die Moderatoren und Administratoren über eine missbräuchliche oder falsch geschriebene Nachricht zu informieren.';
$txt['report_profile_func'] = 'Verwende diese Funktion, um die Administratoren über missbräuchliche Profilinhalte wie Spam oder unangemessene Bilder zu informieren.';

$txt['online'] = 'Online';
$txt['member_is_online'] = '%1$s ist online';
$txt['offline'] = 'Offline';
$txt['member_is_offline'] = '%1$s ist offline';
$txt['pm_online'] = 'Private Nachricht (Online)';
$txt['pm_offline'] = 'Private Nachricht (Offline)';
$txt['status'] = 'Status';

$txt['go_up'] = 'Nach oben';
$txt['go_down'] = 'Nach unten';

$forum_copyright = '<a href="' . $scripturl . '?action=credits" title="License" target="_blank" class="new_win">%1$s &copy; %2$s</a>, <a href="http://www.simplemachines.org" title="Simple Machines" target="_blank" class="new_win">Simple Machines</a>';

$txt['birthdays'] = 'Geburtstage:';
$txt['events'] = 'Ereignisse:';
$txt['birthdays_upcoming'] = 'Anstehende Geburtstage:';
$txt['events_upcoming'] = 'Anstehende Ereignisse:';
// Prompt for holidays in the calendar, leave blank to just display the holiday's name.
$txt['calendar_prompt'] = 'Feiertage:';
$txt['calendar_month'] = 'Monat:';
$txt['calendar_year'] = 'Jahr:';
$txt['calendar_day'] = 'Tag:';
$txt['calendar_event_title'] = 'Ereignis Titel';
$txt['calendar_event_options'] = 'Ereignis Optionen';
$txt['calendar_post_in'] = 'Erstellen in:';
$txt['calendar_edit'] = 'Ereignis bearbeiten';
$txt['calendar_export'] = 'Ereignis Export';
$txt['calendar_view_week'] = 'Woche anzeigen';
$txt['event_delete_confirm'] = 'Dieses Ereignis löschen?';
$txt['event_delete'] = 'Ereignis löschen';
$txt['calendar_post_event'] = 'Ereignis erstellen';
$txt['calendar'] = 'Kalender';
$txt['calendar_link'] = 'Verlinke zum Kalender';
$txt['calendar_upcoming'] = 'Anstehender Kalender';
$txt['calendar_today'] = 'Heutiger Kalender';
$txt['calendar_week'] = 'Woche';
$txt['calendar_week_title'] = 'Woche %1$d von %2$d';
// %1$s is the month, %2$s is the day, %3$s is the year. Change to suit your language.
$txt['calendar_week_beginning'] = 'Wochenbeginn %1$s %2$s, %3$s';
$txt['calendar_numb_days'] = 'Anzahl der Tage:';
$txt['calendar_how_edit'] = 'Wie werden diese Ereignisse geändert?';
$txt['calendar_link_event'] = 'Verlinke Ereignis zum Beitrag:';
$txt['calendar_confirm_delete'] = 'Bist du sicher, dass du dieses Ereignis löschen möchtest?';
$txt['calendar_linked_events'] = 'Verknüpfte Ereignisse';
$txt['calendar_click_all'] = 'klick um alle %1$s zusehen';

$txt['movetopic_change_subject'] = 'Themen Betreff ändern';
$txt['movetopic_new_subject'] = 'Neuer Betreff';
$txt['movetopic_change_all_subjects'] = 'Jeden Nachrichtenbetreff ändern';
$txt['move_topic_unapproved_js'] = 'Warnung! Dieses Thema wurde noch nicht genehmigt.\\n\\nEs wird nicht empfohlen, dass du eine Umleitung zum Thema erstellst, es sei denn, dass du den Beitrag sofort nach der Verschiebung bewilligen möchtest.';
$txt['movetopic_auto_board'] = '[BOARD]';
$txt['movetopic_auto_topic'] = '[TOPIC LINK]';
$txt['movetopic_default'] = 'Dieses Thema wurde verschoben nach ' . $txt['movetopic_auto_board'] . ".\n\n" . $txt['movetopic_auto_topic'];
$txt['movetopic_redirect'] = 'Weiterleitung zum verschobenen Thema';

$txt['post_redirection'] = 'Ein Umleitungs Thema erstellen';
$txt['redirect_topic_expires'] = 'Umleitungs Thema automatisch entfernen';
$txt['mergetopic_redirect'] = 'Weiterleitung zum zusammengeführten Thema';
$txt['merge_topic_unapproved_js'] = 'Warnung! Dieses Thema wurde noch nicht genehmigt.\\n\\nEs wird nicht empfohlen, dass du eine Umleitung zum Thema erstellst, es sei denn, dass du den Beitrag sofort nach der Zusammenführung bewilligen möchtest.';

$txt['theme_template_error'] = 'Das \'%1$s\' template kann nicht geladen werden.';
$txt['theme_language_error'] = 'Die \'%1$s\' Sprachdatei kann nicht geladen werden.';

$txt['sub_boards'] = 'Unterforen';
$txt['restricted_board'] = 'Eingeschränktes Forum';

$txt['smtp_no_connect'] = 'Die Verbindung zum SMTP-Host konnte nicht hergestellt werden.';
$txt['smtp_port_ssl'] = 'SMTP-Port Einstellung falsch; Es sollte 465 für SSL-Server sein.';
$txt['smtp_bad_response'] = 'E-Mail Server Antwortcodes konnten nicht empfangen werden';
$txt['smtp_error'] = 'Probleme beim Senden von E-Mails. Fehler: ';
$txt['mail_send_unable'] = 'E-Mail konnte nicht an die E-Mail Adresse \'%1$s\' gesendet werden';

$txt['mlist_search'] = 'Mitgliedersuche';
$txt['mlist_search_again'] = 'Eine erneute Suche';
$txt['mlist_search_filter'] = 'Suchoptionen';
$txt['mlist_search_email'] = 'nach E-Mail-Adresse';
$txt['mlist_search_messenger'] = 'nach Messenger Nickname';
$txt['mlist_search_group'] = 'nach Rang';
$txt['mlist_search_name'] = 'nach Name';
$txt['mlist_search_website'] = 'nach Webseite';
$txt['mlist_search_results'] = 'Suchergebnisse für';
$txt['mlist_search_by'] = 'Suche nach %1$s';
$txt['mlist_menu_view'] = 'Mitgliederliste ansehen';

$txt['attach_downloaded'] = '%1$d mal heruntergeladen';
$txt['attach_viewed'] = '%1$d mal angesehen';

$txt['settings'] = 'Einstellungen';
$txt['never'] = 'Nie';
$txt['more'] = 'mehr';

$txt['hostname'] = 'Hostname';
$txt['you_are_post_banned'] = 'Tut uns leid %1$s, du bist gesperrt für Private Nachrichten zu schreiben und versenden in diesem Board.';
$txt['ban_reason'] = 'Grund';

$txt['tables_optimized'] = 'Datenbank Tabellen optimiert';

$txt['add_poll'] = 'Umfrage hinzufügen';
$txt['poll_options6'] = 'Du kannst nur bis zu %1$s Optionen wählen.';
$txt['poll_remove'] = 'Umfrage entfernen';
$txt['poll_remove_warn'] = 'Bist du sicher, dass du diese Umfrage aus dem Thema entfernen möchtest?';
$txt['poll_results_expire'] = 'Ergebnisse werden angezeigt, wenn die Abstimmung beendet ist';
$txt['poll_expires_on'] = 'Abstimmung endet';
$txt['poll_expired_on'] = 'Abstimmung beendet';
$txt['poll_change_vote'] = 'Abstimmung entfernen';
$txt['poll_return_vote'] = 'Abstimmung Optionen';
$txt['poll_cannot_see'] = 'Du kannst die Ergebnisse dieser Umfrage im Moment nicht sehen.';

$txt['quick_mod_approve'] = 'Auswahl bestätigen';
$txt['quick_mod_remove'] = 'Ausgewählte entfernen';
$txt['quick_mod_lock'] = 'Sperren / Entsperren ausgewählt';
$txt['quick_mod_sticky'] = 'Wichtig / nicht Wichtig ausgewählt';
$txt['quick_mod_move'] = 'Verschieben ausgewählt, nach';
$txt['quick_mod_merge'] = 'Zusammenführen ausgewählt';
$txt['quick_mod_markread'] = 'Ausgewählte als gelesen markieren';
$txt['quick_mod_markunread'] = 'Ausgewählte als nicht gelesen markieren';
$txt['quick_mod_selected'] = 'Mit den ausgewählten Optionen';
$txt['quick_mod_go'] = 'Los';
$txt['quickmod_confirm'] = 'Bist du sicher, dass du dies tun möchtest?';

$txt['spell_check'] = 'Rechtschreibprüfung';

$txt['quick_reply'] = 'Schnellantwort';
$txt['quick_reply_desc'] = 'Mit der <em>Schnellantwort</em> kannst du beim Ansehen eines Themas, einen Beitrag erstellen, ohne die Seite neu zu laden. Du kannst Bulletin Board Code und Smileys wie in einem normalen Beitrag verwenden.';
$txt['quick_reply_warning'] = 'Warnung! Dieses Thema ist derzeit gesperrt, nur Admins und Moderatoren können antworten.';
$txt['quick_reply_verification'] = 'Nach dem Absenden deines Beitrags wirst du zu der regulären Beitragseite weitergeleitet, um deinen Beitrag \'%1$s\' zu überprüfen.';
$txt['quick_reply_verification_guests'] = '(erforderlich für alle Gäste)';
$txt['quick_reply_verification_posts'] = '(erforderlich für alle Benutzer mit weniger als %1$d Beiträge)';
$txt['wait_for_approval'] = 'Hinweis: Dieser Beitrag wird nicht angezeigt, bis er von einem Moderator genehmigt wurde.';

$txt['notification_enable_board'] = 'Bist du sicher, dass du eine Benachrichtigung über neue Themen für dieses Forum aktivieren möchtest?';
$txt['notification_disable_board'] = 'Bist du sicher, dass du eine Benachrichtigung über neue Themen für dieses Forum deaktivieren möchtest?';
$txt['notification_enable_topic'] = 'Bist du sicher, dass du eine Benachrichtigung über neue Antworten für dieses Thema aktivieren möchtest?';
$txt['notification_disable_topic'] = 'Bist du sicher, dass du eine Benachrichtigung über neue Antworten für dieses Thema deaktivieren möchtest?';

// Mentions
$txt['mentions'] = 'Erwähnungen';

// Likes
$txt['likes'] = 'Gefällt mir';
$txt['like'] = 'Gefällt mir';
$txt['unlike'] = 'Gefällt mir nicht mehr';
// start.nicht übersetzt. Strings werden nicht benötigt
$txt['like_success'] = 'Your content was successfully liked.';
$txt['like_delete'] = 'Your content was successfully deleted.';
$txt['like_insert'] = 'Your content was successfully inserted.';
// ende.nicht übersetzt. Strings werden nicht benötigt
$txt['like_error'] = 'Bei deiner Anfrage ist ein Fehler aufgetreten.';
$txt['like_disable'] = 'Gefällt mir Funktion ist deaktiviert.';
$txt['not_valid_like_type'] = 'Gefällt mir Typ ist kein gültiger Typ.';
// Translators, if you need to make more strings to suit your language, e.g. $txt['likes_2'] = 'Two people like this', please do so.
$txt['likes_1'] = '<a href="%1$s">%2$s Person</a> gefällt das.';
$txt['likes_n'] = '<a href="%1$s">%2$s Personen</a> gefällt das.';
$txt['you_likes_0'] = 'Dir gefällt das.';
$txt['you_likes_1'] = 'Dir und <a href="%1$s">%2$s anderer Person</a> gefällt das.';
$txt['you_likes_n'] = 'Dir und <a href="%1$s">%2$s anderen Personen</a> gefällt das.';

$txt['report_to_mod'] = 'Einem Moderator melden';
$txt['report_profile'] = 'Profil von %1$s melden';

$txt['unread_topics_visit'] = 'Letzte ungelesene Themen';
$txt['unread_topics_visit_none'] = 'Keine ungelesenen Beiträge seit deinem letzten Besuch gefunden. <a href="' . $scripturl . '?action=unread;all">Klick hier und versuche es bei allen ungelesenen Themen</a>.';
$txt['unread_topics_all'] = 'Alle ungelesenen Themen';
$txt['unread_replies'] = 'Aktualisierte Themen';

$txt['who_title'] = 'Wer ist online';
$txt['who_and'] = ' und ';
$txt['who_viewing_topic'] = ' schauen sich dieses Thema an.';
$txt['who_viewing_board'] = ' schauen sich dieses Forum an.';
$txt['who_member'] = 'Mitglied';

// No longer used by default theme, but for backwards compat
$txt['powered_by_php'] = 'Powered by PHP';
$txt['powered_by_mysql'] = 'Powered by MySQL';
$txt['valid_css'] = 'Valid CSS';

// Current footer strings, no longer used
$txt['valid_html'] = 'Valid HTML 4.01';
$txt['valid_xhtml'] = 'Valid XHTML 1.0';
$txt['wap2'] = 'WAP2';
$txt['rss'] = 'RSS';
$txt['atom'] = 'Atom';
$txt['xhtml'] = 'XHTML';
$txt['html'] = 'HTML';

$txt['guest'] = 'Gast';
$txt['guests'] = 'Gäste';
$txt['user'] = 'Benutzer';
$txt['users'] = 'Benutzer';
$txt['hidden'] = 'Verborgen';
// Plural form of hidden for languages other than English
$txt['hidden_s'] = 'Verborgen';
$txt['buddy'] = 'Freund';
$txt['buddies'] = 'Freunde';
$txt['most_online_ever'] = 'Gleichzeitig online';
$txt['most_online_today'] = 'Am meisten online heute';

$txt['merge_select_target_board'] = 'Wähle das Zielforum des zusammengeführten Themas aus';
$txt['merge_select_poll'] = 'Wähle welche Umfrage das zusammengeführten Themas enthalten soll';
$txt['merge_topic_list'] = 'Wähle welche Themen zusammengeführt werden sollen';
$txt['merge_select_subject'] = 'Wähle welchen Betreff das zusammengeführten Thema enthalten soll';
$txt['merge_custom_subject'] = 'Benutzerdefinierter Betreff';
$txt['merge_include_notifications'] = 'Einschließlich Benachrichtigung?';
$txt['merge_check'] = 'Zusammenführen?';
$txt['merge_no_poll'] = 'Keine Umfrage';
$txt['merge_why'] = 'Bitte geben Sie eine kurze Beschreibung ein,<br>warum diese Themen zusammengeführt werden sollen.';
$txt['merged_subject'] = '%1$s [ZUSAMMENGEFÜHRT]';
$txt['mergetopic_default'] = 'Dieses Thema wurde zusammengeführt in ' . $txt['movetopic_auto_topic'] . '.';

$txt['response_prefix'] = 'Re: ';
$txt['current_icon'] = 'Aktuelles Symbol';
$txt['message_icon'] = 'Nachricht  Symbol';

$txt['smileys_current'] = 'Aktuelles Smiley Set';
$txt['smileys_none'] = 'Keine Smileys';
$txt['smileys_forum_board_default'] = 'Board-Standard';

$txt['search_results'] = 'Suchergebnisse';
$txt['search_no_results'] = 'Es wurden keine Übereinstimmungen gefunden';

$txt['totalTimeLogged2'] = ' Tage, ';
$txt['totalTimeLogged3'] = ' Stunden und ';
$txt['totalTimeLogged4'] = ' Minuten.';
$txt['totalTimeLogged5'] = 'd ';
$txt['totalTimeLogged6'] = 'h ';
$txt['totalTimeLogged7'] = 'm';

$txt['approve_members_waiting'] = 'Mitgliedszulassungen';

$txt['notifyboard_turnon'] = 'Möchtest du eine E-Mail Benachrichtigung, wenn jemand ein neues Thema in diesem Forum veröffentlicht hat?';
$txt['notifyboard_turnoff'] = 'Bist du sicher, dass du keine neuen Themenbenachrichtigungen für dieses Forum erhalten möchtest';

$txt['activate_code'] = 'Dein Aktivierungscode ist';

$txt['find_members'] = 'Mitglieder suchen';
$txt['find_username'] = 'Name, Benutzername, oder E-Mail Adresse';
$txt['find_buddies'] = 'Nur Freunde anzeigen?';
$txt['find_wildcards'] = 'Platzhalter zulassen: *, ?';
$txt['find_no_results'] = 'Keine Ergebnisse gefunden';
$txt['find_results'] = 'Ergebnisse';
$txt['find_close'] = 'Schließen';

$txt['unread_since_visit'] = 'Ungelesene Beiträge seit dem letzten Besuch anzeigen.';
$txt['show_unread_replies'] = 'Neue Antworten auf deine Beiträge anzeigen.';

$txt['change_color'] = 'Farbe ändern';

$txt['quickmod_delete_selected'] = 'Ausgewählte entfernen';
$txt['quickmod_split_selected'] = 'Ausgewählte teilen';

$txt['show_personal_messages_heading'] = 'Neue Nachrichten';
$txt['show_personal_messages'] = 'Du hast <strong>%1$s</strong> ungelesene persönliche Nachrichten in deinem Posteingang.<br><br><a href="%2$s">Zu deinem Posteingang</a>';

$txt['help_popup'] = 'Ein wenig verloren? Lass mich erklären:';

$txt['previous_next_back'] = 'Vorheriges Thema';
$txt['previous_next_forward'] = 'Nächstes Thema';

$txt['mark_unread'] = 'Als ungelesen markieren';

$txt['ssi_not_direct'] = 'Bitte greife nicht direkt auf SSI.php zu. Du kannst den den Pfad (%1$s) oder ?ssi_function= etwas hinzufügen.';
$txt['ssi_session_broken'] = 'SSI.php konnte keine Sitzung laden!  Dies kann zu Problemen mit der Anmeldung und anderen Funktionen führen - bitte stellen Sie sicher, dass SSI.php in allen *jeglichen* Skripts aufgerufen wird!';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['preview_title'] = 'Vorheriger Beitrag';
$txt['preview_fetch'] = 'Lade Vorschau...';
$txt['preview_new'] = 'Neue Nachricht';
$txt['pm_error_while_submitting'] = 'Folgenden Fehler sind beim Absenden der persönlichen Nachricht aufgetreten:';
$txt['error_while_submitting'] = 'Folgende Fehler müssen korrigiert werden, bevor du fortfährst:';
$txt['error_old_topic'] = 'Achtung: In dieses Thema wurde der letzte Beitrag mindestens vor %1$d Tage veröffentlicht.<br>Wenn du nicht sicher bist, dass du Antworten möchtest, erstelle bitte ein neues Thema.';

$txt['split_selected_posts'] = 'Ausgewählte Beiträge';
$txt['split_selected_posts_desc'] = 'Die Beiträge weiter unten bilden ein neues Thema nach der Teilung.';
$txt['split_reset_selection'] = 'Auswahl zurücksetzen';

$txt['modify_cancel'] = 'Abbrechen';
$txt['modify_cancel_all'] = 'Alle abbrechen';
$txt['mark_read_short'] = 'Als gelesen markieren';

$txt['alerts'] = 'Benachrichtigung';

$txt['pm_short'] = 'Private Nachrichten';
$txt['pm_menu_read'] = 'Deine Nachrichten lesen';
$txt['pm_menu_send'] = 'Eine Nachricht senden';

$txt['unapproved_posts'] = 'Nicht genehmigte Beiträge (Themen: %1$d, Beiträge: %2$d)';

$txt['ajax_in_progress'] = 'Laden...';

$txt['mod_reports_waiting'] = 'Gemeldete Beiträge';

$txt['view_unread_category'] = 'Ungelesene Beiträge';
$txt['new_posts_in_category'] = 'Klick hier für die neuen Beiträge in %1$s';
$txt['verification'] = 'Verifizierung';
$txt['visual_verification_hidden'] = 'Bitte lasse dieses Feld leer';
$txt['visual_verification_description'] = 'Tippe die im Bild gezeigten Buchstaben ein';
$txt['visual_verification_sound'] = 'Höre dir die Buchstaben an';
$txt['visual_verification_request_new'] = 'Forder ein weiteres Bild an';

// Sub menu labels
$txt['summary'] = 'Zusammenfassung';
$txt['account'] = 'Persönlicher Bereich';
$txt['theme'] = 'Design & Layout';
$txt['forumprofile'] = 'Profil';
$txt['activate_changed_email_title'] = 'E-Mail Adresse geändert';
$txt['activate_changed_email_desc'] = 'Du hast deine e-Mail-Adresse geändert. Um diese E-Mail Adresse zu bestätigen, erhälst du eine E-Mail. Klicke auf den Link in dieser E-Mail, um dein Konto zu reaktivieren.';
$txt['modSettings_title'] = 'Funktionen & Optionen';
$txt['package'] = 'Paketverwaltung';
$txt['errlog'] = 'Fehler Protokoll';
$txt['edit_permissions'] = 'Berechtigungen';
$txt['mc_unapproved_attachments'] = 'Nicht genehmigte Dateianlagen';
$txt['mc_unapproved_poststopics'] = 'Nicht genehmigte Beiträge und Themen';
$txt['mc_reported_posts'] = 'Gemeldete Beiträge';
$txt['mc_reported_members'] = 'Gemeldete Mitglieder';
$txt['modlog_view'] = 'Moderations Protokoll';
$txt['calendar_menu'] = 'Kalender ansehen';

// @todo Send email strings - should move?
$txt['send_email'] = 'E-Mail senden';
$txt['send_email_disclosed'] = 'Beachten, dass dies für den Empfänger sichtbar ist.';

$txt['ignoring_user'] = 'Du ignorierst diesen Benutzer.';
$txt['show_ignore_user_post'] = 'Zeig mir den Beitrag.';

$txt['spider'] = 'Spider';
$txt['spiders'] = 'Spiders';

$txt['downloads'] = 'Heruntergeladen';
$txt['filesize'] = 'Dateigröße';

// Restore topic
$txt['restore_topic'] = 'Thema wiederherstellen';
$txt['restore_message'] = 'Wiederherstellen';
$txt['quick_mod_restore'] = 'Ausgewählte wiederherstellen';

// Editor prompt.
$txt['prompt_text_email'] = 'Bitte gebe die E-Mail-Adresse ein.';
$txt['prompt_text_ftp'] = 'Bitte gebe die FTP-Adresse ein.';
$txt['prompt_text_url'] = 'Bitte gebe die URL ein, zu der du verlinken möchtest.';
$txt['prompt_text_img'] = 'Bitte gebe das Bild Verzeichnis ein.';

// Escape any single quotes in here twice.. 'it\'s' -> 'it\\\'s'.
$txt['autosuggest_delete_item'] = 'Element löschen';

// Debug related - when $db_show_debug is true.
$txt['debug_templates'] = 'Templates: ';
$txt['debug_subtemplates'] = 'Sub Templates: ';
$txt['debug_language_files'] = 'Sprachdateien: ';
$txt['debug_stylesheets'] = 'Stylesheets: ';
$txt['debug_files_included'] = 'Dateien enthalten: ';
$txt['debug_memory_use'] = 'Speicher verwendet: ';
$txt['debug_kb'] = 'KB.';
$txt['debug_show'] = 'anzeigen';
$txt['debug_cache_hits'] = 'Cache Zugriffe: ';
$txt['debug_cache_misses'] = 'Cache ausgesetzt: ';
$txt['debug_cache_seconds_bytes'] = '%1$ss - %2$s bytes';
$txt['debug_cache_seconds_bytes_total'] = '%1$ss for %2$s bytes';
$txt['debug_queries_used'] = 'Abfragen verwendet: %1$d.';
$txt['debug_queries_used_and_warnings'] = 'Abfragen verwendet: %1$d, %2$d Warnungen.';
$txt['debug_query_in_line'] = 'in <em>%1$s</em> Zeile <em>%2$s</em>, ';
$txt['debug_query_which_took'] = 'die dauerte %1$s Sekunden.';
$txt['debug_query_which_took_at'] = 'die dauerte %1$s Sekunden at %2$s auf Anfrage.';
$txt['debug_show_queries'] = '[Abfragen anzeigen]';
$txt['debug_hide_queries'] = '[Abfragen ausblenden]';
$txt['debug_tokens'] = 'Tokens: ';
$txt['debug_browser'] = 'Browser ID: ';
$txt['debug_hooks'] = 'Hooks namens: ';
$txt['debug_instances'] = 'Instanzen erstellt: ';
$txt['are_sure_mark_read'] = 'Bist du sicher, dass du alle Nachrichten als gelesen markieren möchtest?';

// Inline attachments messages.
$txt['attachments_not_enable'] = 'Dateianhänge sind deaktiviert';
$txt['attachments_no_data_loaded'] = 'Keine gültige Dateianhang ID.';
$txt['attachments_not_allowed_to_see'] = 'Du kannst keine Dateianhänge in diesem Board sehen.';
$txt['attachments_no_msg_associated'] = 'Dateianhang nicht vorhanden.';

// Accessibility
$txt['hide_category'] = 'Kategorie ausblenden';
$txt['show_category'] = 'Kategorie einblenden';
$txt['hide_infocenter'] = 'Info Bereich ausblenden';
$txt['show_infocenter'] = 'Info Bereich anzeigen';

// Notification post control
$txt['notify_topic_0'] = 'Nicht folgen';
$txt['notify_topic_1'] = 'Keine Benachrichtungen oder E-Mails';
$txt['notify_topic_2'] = 'Benachrichtigungen erhalten';
$txt['notify_topic_3'] = 'Benachrichtungen oder E-Mails erhalten';
$txt['notify_topic_0_desc'] = 'Du erhälst keine E-Mails oder Benachrichtigungen für diesen Beitrag und es wird auch nicht angezeigt, in deinen ungelesenen Antworten und Themen Liste. Du erhälst weiterhin @mentionen für dieses Thema.';
$txt['notify_topic_1_desc'] = 'Du erhältst keine E-Mails oder Benachrichtigungen, sondern nur @mentionen von anderen Mitgliedern.';
$txt['notify_topic_2_desc'] = 'Du erhältst Benachrichtigungen zu diesem Thema.';
$txt['notify_topic_3_desc'] = 'Du erhältst sowohl Benachrichtigungen als auch E-Mails zu diesem Thema.';
$txt['notify_board_1'] = 'Keine Benachrichtungen oder E-Mails';
$txt['notify_board_2'] = 'Benachrichtigungen erhalten erhalten';
$txt['notify_board_3'] = 'Benachrichtungen oder E-Mails';
$txt['notify_board_1_desc'] = 'Du erhältst keine E-Mails oder Benachrichtigungen über neue Themen';
$txt['notify_board_2_desc'] = 'Du erhältst Benachrichtigungen für dieses Forum.';
$txt['notify_board_3_desc'] = 'Du erhältst beide Benachrichtigungen und E-Mails für dieses Forum.';

// Mobile Actions
$txt['mobile_action'] = 'Benutzeraktionen';
$txt['mobile_moderation'] = 'Moderation';
$txt['mobile_user_menu'] = 'Menü';
?>