<?php
// Version: 2.0; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'Du hast keinen Zugriff auf diesen Bereich!';
$txt['wireless_error_notyet'] = 'Diese Sektion ist momentan für schnurlos-Benutzer (wireless) leider nicht verfügbar.';

$txt['mods_only'] = 'Nur Moderatoren können die direkte Löschfunktion benutzen, bitte lösche diesen Eintrag mit der \'Editieren\' Funktion.';
$txt['no_name'] = 'Du hast das erforderliche Namensfeld nicht ausgefüllt.';
$txt['no_email'] = 'Du hast das erforderliche E-Mail Feld nicht ausgefüllt.';
$txt['topic_locked'] = 'Das Thema ist geschlossen. Änderungen oder neue Einträge sind nicht erlaubt.';
$txt['no_password'] = 'Passwortfeld ist leer';
$txt['already_a_user'] = 'Dieser Benutzername ist bereits vergeben.';
$txt['cant_move'] = 'Du hast keine Berechtigung Themen zu verschieben.';
$txt['login_to_post'] = 'Um Beiträge zu schreiben, must Du eingeloggt sein. Registriere bitte ein neues Benutzerkonto, falls Du noch keines hast.';
$txt['passwords_dont_match'] = 'Passwörter stimmen nicht überein.';
$txt['register_to_use'] = 'Du musst dich erst registrieren, bevor Du diese Funktion nutzen kannst.';
$txt['password_invalid_character'] = 'Ungültiges Zeichen im Passwort.';
$txt['name_invalid_character'] = 'Ungültiges Zeichen im Namen.';
$txt['email_invalid_character'] = 'Ungültiges Zeichen in der E-Mail-Adresse.';
$txt['username_reserved'] = 'Der Benutzername, den Du registrieren möchtest, enthält einen reservierten Namen. Bitte versuche einen anderen Namen. Reservierte Namen: %1$s';
$txt['numbers_one_to_nine'] = 'Dieses Feld akzeptiert nur Zahlen von 0-9';
$txt['not_a_user'] = 'Der Benutzer, von dem Du das Profil anschauen möchtest, existiert nicht.';
$txt['not_a_topic'] = 'Dieses Thema ist im Forum nicht vorhanden.';
$txt['not_approved_topic'] = 'Dieser Beitrag wurde noch nicht genehmigt.';
$txt['email_in_use'] = 'Diese E-Mail-Adresse (%1$s) wird schon von einem registrierten Mitglied benutzt. Sollten Du das für einen Fehler halten, gehe auf die Login-Seite und benutze die Funktion \'Passworterinnerung\' mit dieser Adresse.';

$txt['didnt_select_vote'] = 'Keine Umfrageoption ausgewählt.';
$txt['poll_error'] = 'Die Umfrage ist nicht vorhanden, geschlossen oder Du hast versucht, zweimal abzustimmen.';
$txt['members_only'] = 'Diese Funktion steht nur Mitgliedern zur Verfügung.';
$txt['locked_by_admin'] = 'Dieses Thema wurde von einem Administrator geschlossen. Du kannst es nicht öffnen.';
$txt['not_enough_posts_karma'] = 'Du hast zu wenige Beiträge um das Karma zu ändern, Du brauchst minimal %1$d.';
$txt['cant_change_own_karma'] = 'Du darfst dein eigenes Karma nicht ändern.';
$txt['karma_wait_time'] = 'Du kannst diese Aktion nicht erneut ausführen, ohne %1$s %2$s zu warten.';
$txt['feature_disabled'] = 'Diese Funktion ist deaktiviert.';
$txt['cant_access_upload_path'] = 'Es kann auf den Upload-Pfad der Dateianhänge nicht zugegriffen werden.';
$txt['file_too_big'] = 'Die Datei ist zu groß. Die max. Größe für Dateianhänge ist %1$d KB.';
$txt['attach_timeout'] = 'Fehler beim Speichern der Datei, bitte versuche es noch einmal.';
$txt['filename_exists'] = 'Es existiert bereits eine Datei mit diesem Namen. Bitte die Datei umbenennen und erneut hochladen.';
$txt['bad_attachment'] = 'Deine Anlage hat die Sicherheitskontrolle nicht bestanden und kann nicht hochgeladen werden. Bitte benachrigtige den Administrator.';
$txt['ran_out_of_space'] = 'Das Upload-Verzeichnis ist voll. Bitte versuche es mit einer kleineren Datei oder kontaktiere den Administrator.';
$txt['couldnt_connect'] = 'Es konnte keine Verbindung zum Server hergestellt werden oder die Datei ist nicht vorhanden.';
$txt['no_board'] = 'Das angegebene Board existiert nicht.';
$txt['cant_split'] = 'Du hast keine Berechtigung Themen zu teilen';
$txt['cant_merge'] = 'Du hast keine Berechtigung Themen zusammenzuführen';
$txt['no_topic_id'] = 'Ungültige Themen ID.';
$txt['split_first_post'] = 'Du kannst ein Thema nicht beim ersten Beitrag teilen.';
$txt['topic_one_post'] = 'Themen mit nur einem Beitrag können nicht geteilt werden.';
$txt['no_posts_selected'] = 'Keine Beiträge ausgewählt';
$txt['selected_all_posts'] = 'Teilen nicht möglich. Du hast alle Nachrichten ausgewählt.';
$txt['cant_find_messages'] = 'Beiträge nicht gefunden';
$txt['cant_find_user_email'] = 'Die E-Mail-Adresse konnte nicht gefunden werden.';
$txt['cant_insert_topic'] = 'Kann Thema nicht einfügen';
$txt['already_a_mod'] = 'Du hast einen Benutzernamen gewählt, der bereits Moderator ist. Bitte wählen Sie einen anderen Namen';
$txt['session_timeout'] = 'Deine Sitzung ist während des Schreibens abgelaufen. Bitte gehe zurück und versuche es erneut.';
$txt['session_verify_fail'] = 'Sitzungsverifizierung fehlgeschlagen. Bitte logge dich aus und danach wieder ein und versuche es erneut.';
$txt['verify_url_fail'] = 'Ungültige Referring Site. Bitte gehe zurück und versuche es erneut.';
$txt['guest_vote_disabled'] = 'Gäste können in dieser Umfrage nicht abstimmen.';

$txt['cannot_access_mod_center'] = 'Du hast nicht die Berechtigung auf das Moderations-Center zuzugreifen.';
$txt['cannot_admin_forum'] = 'Du hast keine Administrator Rechte.';
$txt['cannot_announce_topic'] = 'Du hast nicht die Berechtigung in diesem Board Themen anzukündigen.';
$txt['cannot_approve_posts'] = 'Du hast nicht die Berechtigung Genehmigungen zu erteilen.';
$txt['cannot_post_unapproved_attachments'] = 'Du hast keine Berechtigung um nicht genehmigte Dateianhänge zu erstellen.';
$txt['cannot_post_unapproved_topics'] = 'Du hast keine Berechtigung um nicht genehmigte Themen zu erstellen.';
$txt['cannot_post_unapproved_replies_own'] = 'Du hast keine Berechtigung um nicht genehmigte Antworten zu deinem Themen zu schreiben.';
$txt['cannot_post_unapproved_replies_any'] = 'Du hast keine Berechtigung um nicht genehmigte Antworten zu Themen anderer Benutzer zu schreiben.';
$txt['cannot_calendar_edit_any'] = 'Du hast nicht die Berechtigung Kalenderereignisse zu editieren.';
$txt['cannot_calendar_edit_own'] = 'Du hast nicht die Berechtigung deine eigenen Ereignisse zu editieren.';
$txt['cannot_calendar_post'] = 'Du hast nicht die Berechtigung Ereignisse zu schreiben.';
$txt['cannot_calendar_view'] = 'Du hast nicht die Berechtigung den Kalender anzuschauen.';
$txt['cannot_remove_any'] = 'Du hast nicht die Berechtigung jeden Beitrag zu löschen.';
$txt['cannot_remove_own'] = 'Du hast nicht die Berechtigung deine Beiträge in diesem Board zu löschen.';
$txt['cannot_edit_news'] = 'Du hast nicht die Berechtigung News zu editieren.';
$txt['cannot_pm_read'] = 'Du hast nicht die Berechtigung deine Privaten Mitteilungen zu lesen.';
$txt['cannot_pm_send'] = 'Du hast nicht die Berechtigung Private Mitteilungen zu versenden.';
$txt['cannot_karma_edit'] = 'Du hast nicht die Berechtigung andere Benutzern zu bewerten.';
$txt['cannot_lock_any'] = 'Du hast nicht die Berechtigung Themen zu schließen.';
$txt['cannot_lock_own'] = 'Du hast nicht die Berechtigung deine eigenen Themen zu schließen.';
$txt['cannot_make_sticky'] = 'Du hast nicht die Berechtigung das Thema zu fixieren.';
$txt['cannot_manage_attachments'] = 'Du hast nicht die Berechtigung Dateien zu verwalten.';
$txt['cannot_manage_bans'] = 'Du hast nicht die Berechtigung die Bann-Liste zu editieren.';
$txt['cannot_manage_boards'] = 'Du hast nicht die Berechtigung Boards und Kategorien zu verwalten.';
$txt['cannot_manage_membergroups'] = 'Du hast nicht die Berechtigung Mitgliedergruppen zu verwalten.';
$txt['cannot_manage_permissions'] = 'Du hast nicht das Recht die Berechtigungen zu verwalten.';
$txt['cannot_manage_smileys'] = 'Du hast nicht die Berechtigung Smileys oder Nachrichten-Icons zu verwalten.';
$txt['cannot_mark_any_notify'] = 'Du hast nicht das Recht Benachrichtigungen von diesem Thema zu empfangen.';
$txt['cannot_mark_notify'] = 'Du hast nicht die Berechtigung um Benachrichtigungen von diesem Board zu empfangen.';
$txt['cannot_merge_any'] = 'Du hast nicht die Berechtigung Themen zusammenzuführen.';
$txt['cannot_moderate_forum'] = 'Du hast nicht die Berechtigung dieses Forum zu moderieren.';
$txt['cannot_moderate_board'] = 'Sie sind nicht berechtigt dieses Board zu moderieren.';
$txt['cannot_modify_any'] = 'Du hast nicht die Berechtigung jeden Beitrag zu editieren.';
$txt['cannot_modify_own'] = 'Du hast nicht die Berechtigung deine eigenen Beiträge zu editieren.';
$txt['cannot_modify_replies'] = 'Du hast nicht die Berechtigung diese Antwort zu editieren, obwohl es eine Antwort auf deinen Beitrag ist.';
$txt['cannot_move_own'] = 'Du hast nicht die Berechtigung deine Beiträge in dieses Board zu verschieben.';
$txt['cannot_move_any'] = 'Du hast nicht die Berechtigung in diesem Board Themen zu verschieben.';
$txt['cannot_poll_add_own'] = 'Du hast nicht die Berechtigung Umfragen zu deinen Beiträgen hinzufügen.';
$txt['cannot_poll_add_any'] = 'Du hast nicht die Berechtigung Umfragen zu diesem Thema hinzuzufügen.';
$txt['cannot_poll_edit_own'] = 'Du hast nicht die Berechtigung deine Umfrage zu editieren.';
$txt['cannot_poll_edit_any'] = 'Du hast nicht die Berechtigung Umfragen zu editieren.';
$txt['cannot_poll_lock_own'] = 'Du hast nicht die Berechtigung deine eigenen Umfragen zu schließen.';
$txt['cannot_poll_lock_any'] = 'Du hast nicht die Berechtigung Umfragen zu schließen.';
$txt['cannot_poll_post'] = 'Du hast nicht die Berechtigung Umfragen zu starten.';
$txt['cannot_poll_remove_own'] = 'Du hast nicht die Berechtigung die Umfrage von deinem Thema zu entfernen.';
$txt['cannot_poll_remove_any'] = 'Sie dürfen in diesem Board keine Umfragen entfernen.';
$txt['cannot_poll_view'] = 'Du hast nicht die Berechtigung Umfragen anzuschauen.';
$txt['cannot_poll_vote'] = 'Du hast nicht die Berechtigung in Umfragen abzustimmen.';
$txt['cannot_post_attachment'] = 'Du hast nicht die Berechtigung Dateianhänge zu speichern.';
$txt['cannot_post_new'] = 'Du hast nicht die Berechtigung neue Themen zu erstellen.';
$txt['cannot_post_reply_any'] = 'Du hast nicht die Berechtigung auf Themen zu antworten.';
$txt['cannot_post_reply_own'] = 'Du hast nicht die Berechtigung auf deine eigenen Beiträge zu antworten.';
$txt['cannot_profile_remove_own'] = 'Du hast nicht die Berechtigung dein eigenes Benutzerkonto zu löschen.';
$txt['cannot_profile_remove_any'] = 'Du hast nicht die Berechtigung das Benutzerkonto anderer Mitglieder zu löschen.';
$txt['cannot_profile_extra_any'] = 'Du hast nicht die Berechtigung das Profil zu editieren.';
$txt['cannot_profile_identity_any'] = 'Du hast nicht die Berechtigung Kontoeinstellungen zu editieren.';
$txt['cannot_profile_title_any'] = 'Du hast nicht die Berechtigung die persönlichen Titel zu ändern.';
$txt['cannot_profile_extra_own'] = 'Du hast nicht die Berechtigung deine Profildaten zu editieren.';
$txt['cannot_profile_identity_own'] = 'Du hast nicht die Berechtigung deine Identität nicht ändern.';
$txt['cannot_profile_title_own'] = 'Du hast nicht die Berechtigung deinen persönlichen Titel zu ändern.';
$txt['cannot_profile_server_avatar'] = 'Du hast nicht die Berechtigung ein Benutzerbild zu verwenden.';
$txt['cannot_profile_upload_avatar'] = 'Du hast nicht die Berechtigung ein Benutzerbild hochzuladen.';
$txt['cannot_profile_remote_avatar'] = 'Du hast nicht die Berechtigung ein externes Benutzerbild zu verwenden.';
$txt['cannot_profile_view_own'] = 'Du hast nicht die Berechtigung dein Profil anzuschauen.';
$txt['cannot_profile_view_any'] = 'Du hast nicht die Berechtigung Profile anzuschauen.';
$txt['cannot_delete_own'] = 'Du hast nicht die Berechtigung deine Beiträge zu löschen.';
$txt['cannot_delete_replies'] = 'Du hast nicht die Berechtigung Beiträge zu löschen, obwohl es Antworten auf deine Beitrag sind.';
$txt['cannot_delete_any'] = 'Du hast nicht die Berechtigung Beiträge zu löschen.';
$txt['cannot_report_any'] = 'Du hast nicht die Berechtigung Beiträge zu melden.';
$txt['cannot_search_posts'] = 'Du hast nicht die Berechtigung in diesem Forum Beiträge zu suchen.';
$txt['cannot_send_mail'] = 'Du hast nicht die Berechtigung E-Mails an alle zu senden.';
$txt['cannot_issue_warning'] = 'Du hast nicht die Berechtigung Verwarnung zu erteilen.';
$txt['cannot_send_topic'] = 'Du hast nicht die Berechtigung Themen zu senden.';
$txt['cannot_split_any'] = 'Du hast nicht die Berechtigung Themen zu teilen.';
$txt['cannot_view_attachments'] = 'Du hast nicht die Berechtigung Dateianhänge herunterzuladen oder anzusehen.';
$txt['cannot_view_mlist'] = 'Du hast nicht die Berechtigung die Mitgliederliste anzuschauen.';
$txt['cannot_view_stats'] = 'Du hast nicht die Berechtigung die Statistiken des Forums anzuschauen.';
$txt['cannot_who_view'] = 'Du hast nicht die Berechtigung die \'Wer ist online\' Liste anzuschauen.';

$txt['no_theme'] = 'Das Theme existiert nicht.';
$txt['theme_dir_wrong'] = 'Das Standard-Themeverzeichnis ist falsch. Bitte korrigiere es, indem Du auf diesen Text klicken.';
$txt['registration_disabled'] = 'Die Registrierung ist momentan deaktiviert.';
$txt['registration_no_secret_question'] = 'Es ist keine geheime Frage für dieses Mitglied gespeichert.';
$txt['poll_range_error'] = 'Die Umfrage muss für mehr wie 0 Tage laufen.';
$txt['delFirstPost'] = 'Du darfst nicht den ersten Beitrag eines Themas löschen.<p>Wenn Du dieses Thema löschen möchtest, klicke auf den "Thema löschen" Button oder frage einen Moderator/Administrator, dies für dich zu tun.</p>';
$txt['parent_error'] = 'Board kann nicht erstellt werden!';
$txt['login_cookie_error'] = 'Du kannst dich nicht einloggen. Bitte überprüfe die Cookie-Einstellungen.';
$txt['incorrect_answer'] = 'Du hast deine Frage nicht richtig beantwortet. Bitte gehe zurück und versuche es nochmal oder gehe zwei Schritte zurück und lasse dir ein neues Passwort schicken.';
$txt['no_mods'] = 'Keine Moderatoren gefunden!';
$txt['parent_not_found'] = 'Boardstruktur kaputt: Übergeordnetes Board kann nicht gefunden werden';
$txt['modify_post_time_passed'] = 'Du kannst diesen Beitrag nicht editieren, da das Zeitlimit abgelaufen ist.';

$txt['calendar_off'] = 'Du kannst den Kalender nicht aufrufen, weil er deaktiviert ist.';
$txt['invalid_month'] = 'Ungültiger Monatswert.';
$txt['invalid_year'] = 'Ungültiger Jahreswert.';
$txt['invalid_day'] = 'Ungültiger Tageswert.';
$txt['event_month_missing'] = 'Monatsangabe fehlt.';
$txt['event_year_missing'] = 'Jahresangabe fehlt.';
$txt['event_day_missing'] = 'Tagesangabe fehlt.';
$txt['event_title_missing'] = 'Ereignistitel fehlt.';
$txt['invalid_date'] = 'Ungültiges Datum.';
$txt['no_event_title'] = 'Ereignistitel wurde nicht angegeben.';
$txt['missing_event_id'] = 'Ereignis ID fehlt.';
$txt['cant_edit_event'] = 'Du hast keine Berechtigung das Ereignis zu editieren.';
$txt['missing_board_id'] = 'Board ID fehlt.';
$txt['missing_topic_id'] = 'Thema ID fehlt.';
$txt['topic_doesnt_exist'] = 'Thema existiert nicht.';
$txt['not_your_topic'] = 'Du hast das Thema nicht erstellt.';
$txt['board_doesnt_exist'] = 'Das Board existiert nicht.';
$txt['no_span'] = 'Die \'mehrere Tage\'-Funktion ist nicht aktiviert.';
$txt['invalid_days_numb'] = 'Die Anzahl der Tage ist ungültig.';

$txt['moveto_noboards'] = 'Es sind keine Boards vorhanden, wohin das Thema verschoben werden kann!';

$txt['already_activated'] = 'Dein Benutzerkonto wurde schon aktiviert.';
$txt['still_awaiting_approval'] = 'Dein Benutzerkonto wartet noch auf die Genehmigung des Administrators.';

$txt['invalid_email'] = 'Ungültige E-Mail-Adresse/E-Mail-Adressenbereich.<br />Beispiel einer gültigen E-Mail-Adresse: evil.user@badsite.com.<br />Beispiel eines gültigen E-Mail-Adressenbereichs: *@*.badsite.com';
$txt['invalid_expiration_date'] = 'Ablaufdatum ist ungültig';
$txt['invalid_hostname'] = 'Ungültiger Hostname/Hostnamensbereich.<br />Beispiel eines gültigen Hostnamen: proxy4.badhost.com<br />Beispiel eines gültigen Hostnamensbereich: *.badhost.com';
$txt['invalid_ip'] = 'Ungültige IP/IP-Bereich.<br />Beispiel einer gültigen IP-Adresse: 127.0.0.1<br />Beispiel eines gültigen IP-Bereichs: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'Falsche IP /IP-Adressbereich. <br /> Beispiele für eine korrekte IP: 127.0.0.1 <br /> Beispiel für einen korrekten IP-Adressbereich: 127.0.0.*';
$txt['invalid_username'] = 'Benutzername nicht gefunden!';
$txt['no_ban_admin'] = 'Du kannst keinen Administrator bannen - Du musst ihn erst degradieren!';
$txt['no_bantype_selected'] = 'Kein Bann-Typ gewählt.';
$txt['ban_not_found'] = 'Bann nicht gefunden!';
$txt['ban_unknown_restriction_type'] = 'Einschränkung nicht bekannt.';
$txt['ban_name_empty'] = 'Bitte gebe einen Namen für den Bann ein';
$txt['ban_name_exists'] = 'Der Name des Banns (%1$s) existiert schon. Bitte wähle einen anderen Namen.';
$txt['ban_trigger_already_exists'] = 'Dieser Bann Trigger (%1$s) ist bereits in %2$s vorhanden.';

$txt['recycle_no_valid_board'] = 'Kein gültiges Board für wiederherzustellende Themen gewählt!';

$txt['login_threshold_fail'] = 'Du hast keine Versuche mehr. Bitte versuchen Sie es später nochmal.';
$txt['login_threshold_brute_fail'] = 'Du hast die maximale Anzahl an Login-Versuchen verbraucht. Bitte warte mindestens 30 Sekunden bevor Du es erneut versuchst.';

$txt['who_off'] = 'Du kannst die \'Who is online\' Liste nicht anschauen, da sie deaktiviert ist.';

$txt['merge_create_topic_failed'] = 'Fehler beim Erstellen des neuen Themas.';
$txt['merge_need_more_topics'] = 'Zusammenführen von Themen benötigt mind. 2 Themen.';

$txt['postWaitTime_broken'] = 'Der letzte Beitrag von deiner IP-Adresse ist weniger als %1$d Sekunden her. Bitte versuche es später noch einmal.';
$txt['registerWaitTime_broken'] = 'Du hast sich erst vor %1$d Sekunden registriert!';
$txt['loginWaitTime_broken'] = 'Du musst %1$d Sekunden warten, bevor Du dich wieder einloggen kannst.';
$txt['pmWaitTime_broken'] = 'Die letzte Private Mitteilung von deiner IP-Adresse ist weniger als %1$d Sekunden her. Bitte versuche es später noch einmal.';
$txt['reporttmWaitTime_broken'] = 'Das letzte Thema von deiner IP-Adresse wurde vor weniger als %1$d Sekunden gemeldet. Bitte versuche es später noch einmal.';
$txt['sendtopcWaitTime_broken'] = 'Das letzte Thema von deiner IP-Adresse wurde vor weniger als %1$d Sekunden gesendet. Bitte versuche es später noch einmal.';
$txt['sendmailWaitTime_broken'] = 'Die letzte E-Mail von deiner IP-Adresse wurde vor weniger als %1$d Sekunden versendet. Bitte versuche es später noch einmal.';
$txt['searchWaitTime_broken'] = 'Deine letzte Suchanfrage war vor weniger als %1$d Sekunden. Bitte versuche es später noch einmal.';

$txt['email_missing_data'] = 'Du musst im Betreff- und im Textfeld etwas eingeben.';

$txt['topic_gone'] = 'Das Thema dass Du anschauen möchtest, existiert nicht oder ist für dich nicht einsehbar.';
$txt['theme_edit_missing'] = 'Die Datei, die Du editieren möchtest, kann nicht gefunden werden!';

$txt['attachments_no_write'] = 'Das Dateianhangsverzeichnis ist nicht beschreibbar. Dein Dateianhang oder Benutzerbild kann nicht gespeichert werden!';
$txt['attachments_limit_per_post'] = 'Du kannst nicht mehr als %1$d Anhänge zum Beitrag hinzufügen';

$txt['no_dump_database'] = 'Datensicherungen können nur von Administratoren gemacht werden!';
$txt['pm_not_yours'] = 'Die Private Mitteilung, die Du zitieren möchtest, ist nicht deine eigene bzw. exisitiert nicht. Bitte gehe zurück und versuche es nochmal.';
$txt['mangled_post'] = 'Fehlende Formulardaten - bitte gehe zurück und versuche es nochmal.';
$txt['quoted_post_deleted'] = 'Der Beitrag, den Du zitieren möchtest, existiert nicht, wurde gelöscht oder ist für dich nicht mehr einsehbar.';
$txt['pm_too_many_per_hour'] = 'Du hast das Limit von %1$d Privaten Mitteilungen pro Stunde erreicht.';
$txt['labels_too_many'] = '%1$s Mitteilungen haben schon das Limit der Labels erreicht!';

$txt['register_only_once'] = 'Du darfst nicht mehrere Benutzerkonten zur gleichen Zeit für den gleichen Computer registrieren.';
$txt['admin_setting_coppa_require_contact'] = 'Du musst eine Postadresse oder Faxnummer eingeben, wenn die Genehmigung durch Eltern/Erziehungsberechtigte erfordert wird.';

$txt['error_long_name'] = 'Der Name, den Du verwenden, ist zu lang.';
$txt['error_no_name'] = 'Kein Name vorhanden.';
$txt['error_bad_name'] = 'Der Name kann nicht verwendet werden, weil er reserviert ist.';
$txt['error_no_email'] = 'Keine E-Mail-Adresse eingegeben.';
$txt['error_bad_email'] = 'Ungültige E-Mail-Adresse eingegeben.';
$txt['error_no_event'] = 'Kein Ereignistitel angegeben.';
$txt['error_no_subject'] = 'Kein Betreff angegeben.';
$txt['error_no_question'] = 'Frage wurde nicht angegeben.';
$txt['error_no_message'] = 'Textfeld wurde nicht ausgefüllt.';
$txt['error_long_message'] = 'Beitrag hat die max. Länge erreicht (%s Zeichen).';
$txt['error_no_comment'] = 'Das Kommentarfeld wurde nicht ausgefüllt.';
$txt['error_session_timeout'] = 'Deine Sitzung ist abgelaufen. Bitte sende deinen Beitrag erneut.';
$txt['error_no_to'] = 'Kein Empfänger angegeben.';
$txt['error_bad_to'] = 'Ein oder mehrere \'An\'-Empfänger können nicht gefunden werden.';
$txt['error_bad_bcc'] = 'Ein oder mehrere \'Bcc\'-Empfänger können nicht gefunden werden.';
$txt['error_form_already_submitted'] = 'Du hast den Beitrag bereits gesendet! Vielleicht hast Du ihn aus Versehen zweimal abgesendet oder die Seite neu geladen.';
$txt['error_poll_few'] = 'Du musst mindestens 2 Möglichkeiten wählen!';
$txt['error_need_qr_verification'] = 'Bitte fülle die Überprüfungssektion unten aus um deinen Beitrag abzuschließen.';
$txt['error_wrong_verification_code'] = 'Die Buchstaben stimmen nicht mit denen im Bild überein.';
$txt['error_wrong_verification_answer'] = 'Du hast die Verifizierungsfrage nicht korrekt beantwortet.';
$txt['error_need_verification_code'] = 'Bitte gebe den Verifizierungscode ein, um zu den Resultaten zu gelangen.';
$txt['error_bad_file'] = 'Die ausgewählte Datei konnte nicht geöffnet werden: %1$s';
$txt['error_bad_line'] = 'Die angegebene Zeile ist ungültig.';

$txt['smiley_not_found'] = 'Smiley nicht gefunden.';
$txt['smiley_has_no_code'] = 'Für diesen Smiley wurde kein Code gefunden.';
$txt['smiley_has_no_filename'] = 'Für diesen Smiley wurde kein Dateiname gefunden.';
$txt['smiley_not_unique'] = 'Ein Smiley mit diesem Code existiert bereits.';
$txt['smiley_set_already_exists'] = 'Ein Smiley-Set mit dieser URL existiert bereits.';
$txt['smiley_set_not_found'] = 'Smiley-Set nicht gefunden.';
$txt['smiley_set_path_already_used'] = 'Die URL von diesem Smiley-Set wird bereits von einem anderen Set benutzt.';
$txt['smiley_set_unable_to_import'] = 'Smiley-Set kann nicht importiert werden. Das Verzeichnis ist ungültig oder es kann nicht darauf zugegriffen werden.';

$txt['smileys_upload_error'] = 'Datei konnte nicht hochgeladen werden.';
$txt['smileys_upload_error_blank'] = 'Alle Smiley-Sets müssen mind. ein Bild haben!';
$txt['smileys_upload_error_name'] = 'Alle Smileys müssen den gleichen Dateinamen haben!';
$txt['smileys_upload_error_illegal'] = 'Ungültiger Typ.';

$txt['search_invalid_weights'] = 'Die Gewichtungen der Suchergebnisse sind nicht richtig eingestellt. Mindestens ein Wert sollte nicht auf "Null" eingestellt sein. Bitte informiere den Administrator.';
$txt['unable_to_create_temporary'] = 'Die Suche konnte keine temporären Tabellen erstellen. Bitte versuche es nochmal.';

$txt['package_no_file'] = 'Die Datei konnte nicht gefunden werden!';
$txt['packageget_unable'] = 'Der Server wurde nicht gefunden. Bitte benutze stattdessen <a href="%1$s" target="_blank">diesen Link</a>.';
$txt['not_on_simplemachines'] = 'Pakete können nur vom simplemachines.org Server runtergeladen werden.';
$txt['package_cant_uninstall'] = 'Dieses Paket wurde noch nie installiert oder schon deinstalliert. Deshalb kannst Du es nicht deinstallieren.';
$txt['package_cant_download'] = 'Du kannst keine Pakete herunterladen bzw. installieren, da das Paket-Verzeichnis oder enthaltene Dateien nicht überschreibbar sind!';
$txt['package_upload_error_nofile'] = 'Du hast kein Paket zum Hochladen ausgewählt.';
$txt['package_upload_error_failed'] = 'Konnte das Paket nicht hochladen. Bitte prüfe die Ordner-Rechte.';
$txt['package_upload_error_exists'] = 'Die Datei, die Du hochladen möchtest, exisitiert schon auf dem Server. Bitte lösche diese zuerst und versuche es erneut.';
$txt['package_upload_error_supports'] = 'Der Paketmanager erlaubt momentan nur folgende Dateitypen: %1$s.';
$txt['package_upload_error_broken'] = 'Das Hochladen des Pakets ist aufgrund folgenden Fehlers fehlgeschlagen:<br />"%1$s"';

$txt['package_get_error_not_found'] = 'Das Paket, dass Du versuchst zu installieren konnte nicht gefunden werden. Vielleicht möchtest du das Paket manuell in dein Packages Verzeichnis hochladen.';
$txt['package_get_error_missing_xml'] = 'Das Paket das Du versuchst zu installieren hat keine package-info.xml in dessen Hauptverzeichnis.';
$txt['package_get_error_is_zero'] = 'Auch wenn das Paket auf den Server heruntergeladen wurde scheint es leer zu sein. Bitte überprüfe dass der Packages Ordner und das "temp" Unterverzeichnis beschreibbar ist. Sollte dieses Problem weiterhin bestehen, versuche das Paket auf deinem eigenen Rechner zu entpacken und in ein neues Unterverzeichnis in das Package Verzeichnis hochzuladen. Wenn das Paket zum Beispiel shout.tar.gt heißt sollten Du:<br/>1) Das Paket auf deinen PC herunterladen und entpacken.<br/>2) Mit einem FTP Programm ein neues Verzeichnis im "Packages" Ordner erstellen und dieses, in unserem Beispiel, "shout" nennen.<br/>3) Lade alle entpackten Dateien in dieses Verzeichnis.<br/>4) Gehe zurück zum Paket Manager und prüfe ob das Paket automatisch gefunden wurde (dies sollte der Fall sein).';
$txt['package_get_error_packageinfo_corrupt'] = 'Es konnte keine gültige Information in der package-info.xml Datei des Paketes gefunden werden. Die Modifikation könnte fehlerhaft sein oder das Paket ist fehlerhaft.';

$txt['no_membergroup_selected'] = 'Keine Mitgliedergruppe gewählt.';
$txt['membergroup_does_not_exist'] = 'Die Mitgliedergruppe existiert nicht oder ist ungültig.';

$txt['at_least_one_admin'] = 'Es muss mindestens ein Administrator im Forum exisitieren!';

$txt['error_functionality_not_windows'] = 'Diese Funktion steht momentan auf Windows Betriebssystemen nicht zur Verfügung.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Dateianhang nicht gefunden.';

$txt['error_no_boards_selected'] = 'Kein gültiges Board ausgewählt!';
$txt['error_invalid_search_string'] = 'Du hast keinen Suchbegriff eingegeben!';
$txt['error_invalid_search_string_blacklist'] = 'Deine Suchanfrage enthielt zu triviale Wörter. Bitte versuche es mit einem anderen Suchtext erneut.';
$txt['error_search_string_small_words'] = 'Jedes Wort muss aus mindestens zwei Buchstaben bestehen.';
$txt['error_query_not_specific_enough'] = 'Deine Suchanfrage ergab keine Ergebnisse.';
$txt['error_no_messages_in_time_frame'] = 'Keine Beiträge im gewählten Zeitrahmen gefunden';
$txt['error_no_labels_selected'] = 'Keine Labels ausgewählt!';
$txt['error_no_search_daemon'] = 'Auf das Suchprogramm konnte nicht zugegriffen werden';

$txt['profile_errors_occurred'] = 'Die folgenden Fehler sind während des Speicherns des Profils aufgetreten';
$txt['profile_error_bad_offset'] = 'Die Zeitverschiebung ist außerhalb des erlaubten Bereichs';
$txt['profile_error_no_name'] = 'Das Namensfeld wurde nicht ausgefüllt';
$txt['profile_error_name_taken'] = 'Der ausgewählte Benutzername / Anzeigename existiert schon';
$txt['profile_error_name_too_long'] = 'Der ausgewählte Name ist zu lang. Er sollte nicht länger als 60 Zeichen sein.';
$txt['profile_error_no_email'] = 'Das E-Mail Feld wurde nicht ausgefüllt';
$txt['profile_error_bad_email'] = 'Du hast keine gültige E-Mail-Adresse eingegeben';
$txt['profile_error_email_taken'] = 'Ein anderer Benutzer hat sich schon mit dieser E-Mail-Adresse angemeldet';
$txt['profile_error_no_password'] = 'Du hast dein Passwort nicht eingegeben';
$txt['profile_error_bad_new_password'] = 'Die neuen Passwörter stimmen nicht überein';
$txt['profile_error_bad_password'] = 'Das eingegebene Passwort ist nicht korrekt';
$txt['profile_error_bad_avatar'] = 'Das ausgewählte Benutzerbild ist zu groß';
$txt['profile_error_password_short'] = 'Dein Passwort muss mindestens ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' Zeichen enthalten.';
$txt['profile_error_password_restricted_words'] = 'Dein Passwort darf nicht deinen Benutzernamen, deine E-Mail-Adresse oder andere häufig benutzte Wörter enthalten.';
$txt['profile_error_password_chars'] = 'Dein Passwort muss Klein- und Großbuchstaben sowie Zahlen enthalten.';
$txt['profile_error_already_requested_group'] = 'Du hast bereits eine Anfrage für diese Gruppe!';
$txt['profile_error_openid_in_use'] = 'Ein anderer Benutzer verwendet diese OpenID URL bereits';

$txt['mysql_error_space'] = ' - kontrolliere den Speicherplatz für die Datenbank oder kontaktiere den Server Administrator.';

$txt['icon_not_found'] = 'Das Symbol konnte nicht im Standard-Theme gefunden werden - stelle sicher, dass es hochgeladen ist und versuche es erneut.';
$txt['icon_after_itself'] = 'Das Symbol kann nicht hinter sich selbst positioniert werden!';
$txt['icon_name_too_long'] = 'Die Dateinamen von Symbolen dürfen nicht mehr als 16 Zeichen haben';

$txt['name_censored'] = 'Der Name, den Du benutzen möchtest - %1$s - enthält Wörter bzw. Buchstabenkombinationen, welche zensiert werden. Bitte gib einen anderen Namen ein.';

$txt['poll_already_exists'] = 'Einem Thema kann nur eine Umfrage zugeordnet sein!';
$txt['poll_not_found'] = 'Diesem Thema ist keine Umfrage zugeordnet!';

$txt['error_while_adding_poll'] = 'Die folgenden Fehler sind aufgetreten, während die Umfrage hinzugefügt worden ist';
$txt['error_while_editing_poll'] = 'Die folgenden Fehler sind aufgetreten, während die Umfrage editiert worden ist';

$txt['loadavg_search_disabled'] = 'Aufgrund der hohen Auslastung des Servers wurde die Suchfunktion deaktiviert.';
$txt['loadavg_generic_disabled'] = 'Aufgrund der hohen Auslastung des Servers ist diese Funktion momentan nicht verfügbar.';
$txt['loadavg_allunread_disabled'] = 'Aufgrund der hohen Auslastung des Servers konnten nicht alle ungelesenen Themen gefunden werden.';
$txt['loadavg_unreadreplies_disabled'] = 'Die Auslastung des Servers ist momentan zu hoch. Bitte versuche es später nochmal.';
$txt['loadavg_show_posts_disabled'] = 'Aufgrund der hohen Auslastung des Servers konnten die Benutzerbeiträge nicht geladen werden. Bitte versuche es später nochmal.';
$txt['loadavg_unread_disabled'] = 'Die Serverbelastung ist momentan zu hoch, um die ungelesenen Themen anzuzeigen.';

$txt['cannot_edit_permissions_inherited'] = 'Du kannst vererbte Berechtigungen nicht direkt verändern. Du musst entweder die übergeordneten Berechtigungen editieren oder die Berechtigungen der Mitgliedergruppe.';

$txt['mc_no_modreport_specified'] = 'Du musst den gewünschten Report auswählen.';
$txt['mc_no_modreport_found'] = 'Der gewünschte Report existiert nicht oder darf von dir nicht erstellt werden';

$txt['st_cannot_retrieve_file'] = 'Die Datei %1$s konnte nicht abgerufen werden.';
$txt['admin_file_not_found'] = 'Die angeforderte Datei konnte nicht geladen werden: %1$s.';

$txt['themes_none_selectable'] = 'Es muss mindestens ein Theme zur Auswahl stehen.';
$txt['themes_default_selectable'] = 'Das Standard-Theme muss zur Auswahl stehen.';
$txt['ignoreboards_disallowed'] = 'Die Option für das Ignorieren von Boards ist nicht aktiviert.';

$txt['mboards_delete_error'] = 'Keine Kategorie ausgewählt!';
$txt['mboards_delete_board_error'] = 'Kein Board ausgewählt!';

$txt['mboards_parent_own_child_error'] = 'Du kannst aus dem übergeordneten Board kein untergeordnetes erstellen.';
$txt['mboards_board_own_child_error'] = 'Du kannst das Board nicht auf sich selber kopieren.';

$txt['smileys_upload_error_notwritable'] = 'Die folgenden Smiley-Verzeichnisse sind nicht überschreibbar: %1$s';
$txt['smileys_upload_error_types'] = 'Bilder können nur die folgenden Endungen haben: %1$s.';

$txt['change_email_success'] = 'Deine E-Mail-Adresse hat sich geändert. Es wurde dir einen neue Aktivierungs E-Mail zugeschickt.';
$txt['resend_email_success'] = 'Eine neue Ankündigungs-E-Mail wurde erfolgreich versendet.';

$txt['custom_option_need_name'] = 'Die Profil-Option muss einen Namen erhalten!';
$txt['custom_option_not_unique'] = 'Der Name des Feldes ist nicht eindeutig!';

$txt['warning_no_reason'] = 'Du musst einen Grund für die Veränderung des Verwarnungslevels angeben.';
$txt['warning_notify_blank'] = 'Du hast das Senden einer Benachrichtigung ausgewählt, aber keinen Betreff/Text angegeben.';

$txt['cannot_connect_doc_site'] = 'Das Simple Machines Online Handbuch konnte nicht geladen werden. Bitte überprüfe die Serverkonfiguration, dass externe Verbindungen erlaubt werden und versuche es später noch einmal.';

$txt['movetopic_no_reason'] = 'Du musst einen Grund für das Verschieben des Themas angeben, oder die Option eines Weiterleitungs-Themas deaktivieren.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'Der angeforderte Identifizierungsserver hat nicht die richtigen Informationen geliefert.';
$txt['openid_return_no_mode'] = 'Der Identitätsprovider hat nicht im OpenID-Modus geantwortet.';
$txt['openid_not_resolved'] = 'Der Identitätsprovider konnte deine Anfrage nicht genehmigen.';
$txt['openid_no_assoc'] = 'Die angeforderte Zuordnung konnte mit dem Identitätsprovider nicht gefunden werden.';
$txt['openid_sig_invalid'] = 'Die Signatur des Identitätsproviders ist ungültig.';
$txt['openid_load_data'] = 'Die Daten konnten nicht geladen werden. Bitte versuche es nochmal.';
$txt['openid_not_verified'] = 'Die eingegebene OpenID-Adresse ist noch nicht verifiziert worden. Bitte logge dich ein um sie zu verifizieren.';

$txt['error_custom_field_too_long'] = 'Das "%1$s"-Feld kann nicht mehr wie %2$d Zeichen lang sein.';
$txt['error_custom_field_invalid_email'] = 'Das "%1$s" Feld muss eine gültige E-Mail-Adresse enthalten.';
$txt['error_custom_field_not_number'] = 'Das "%1$s" Feld muss nummerisch sein.';
$txt['error_custom_field_inproper_format'] = 'Das "%1$s" Feld hat ein ungültiges Format.';
$txt['error_custom_field_empty'] = 'Das "%1$s" Feld darf nicht leer sein.';

$txt['email_no_template'] = 'Das E-Mail Template "%1$s" konnte nicht gefunden werden.';

$txt['search_api_missing'] = 'Die Such-API konnte nicht gefunden werden! Bitte kontaktiere den Administrator mit der Bitte zu prüfen, ob die richtigen Dateien hochgeladen wurden.';
$txt['search_api_not_compatible'] = 'Die gewählte Such-API des Forums ist nicht mehr aktuell - es wird die Standard-Suche verwendet. Bitte prüfe die Datei %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'Du kannst den ersten Beitrag eines Themas nicht wiederherstellen.';
$txt['parent_topic_missing'] = 'Das ursprüngliche Thema des wiederherzustellenden Beitrags wurde gelöscht.';
$txt['restored_disabled'] = 'Das Wiederherstellen von Themen wurde deaktiviert.';
$txt['restore_not_found'] = 'Die folgenden Nachrichten konnten nicht wiederhergestellt werden; das ursprüngliche Thema wurde eventuell gelöscht: <ul style="margin-top: 0px;">%1$s</ul>Du musst diese selbst verschieben.';

$txt['error_invalid_dir'] = 'Das angegebene Verzeichnis ist ungültig.';

$txt['error_sqlite_optimizing'] = 'SQLite optimiert gerade die Datenbank. So lange dies andauert kann auf das Forum nicht zugegriffen werden. Bitte versuche die Seite ab und zu neu zu laden.';

?>