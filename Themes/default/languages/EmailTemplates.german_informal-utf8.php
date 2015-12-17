<?php
// Version: 2.0; EmailTemplates

global $context, $birthdayEmails;

// Important! Before editing these language files please read the text at the top of index.english.php.
// Since all of these strings are being used in emails, numeric entities should be used.
// Do not translate anything that is between {}, they are used as replacement variables and MUST remain exactly how they are.
//   Additionally do not translate the @additioinal_parmas: line or the variable names in the lines that follow it.  You may
//   translate the description of the variable.  Do not translate @description:, however you may translate the rest of that line.
// Do not use block comments in this file, they will have special meaning.
$txt['scheduled_approval_email_topic'] = 'Die folgenden Themen erwarten eine Genehmigung:';
$txt['scheduled_approval_email_msg'] = 'Die folgenden Beiträge erwarten eine Genehmigung:';
$txt['scheduled_approval_email_attach'] = 'Die folgenden Dateianhänge erwarten eine Genehmigung:';
$txt['scheduled_approval_email_event'] = 'Die folgenden Ereignisse erwarten eine Genehmigung:';

$txt['emails'] = array(
	'resend_activate_message' => array(
		/*
			@additional_params: resend_activate_message
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONCODE: The code needed to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'D bist jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!

Dein Benutzername ist "{USERNAME}". Wenn Du dein Passwort vergessen hast, kannst Du es unter folgenden Link zurücksetzen: {FORGOTPASSWORDLINK}

Bevor Du dich einloggen kannst, musst Du zuerst dein Konto aktivieren. Dazu folge bitte folgendem Link:

{ACTIVATIONLINK}

Solltest Du Probleme mit der Aktivierung haben, verwende bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und gib dort folgenden Code ein "{ACTIVATIONCODE}".

{REGARDS}',
	),

	'resend_pending_message' => array(
		/*
			@additional_params: resend_pending_message
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Deine Anfrage zur Registrierung im Forum {FORUMNAME} wurde gestellt, {REALNAME}.

Der Benutzername mit dem Du dich registriert hast ist {USERNAME}.

Bevor Du dich einloggen und das Forum benutzen kannst, wird deine Anfrage geprüft und genehmigt. Wenn dies geschehen ist, erhältst Du eine weitere E-Mail von dieser Adresse.

{REGARDS}',
	),
	'mc_group_approve' => array(
		/*
			@additional_params: mc_group_approve
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was accepted into.
			@description: The request to join a particular membergroup has been accepted.
		*/
		'subject' => 'Genehmigung der Gruppenmitgliedschaft',
		'body' => '{USERNAME},

Wir freuen uns dir mitteilen zu können, dass Deine Anfrage der Gruppe "{GROUPNAME}" im Forum {FORUMNAME} beizutreten akzeptiert wurde. Dein Benutzerkonto wurde um die neue Mitgliedergruppe ergänzt.

{REGARDS}',
	),
	'mc_group_reject' => array(
		/*
			@additional_params: mc_group_reject
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
			@description: The request to join a particular membergroup has been rejected.
		*/
		'subject' => 'Ablehnung der Gruppenmitgliedschaft',
		'body' => '{USERNAME},

Wir bedauern dir mitteilen zu müssen, dass Deine Anfrage der Gruppe "{GROUPNAME}" im Forum {FORUMNAME} beizutreten abgelehnt wurde.

{REGARDS}',
	),
	'mc_group_reject_reason' => array(
		/*
			@additional_params: mc_group_reject_reason
				USERNAME: The user name for the member receiving the email.
				GROUPNAME: The name of the membergroup that the user was rejected from.
				REASON: Reason for the rejection.
			@description: The request to join a particular membergroup has been rejected with a reason given.
		*/
		'subject' => 'Ablehnung der Gruppenmitgliedschaft',
		'body' => '{USERNAME},

Wir bedauern dir mitteilen zu müssen, dass Deine Anfrage der Gruppe "{GROUPNAME}" im Forum {FORUMNAME} beizutreten abgelehnt wurde.

Dies erfolgte aus folgenden Gründen: {REASON}

{REGARDS}',
	),
	'admin_approve_accept' => array(
		/*
			@additional_params: admin_approve_accept
				NAME: The display name of the member.
				USERNAME: The user name for the member receiving the email.
				PROFILELINK: The URL of the profile page.
				FORGOTPASSWORDLINK: The URL of the "forgot password" page.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Willkommen, {NAME}!


Dein Benutzerkonto wurde vom Administrator aktiviert. Du kannst dich jetzt einloggen und Beiträge schreiben. Dein Benutzername ist: {USERNAME}

Wenn Du dein Passwort vergessen hast, kannst Du es unter folgenden Link zurücksetzen: {FORGOTPASSWORDLINK}

{REGARDS}',
	),
	'admin_approve_activation' => array(
		/*
			@additional_params: admin_approve_activation
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Willkommen, {USERNAME}!

Dein Benutzerkonto im Forum {FORUMNAME} wurde vom Administrator genehmigt und muss jetzt aktiviert werden, bevor Du Beiträge schreiben kannst. Bitte benutze folgenden Link, um dein Benutzerkonto zu aktivieren:

{ACTIVATIONLINK}

Solltest Du Probleme mit der Aktivierung haben, verwende bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und gib dort folgenden Code ein "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_approve_reject' => array(
		/*
			@additional_params: admin_approve_reject
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Registrierung abgelehnt',
		'body' => '{USERNAME},

Deine Anfrage dem Forum {FORUMNAME} beizutreten wurde abgelehnt.

{REGARDS}',
	),
	'admin_approve_delete' => array(
		/*
			@additional_params: admin_approve_delete
				USERNAME: The user name for the member receiving the email.
			@description:
		*/
		'subject' => 'Profil gelöscht',
		'body' => '{USERNAME},

Dein Profil im Forum {FORUMNAME} wurde gelöscht. Dies ist eventuell passiert, weil Du dein Profil nie aktiviert hast. War dies der Fall, kannst Du dich jederzeit erneut registrieren.

{REGARDS}',
	),
	'admin_approve_remind' => array(
		/*
			@additional_params: admin_approve_remind
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Registrierungserinnerung',
		'body' => '{USERNAME},
Du hast dein Benutzerkonto im Forum {FORUMNAME} noch nicht aktiviert.

Bitte benutze folgenden Link, um dein Benutzerkonto zu aktivieren:
{ACTIVATIONLINK}

Solltest Du Probleme mit der Aktivierung haben, verwende bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und gib dort folgenden Code ein "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'admin_register_activate' => array(
		/*
			@additional_params:
				USERNAME: The user name for the member receiving the email.
				ACTIVATIONLINK: The url link to activate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The activation code.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Du bist jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert. Dein Benutzername lautet {USERNAME} und dein Passwort lautet {PASSWORD}.

Bevor Du dich einloggen kannst, musst Du zuerst dein Konto aktivieren. Dazu folge bitte folgendem Link:

{ACTIVATIONLINK}

Solltest Du Probleme mit der Aktivierung haben, verwende bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und gib dort folgenden Code ein "{ACTIVATIONCODE}".
{REGARDS}',
	),
	'admin_register_immediate' => array(
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Du bist jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert. Dein Benutzername lautet {USERNAME} und dein Passwort lautet {PASSWORD}.

{REGARDS}',
	),
	'new_announcement' => array(
		/*
			@additional_params: new_announcement
				TOPICSUBJECT: The subject of the topic being announced.
				MESSAGE: The message body of the first post of the announced topic.
				TOPICLINK: A link to the topic being announced.
			@description:

		*/
		'subject' => 'Neue Ankündigung: {TOPICSUBJECT}',
		'body' => '{MESSAGE}

Um diese Ankündigungen abzubestellen, logge dich bitte im Forum ein und deaktivieren die Option "E-Mail Benachrichtigung bei neuen Ankündigungen schicken" in deinem Profil.

Du kannst die komplette Ankündigung unter folgendem Link lesen:
{TOPICLINK}

{REGARDS}',
	),
	'notify_boards_once_body' => array(
		/*
			@additional_params: notify_boards_once_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Neues Thema: {TOPICSUBJECT}',
		'body' => 'Ein neues Thema, \'{TOPICSUBJECT}\', wurde in einem Board erstellt, welches Du beobachtest.

Du findest es unter
{TOPICLINK}


Es könnten mehrere Themen erstellt worden sein, Du erhälst jedoch erst weitere Benachrichtigungen, wenn Du das Board besucht hast.

Der Titel des Themas lautet:
{MESSAGE}

Um die Benachrichtigungen über neue Themen aus diesem Board abzubestellen, klicke bitte auf folgenden Link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_once' => array(
		/*
			@additional_params: notify_boards_once
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Neues Thema: {TOPICSUBJECT}',
		'body' => 'Ein neues Thema, \'{TOPICSUBJECT}\', wurde in einem Board erstellt, welches Du beobachtest.

Du finden es unter
{TOPICLINK}

Es könnten mehrere Themen erstellt worden sein, Du erhälst jedoch erst weitere Benachrichtigungen, wenn Du das Board besucht hast.

Um die Benachrichtigungen über neue Themen aus diesem Board abzubestellen, klicke bitte auf folgenden Link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards_body' => array(
		/*
			@additional_params: notify_boards_body
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				MESSAGE: This is the body of the message.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Neues Thema: {TOPICSUBJECT}',
		'body' => 'Ein neues Thema, \'{TOPICSUBJECT}\', wurde in einem Board erstellt, welche Du beobachtest.

Du finden es unter
{TOPICLINK}

Der Inhalt des Themas lautet:
{MESSAGE}

Um die Benachrichtigungen über neue Themen aus diesem Board abzubestellen, klicke bitte auf folgenden Link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notify_boards' => array(
		/*
			@additional_params: notify_boards
				TOPICSUBJECT: The subject of the topic causing the notification
				TOPICLINK: A link to the topic.
				UNSUBSCRIBELINK: Link to unsubscribe from notifications.
			@description:
		*/
		'subject' => 'Neues Thema: {TOPICSUBJECT}',
		'body' => 'Ein neues Thema, \'{TOPICSUBJECT}\', wurde in einem Board erstellt, welche Du beobachtest.

Du finden es unter
{TOPICLINK}

Um die Benachrichtigungen über neue Themen aus diesem Board abzubestellen, klicke bitte auf folgenden Link:
{UNSUBSCRIBELINK}

{REGARDS}',
	),
	'request_membership' => array(
		/*
			@additional_params: request_membership
				RECPNAME: The name of the person recieving the email
				APPYNAME: The name of the person applying for group membership
				GROUPNAME: The name of the group being applied to.
				REASON: The reason given by the applicant for wanting to join the group.
				MODLINK: Link to the group moderation page.
			@description:
		*/
		'subject' => 'Neue Gruppenbeitrittsanfrage',
		'body' => '{RECPNAME},

{APPYNAME} hat eine Mitgliedschaft für die Gruppe "{GROUPNAME}" angefordert. Der Benutzer hat folgenden Grund angegeben:

{REASON}

Du kannst diese Anfrage genehmigen oder ablehnen, in dem Du den folgenden Link besuchst:

{MODLINK}

{REGARDS}',
	),
	'paid_subscription_reminder' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				PROFILE_LINK: Link to profile of member receiving email where can renew.
				SUBSCRIPTION: Name of the subscription.
				END_DATE: Date it expires.
			@description:
		*/
		'subject' => 'Das Abonnement im Forum {FORUMNAME} läuft ab',
		'body' => '{REALNAME},

Eines Deiner Abonnements im Forum {FORUMNAME} läuft in der nächsten Zeit ab. Wenn Du beim Bestellen des Abonnements die automatische Erneuerung aktiviert hast, musst Du nichts weiter tun - ansonsten musst Du das Abonnement nochmal durchführen, wenn Du dies möchtest. Lese die folgenden Details:

Name des Abonnements: {SUBSCRIPTION}
Läuft ab: {END_DATE}

Um Deine Abonnements zu ändern, besuche bitte folgenden Link:
{PROFILE_LINK}

{REGARDS}',
	),
	'activate_reactivate' => array(
		/*
			@additional_params: activate_reactivate
				ACTIVATIONLINK: The url link to reactivate the member's account.
				ACTIVATIONCODE: The code needed to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
			@description:
		*/
		'subject' => 'Willkommen zurück im Forum {FORUMNAME}',
		'body' => 'Um Deine E-Mail-Adresse zu überprüfen, wurde Dein Profil deaktiviert. Klicke den folgenden Link, um es wieder zu aktivieren:
{ACTIVATIONLINK}

Solltest Du Probleme mit der Aktivierung haben, verwende bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und gib dort folgenden Code ein "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'forgot_password' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				REMINDLINK: The link to reset the password.
				IP: The IP address of the requester.
				MEMBERNAME:
			@description:
		*/
		'subject' => 'Neues Passwort für das Forum {FORUMNAME}',
		'body' => 'Hallo {REALNAME},
Diese E-Mail wurde versandt, weil die Funktion \'Passwort vergessen\' auf dein Benutzerkonto angewendet worden ist. Um ein neues Passwort festzulegen, klicke bitte auf den folgenden Link:
{REMINDLINK}

IP: {IP}
Benutzername: {MEMBERNAME}

{REGARDS}',
	),
	'forgot_openid' => array(
		/*
			@additional_params: forgot_password
				REALNAME: The real (display) name of the person receiving the reminder.
				IP: The IP address of the requester.
				OPENID: The members OpenID identity.
			@description:
		*/
		'subject' => 'OpenID Erinnerung für {FORUMNAME}',
		'body' => 'Hallo {REALNAME},
Diese E-Mail wurde versandt, weil die \'OpenID vergessen\' Funktion auf dein Benutzerkonto angewendet wurde. Folgend die OpenID die mit ihrem Benutzerkonto verbunden ist:
{OPENID}

IP: {IP}
Benutzername: {MEMBERNAME}

{REGARDS}',
	),
	'scheduled_approval' => array(
		/*
			@additional_params: scheduled_approval
				REALNAME: The real (display) name of the person receiving the email.
				BODY: The generated body of the mail.
			@description:
		*/
		'subject' => 'Zusammenfassung der Beiträge, die eine Genehmigung im Forum {FORUMNAME} erwarten',
		'body' => '{REALNAME},

Diese E-Mail enthält eine Zusammenfassung der Beiträge, die im Forum {FORUMNAME} eine Genehmigung erwarten.

{BODY}

Bitte logge dich im Forum ein, um die einzelnen Beiträge zu prüfen.
{SCRIPTURL}

{REGARDS}',
	),
	'send_topic' => array(
		/*
			@additional_params: send_topic
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
			@description:
		*/
		'subject' => 'Thema: {TOPICSUBJECT} (Von: {SENDERNAME})',
		'body' => 'Hallo {RECPNAME},
Bitte schaue dir das Thema "{TOPICSUBJECT}" im Forum {FORUMNAME} an. Um dorthin zu gelangen, klicke bitte auf folgenden Link:

{TOPICLINK}

Vielen Dank,

{SENDERNAME}',
	),
	'send_topic_comment' => array(
		/*
			@additional_params: send_topic_comment
				TOPICSUBJECT: The subject of the topic being sent.
				SENDERNAME: The name of the member sending the topic.
				RECPNAME: The name of the person receiving the email.
				TOPICLINK: A link to the topic being sent.
				COMMENT: A comment left by the sender.
			@description:
		*/
		'subject' => 'Thema: {TOPICSUBJECT} (Von: {SENDERNAME})',
		'body' => 'Hallo {RECPNAME},
Bitte schaue dir das Thema "{TOPICSUBJECT}" im Forum {FORUMNAME} an. Um dorthin zu gelangen, klicke bitte auf folgenden Link:

{TOPICLINK}

Es wurde ebenfalls ein Kommentar dazu abgegeben:
{COMMENT}

Vielen Dank,

{SENDERNAME}',
	),
	'send_email' => array(
		/*
			@additional_params: send_email
				EMAILSUBJECT: The subject the user wants to email.
				EMAILBODY: The body the user wants to email.
				SENDERNAME: The name of the member sending the email.
				RECPNAME: The name of the person receiving the email.
			@description:
		*/
		'subject' => '{EMAILSUBJECT}',
		'body' => '{EMAILBODY}',
	),
	'report_to_moderator' => array(
		/*
			@additional_params: report_to_moderator
				TOPICSUBJECT: The subject of the reported post.
				POSTERNAME: The report post's author's name.
				REPORTERNAME: The name of the person reporting the post.
				TOPICLINK: The url of the post that is being reported.
				REPORTLINK: The url of the moderation center report.
				COMMENT: The comment left by the reporter, hopefully to explain why they are reporting the post.
			@description: When a user reports a post this email is sent out to moderators and admins of that board.
		*/
		'subject' => 'Gemeldeter Beitrag: {TOPICSUBJECT} von {POSTERNAME}',
		'body' => 'Der folgende Beitrag, "{TOPICSUBJECT}" von {POSTERNAME} wurde von {REPORTERNAME} in einem von Ihnen moderierten Board gemeldet:

Das Thema: {TOPICLINK}
Moderator-Center: {REPORTLINK}

Der Benutzer hat folgenden Kommentar dazu geschrieben:
{COMMENT}

{REGARDS}',
	),
	'change_password' => array(
		/*
			@additional_params: change_password
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
			@description:
		*/
		'subject' => 'Details zum neuen Passwort',
		'body' => 'Hallo, {USERNAME}!

Deine Daten zum Einloggen im Forum {FORUMNAME} wurden geändert und das Passwort zurückgesetzt. Im folgenden sind deine neuen Login-Daten aufgelistet.

Dein Benutzername ist "{USERNAME}" und dein Passwort ist "{PASSWORD}".

Du kannst diese Daten ändern, wenn Du nach dem Einloggen dein Profil editierst. Du kannst nach dem Einloggen auch folgenden Link besuchen:
{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				ACTIVATIONLINK: The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The code needed to reactivate the member's account.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Du bist jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!
Dein Benutzername ist {USERNAME}. Wenn Du dein Passwort vergessen hast, kannst Du es unter folgenden Link zurücksetzen: {FORGOTPASSWORDLINK}

Bevor Du dich einloggen kannst, musst Du zuerst dein Benutzerkonto aktivieren. Um dies zu tun, klicke bitte den folgenden Link:

{ACTIVATIONLINK}

Solltest Du Probleme mit der Aktivierung haben, verwende bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und gib dort folgenden Code ein "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'register_openid_activate' => array(
		/*
			@additional_params: register_activate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				ACTIVATIONLINK: The url link to reactivate the member's account.
				ACTIVATIONLINKWITHOUTCODE: The url to the page where the activation code can be entered.
				ACTIVATIONCODE: The code needed to reactivate the member's account.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Du bist jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!

Dein Benutzername ist {USERNAME}.
Du hast dich entschieden, dich mit der folgenden OpenID zu authentifizieren:
{OPENID}

Bevor Du dich einloggen kannst, musst Du zuerst dein Benutzerkonto aktivieren. Um dies zu tun, klicke bitte den folgenden Link:

{ACTIVATIONLINK}

Solltest Du Probleme mit der Aktivierung haben, verwende bitte diesen Link {ACTIVATIONLINKWITHOUTCODE} und gib dort folgenden Code ein "{ACTIVATIONCODE}".

{REGARDS}',
	),
	'register_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				COPPALINK: The url link to the coppa form.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Du bist jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!

Dein Benutzername ist {USERNAME} und das Passwort lautet {PASSWORD}. Wenn Du dein Passwort vergessen hast, kannst du es unter folgenden Link zurücksetzen: {FORGOTPASSWORDLINK}

Bevor du dich einloggen kannst, benötigt der Administrator das Einverstndnis deiner Eltern/Erziehungsberechtigten. Du kannst mehr Informationen unter dem folgenden Link lesen:

{COPPALINK}

{REGARDS}',
	),
	'register_openid_coppa' => array(
		/*
			@additional_params: register_coppa
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
				COPPALINK: The url link to the coppa form.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Du bist jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!

Dein Benutzername ist {USERNAME}.

Du hast dich entschieden dich mit der folgenden OpenID zu authentifizieren:
{OPENID}

Bevor du dich einloggen kannst, benötigt der Administrator das Einverstndnis deiner Eltern/Erziehungsberechtigten. Du kannst mehr Informationen unter dem folgenden Link lesen:

{COPPALINK}

{REGARDS}',
	),
	'register_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Du bist jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!

Dein Benutzername lautet {USERNAME}. Wenn Du dein Passwort vergessen hast, kannst Du es unter folgenden Link zurücksetzen: {FORGOTPASSWORDLINK}

{REGARDS}',
	),
	'register_openid_immediate' => array(
		/*
			@additional_params: register_immediate
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Du bist jetzt mit einem Benutzerkonto im Forum {FORUMNAME} registriert, {REALNAME}!

Dein Benutzername ist {USERNAME}.

Du hast entschieden dich mit der folgenden OpenID zu authentifizieren:
{OPENID}

Du kannst dein Profil aktualisieren, indem Du nach dem Einloggen die folgende Seite besuchen:

{SCRIPTURL}?action=profile

{REGARDS}',
	),
	'register_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				PASSWORD: The password for the member.
				FORGOTPASSWORDLINK: The url to the "forgot password" page.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Deine Registrierungsanfrage im Forum {FORUMNAME} haben wir erhalten, {REALNAME}.

Dein Benutzername, mit dem Du dich registriert hast, ist {USERNAME}. Wenn Du dein Passwort vergessen hast, kannst Du es unter folgenden Link zurücksetzen: {FORGOTPASSWORDLINK}

Bevor Du dich einloggen und das Forum benutzen kannst, muss deine Registrierung genehmigt werden. Sobald dies geschehen ist, erhältst Du eine weitere E-Mail von dieser Adresse.

{REGARDS}',
	),
	'register_openid_pending' => array(
		/*
			@additional_params: register_pending
				REALNAME: The display name for the member receiving the email.
				USERNAME: The user name for the member receiving the email.
				OPENID: The openID identity for the member.
			@description:
		*/
		'subject' => 'Willkommen im Forum {FORUMNAME}',
		'body' => 'Deine Registrierungsanfrage im Forum {FORUMNAME} haben wir erhalten, {REALNAME}.

Dein Benutzername, mit dem Du dich registriert hast, ist {USERNAME}.

Du hast entschieden dich mit der folgenden OpenID zu authentifizieren:
{OPENID}

Bevor Du dich einloggen und das Forum benutzen kannst, muss deine Registrierung genehmigt werden. Sobald dies geschehen ist, erhältst Du eine weitere E-Mail von dieser Adresse.

{REGARDS}',
	),
	'notification_reply' => array(
		/*
			@additional_params: notification_reply
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => 'Antwort im Thema: {TOPICSUBJECT}',
		'body' => 'In diesem Thema wurde eine Antwort von {POSTERNAME} geschrieben.

Lese die Antwort unter: {TOPICLINK}

Um die Benachrichtigungen von diesem Thema abzubestellen, klicke auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_reply_body' => array(
		/*
			@additional_params: notification_reply_body
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => 'Antwort im Thema: {TOPICSUBJECT}',
		'body' => 'In diesem Thema wurde eine Antwort von {POSTERNAME} geschrieben.

Lese die Antwort unter: {TOPICLINK}

Um die Benachrichtigungen von diesem Thema abzubestellen, klicke auf den folgenden Link: {UNSUBSCRIBELINK}

Der Text der Antwort lautet:
{MESSAGE}

{REGARDS}',
	),
	'notification_reply_once' => array(
		/*
			@additional_params: notification_reply_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
			@description:
		*/
		'subject' => 'Antwort im Thema: {TOPICSUBJECT}',
		'body' => 'In einem Thema das Du beobachtest wurde eine Antwort von {POSTERNAME} geschrieben.

Lese die Antwort unter: {TOPICLINK}

Um die Benachrichtigungen von diesem Thema abzubestellen, klicke auf den folgenden Link: {UNSUBSCRIBELINK}

Es könnten mehrere Anworten geschrieben worden sein, Du erhältst jedoch erst weitere Benachrichtigungen, wenn Du das Thema gelesen hast.

{REGARDS}',
	),
	'notification_reply_body_once' => array(
		/*
			@additional_params: notification_reply_body_once
				TOPICSUBJECT:
				POSTERNAME:
				TOPICLINK:
				UNSUBSCRIBELINK:
				MESSAGE:
			@description:
		*/
		'subject' => 'Antwort im Thema: {TOPICSUBJECT}',
		'body' => 'In einem Thema das Du beobachtest wurde eine Antwort von {POSTERNAME} geschrieben.

Lese die Antwort unter: {TOPICLINK}

Um die Benachrichtigungen von diesem Thema abzubestellen, klicke auf den folgenden Link: {UNSUBSCRIBELINK}

Der Text der Antwort lautet:
{MESSAGE}

Es könnten mehrere Anworten geschrieben worden sein, Du erhältst jedoch erst weitere Benachrichtigungen, wenn Du das Thema gelesen hast.

{REGARDS}',
	),
	'notification_sticky' => array(
		/*
			@additional_params: notification_sticky
			@description:
		*/
		'subject' => 'Thema fixiert: {TOPICSUBJECT}',
		'body' => 'Ein von dir beobachtetes Thema wurde von {POSTERNAME} fixiert.

Lese das Thema unter: {TOPICLINK}

Um die Benachrichtigung zu diesem Thema abzubestellen, klicke auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_lock' => array(
		/*
			@additional_params: notification_lock
			@description:
		*/
		'subject' => 'Thema geschlossen: {TOPICSUBJECT}',
		'body' => 'Ein von dir beobachtetes Thema wurde von {POSTERNAME} geschlossen.

Lese das Thema unter: {TOPICLINK}

Um die Benachrichtigung zu diesem Thema abzubestellen, klicke auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_unlock' => array(
		/*
			@additional_params: notification_unlock
			@description:
		*/
		'subject' => 'Thema geöffnet: {TOPICSUBJECT}',
		'body' => 'Ein von dir beobachtetes Thema wurde von {POSTERNAME} wieder geöffnet.

Lese das Thema unter: {TOPICLINK}

Um die Benachrichtigung zu diesem Thema abzubestellen, klicke auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_remove' => array(
		/*
			@additional_params: notification_remove
			@description:
		*/
		'subject' => 'Thema gelöscht: {TOPICSUBJECT}',
		'body' => 'Ein von dir beobachtetes Thema wurde von {POSTERNAME} gelöscht.

{REGARDS}',
	),
	'notification_move' => array(
		/*
			@additional_params: notification_move
			@description:
		*/
		'subject' => 'Thema verschoben: {TOPICSUBJECT}',
		'body' => 'Ein von dir beobachtetes Thema wurde von {POSTERNAME} in ein anderes Board verschoben.

Lese das Thema unter: {TOPICLINK}

Um die Benachrichtigung zu diesem Thema abzubestellen, klicke auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_merge' => array(
		/*
			@additional_params: notification_merged
			@description:
		*/
		'subject' => 'Thema zusammengeführt: {TOPICSUBJECT}',
		'body' => 'Ein von dir beobachtetes Thema wurde von {POSTERNAME} mit einem anderen Thema zusammengeführt.

Lese das neue, zusammengeführte Thema unter: {TOPICLINK}

Um die Benachrichtigung zu diesem Thema abzubestellen, klicke auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'notification_split' => array(
		/*
			@additional_params: notification_split
			@description:
		*/
		'subject' => 'Thema geteilt: {TOPICSUBJECT}',
		'body' => 'Ein von dir beobachtetes Thema wurde von {POSTERNAME} in zwei oder mehr Themen geteilt.

Lese das verbliebene Thema unter: {TOPICLINK}

Um die Benachrichtigung zu diesem Thema abzubestellen, klicke auf den folgenden Link: {UNSUBSCRIBELINK}

{REGARDS}',
	),
	'admin_notify' => array(
		/*
			@additional_params: admin_notify
				USERNAME:
				PROFILELINK:
			@description:
		*/
		'subject' => 'Ein neues Mitglied hat sich angemeldet',
		'body' => '{USERNAME} hat sich als neues Mitglied in Deinem Forum angemeldet. Klicke den folgenden Link, um das Profil zu betrachten.
{PROFILELINK}

{REGARDS}',
	),
	'admin_notify_approval' => array(
		/*
			@additional_params: admin_notify_approval
				USERNAME:
				PROFILELINK:
				APPROVALLINK:
			@description:
		*/
		'subject' => 'Ein neues Mitglied hat sich angemeldet',
		'body' => '{USERNAME} hat sich als neues Mitglied in Deinem Forum angemeldet. Klicke den folgenden Link, um das Profil zu betrachten.
{PROFILELINK}

Bevor dieses Mitglied Beiträge schreiben kann, muss das Profil zuerst genehmigt werden. Klicke den folgenden Link, um auf die Aktivierungsseite zu gelangen.
{APPROVALLINK}

{REGARDS}',
	),
	'admin_attachments_full' => array(
		/*
			@additional_params: admin_attachments_full
				REALNAME:
			@description:
		*/
		'subject' => 'Dringend! Das Anhänge-Verzeichnis ist fast voll',
		'body' => '{REALNAME},

Das Verzeichnis für Anhänge des Forums {FORUMNAME} ist fast voll. Bitte kontrolliere die Einstellungen, um das Problem zu beseitigen.

Wenn das Anhänge-Verzeichnis die max. Größe erreicht hat, können die Benutzer keine weiteren Dateianhänge oder Benutzerbilder hochladen (wenn aktiviert).

{REGARDS}',
	),
	'paid_subscription_refund' => array(
		/*
			@additional_params: paid_subscription_refund
				NAME: Subscription title.
				REALNAME: Recipients name
				REFUNDUSER: Username who took out the subscription.
				REFUNDNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => 'Zurückgezahltes Abonnement',
		'body' => '{REALNAME},

Ein Benutzer hat ein bezahltes Abonnement zurückerstattet bekommen. Hier sind weitere Details des Abonnements:

	Abonnement: {NAME}
	Benutzername: {REFUNDNAME} ({REFUNDUSER})
	Datum: {DATE}

Du kannst das Profil des Benutzers anschauen, in dem Du den folgenden Link anklickst:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_new' => array(
		/*
			@additional_params: paid_subscription_new
				NAME: Subscription title.
				REALNAME: Recipients name
				SUBEMAIL: Email address of the user who took out the subscription
				SUBUSER: Username who took out the subscription.
				SUBNAME: User's display name who took out the subscription.
				DATE: Today's date.
				PROFILELINK: Link to members profile.
			@description:
		*/
		'subject' => 'Neues bezahltes Abonnement',
		'body' => '{REALNAME},

Ein Benutzer hat ein neues Abonnement bestellt. Hier sind die Details zu der Bestellung:

	Abonnement: {NAME}
	Benutzername: {SUBNAME} ({SUBUSER})
	E-Mail-Adresse: {SUBEMAIL}
	Preis: {PRICE}
	Datum: {DATE}

Du kannst das Profil des Benutzers anschauen, in dem Du den folgenden Link anklickst:
{PROFILELINK}

{REGARDS}',
	),
	'paid_subscription_error' => array(
		/*
			@additional_params: paid_subscription_error
				ERROR: Error message.
				REALNAME: Recipients name
			@description:
		*/
		'subject' => 'Bezahltes-Abonnement-Fehler ist aufgetreten',
		'body' => '{REALNAME},

Der folgende Fehler trat während dem Verarbeiten einer bezahlten Abonnements auf
---------------------------------------------------------------
{ERROR}

{REGARDS}',
	),
);

/*
	@additional_params: happy_birthday
		REALNAME: The real (display) name of the person receiving the birthday message.
	@description: A message sent to members on their birthday.
*/
$birthdayEmails = array(
	'happy_birthday' => array(
		'subject' => 'Herzlichen Glückwunsch vom Forum {FORUMNAME}.',
		'body' => 'Hallo {REALNAME},

Wir vom Forum {FORUMNAME} wünschen dir alles Gute zum Geburtstag. Wir hoffen, dass dieser Tag und das folgende Jahr zu Deiner vollsten Zufriedenheit verläuft.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=2676">Thantos</a>, aus dem englischen übersetzt',
	),
	'karlbenson1' => array(
		'subject' => 'An Deinem Geburtstag...',
		'body' => 'Wir hätten dir eine Geburtstagskarte senden können. Wir hätten dir Blumen oder einen Kuchen schicken können.

Haben wir aber nicht.

Wir hätten dir auch eine dieser automatisch generierten Nachrichten schicken können, bei der noch nicht mal der Wortlaut NAME EINFÜGEN hätte ersetzt werden müssen.

Haben wir aber nicht.

Wir haben diesen Geburtstaggruß extra für Dich geschrieben.

Wir wünschen dir alles Gute zu Deinem Geburtstag.

{REGARDS}

//:: Diese Nachricht wurde automatisch generiert :://',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>, aus dem englischen übersetzt',
	),
	'nite0859' => array(
		'subject' => 'Herzlichen Glückwunsch!',
		'body' => 'Deine Freunde im Forum {FORUMNAME} würden gerne einen Moment deoner kostbaren Zeit stehlen, um Dir alles Gute zum Geburtstag zu wünschen, {REALNAME}. Wenn Du es noch nicht gemacht hast, besuche das Forum um anderen Benutzern die Möglichkeit zu geben, ein paar Grüße loszuwerden.

Auch wenn heute Dein Geburtstag ist, {REALNAME}, möchten wir dich daran erinnern, dass deine Mitgliedschaft in unserem Forum das größte Geschenk von allen war.

Herzliche Grüße,
Die Forumleitung von {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=46625">nite0859</a>, aus dem englischen übersetzt, aus dem englischen übersetzt',
	),
	'zwaldowski' => array(
		'subject' => 'Geburtstagsgrüße für {REALNAME}',
		'body' => 'Hallo {REALNAME},

ein weiteres Jahr in deinem Leben ist vorbei. Wir vom Forum {FORUMNAME} hoffen, dass es dir Spaß gemacht hat und wüschen dir für das kommende Jahr viel Glück.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=72038">zwaldowski</a>, aus dem englischen übersetzt',
	),
	'geezmo' => array(
		'subject' => 'Herzlichen Glückwunsch, {REALNAME}!',
		'body' => 'Weißt Du, wer heute Geburtstag hat, {REALNAME}?

Wir wissen es... DU!

Herzlichen Glückwunsch!

Du bist jetzt zwar ein Jahr älter, aber wir hoffen, dass Du auch glücklicher als letztes Jahr bist.

Wir wünschen Dir einen schönen Tag, {REALNAME}!

- Ihr Forenteam von {FORUMNAME}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=48671">geezmo</a>, aus dem englischen übersetzt',
	),
	'karlbenson2' => array(
		'subject' => 'Deine Geburtstagsglückwünsche',
		'body' => 'Wir hoffen, dass dieser Geburtstag der beste aller Zeiten ist, egal welches Wetter herrscht.
Wir wünschen Dir viele Geburtstagskuchen und viel Spaß - erzähle uns, was Du heute erlebt hast.

Bis nächstes Jahr, zur selben Zeit, am selben Ort.

{REGARDS}',
		'author' => '<a href="http://www.simplemachines.org/community/?action=profile;u=63186">karlbenson</a>, aus dem englischen übersetzt',
	),
);

?>