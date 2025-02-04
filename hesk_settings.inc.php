<?php
// Settings file for HESK 3.2.3
function getenv_string($name) {
    $value = getenv($name);

    if ($value !== false) {
        return $value;
    }

    return null;
}

function getenv_number($name) {
    $value = getenv($name);

    if ($value !== false) {
        return intval($value);
    }

    return null;
}

// ==> GENERAL

// --> General settings
$hesk_settings['site_title']=getenv_string('HESK_SITE_TITLE') ?? 'Website';
$hesk_settings['site_url']=getenv_string('HESK_SITE_URL') ?? 'http://www.example.com';
$hesk_settings['hesk_title']=getenv_string('HESK_HESK_TITLE') ?? 'Help Desk';
$hesk_settings['hesk_url']=getenv_string('HESK_HESK_URL') ?? 'http://www.example.com/helpdesk';
$hesk_settings['webmaster_mail']=getenv_string('HESK_WEBMASTER_MAIL') ?? 'support@example.com';
$hesk_settings['noreply_mail']=getenv_string('HESK_NOREPLY_MAIL') ?? 'support@example.com';
$hesk_settings['noreply_name']=getenv_string('HESK_NOREPLY_NAME') ?? 'Help Desk';
$hesk_settings['site_theme']=getenv_string('HESK_SITE_THEME') ?? 'hesk3';
$hesk_settings['admin_css']=0;
$hesk_settings['admin_css_url']='https://www.example.com/hesk-style.css';

// --> Language settings
$hesk_settings['can_sel_lang']=0;
$hesk_settings['language']='English';
$hesk_settings['languages']=array(
    'English' => array('folder'=>'en','hr'=>'------ Reply above this line ------'),
);

// --> Database settings
$hesk_settings['db_host']=getenv_string('HESK_DB_HOST') ?? 'localhost';
$hesk_settings['db_name']=getenv_string('HESK_DB_NAME') ?? 'hesk';
$hesk_settings['db_user']=getenv_string('HESK_DB_USER') ?? 'test';
$hesk_settings['db_pass']=getenv_string('HESK_DB_PASS') ?? 'test';
$hesk_settings['db_pfix']=getenv_string('HESK_DB_PFIX') ?? 'hesk_';


// ==> HELP DESK

// --> Help desk settings
$hesk_settings['admin_dir']='admin';
$hesk_settings['attach_dir']='attachments';
$hesk_settings['cache_dir']='cache';
$hesk_settings['max_listings']=20;
$hesk_settings['print_font_size']=12;
$hesk_settings['autoclose']=0;
$hesk_settings['max_open']=0;
$hesk_settings['due_soon']=7;
$hesk_settings['new_top']=0;
$hesk_settings['reply_top']=0;
$hesk_settings['hide_replies']=0;
$hesk_settings['limit_width']=800;

// --> Features
$hesk_settings['autologin']=1;
$hesk_settings['autoassign']=1;
$hesk_settings['require_email']=1;
$hesk_settings['require_owner']=0;
$hesk_settings['require_subject']=1;
$hesk_settings['require_message']=1;
$hesk_settings['custclose']=1;
$hesk_settings['custopen']=1;
$hesk_settings['rating']=1;
$hesk_settings['cust_urgency']=1;
$hesk_settings['sequential']=1;
$hesk_settings['time_worked']=1;
$hesk_settings['spam_notice']=1;
$hesk_settings['list_users']=0;
$hesk_settings['debug_mode']=0;
$hesk_settings['short_link']=0;
$hesk_settings['select_cat']=0;
$hesk_settings['select_pri']=0;
$hesk_settings['cat_show_select']=15;
$hesk_settings['staff_ticket_formatting']=0;

// --> SPAM Prevention
$hesk_settings['secimg_use']=getenv_number('HESK_SECIMG_USE') ?? 1;
$hesk_settings['secimg_sum']=getenv_string('HESK_SECIMG_SUM') ?? '13N4BRS4WW';
$hesk_settings['recaptcha_use']=getenv_number('HESK_RECAPTCHA_USE') ?? 0;
$hesk_settings['recaptcha_public_key']=getenv_string('HESK_RECAPTCHA_PUBLIC_KEY') ?? '';
$hesk_settings['recaptcha_private_key']=getenv_string('HESK_RECAPTCHA_PRIVATE_KEY') ?? '';
$hesk_settings['question_use']=0;
$hesk_settings['question_ask']='Type <i>PB6YM</i> here to fight SPAM:';
$hesk_settings['question_ans']='PB6YM';

// --> Security
$hesk_settings['attempt_limit']=6;
$hesk_settings['attempt_banmin']=60;
$hesk_settings['flood']=3;
$hesk_settings['reset_pass']=1;
$hesk_settings['email_view_ticket']=1;
$hesk_settings['x_frame_opt']=1;
$hesk_settings['samesite']='Lax';
$hesk_settings['force_ssl']=0;
$hesk_settings['url_key']='';

// --> Attachments
$hesk_settings['attachments']=array (
    'use' => 1,
    'max_number' => 2,
    'max_size' => 2097152,
    'allowed_types' => array('.gif','.jpg','.png','.zip','.rar','.csv','.doc','.docx','.xls','.xlsx','.txt','.pdf')
);


// ==> KNOWLEDGEBASE

// --> Knowledgebase settings
$hesk_settings['kb_enable']=1;
$hesk_settings['kb_wysiwyg']=1;
$hesk_settings['kb_search']=2;
$hesk_settings['kb_search_limit']=10;
$hesk_settings['kb_views']=0;
$hesk_settings['kb_date']=0;
$hesk_settings['kb_recommendanswers']=1;
$hesk_settings['kb_rating']=1;
$hesk_settings['kb_substrart']=200;
$hesk_settings['kb_cols']=2;
$hesk_settings['kb_numshow']=3;
$hesk_settings['kb_popart']=6;
$hesk_settings['kb_latest']=6;
$hesk_settings['kb_index_popart']=6;
$hesk_settings['kb_index_latest']=0;
$hesk_settings['kb_related']=5;


// ==> EMAIL

// --> Email sending
$hesk_settings['smtp']=getenv_number('HESK_SMTP') ?? 0;
$hesk_settings['smtp_host_name']=getenv_string('HESK_SMTP_HOST_NAME') ?? 'mail.example.com';
$hesk_settings['smtp_host_port']=getenv_number('HESK_SMTP_HOST_PORT') ?? 25;
$hesk_settings['smtp_timeout']=getenv_number('HESK_SMTP_TIMEOUT') ?? 20;
$hesk_settings['smtp_ssl']=getenv_number('HESK_SMTP_SSL') ?? 0;
$hesk_settings['smtp_tls']=getenv_number('HESK_SMTP_TLS') ?? 0;
$hesk_settings['smtp_user']=getenv_string('HESK_SMTP_USER') ?? '';
$hesk_settings['smtp_password']=getenv_string('HESK_SMTP_PASSWORD') ?? '';

// --> Email piping
$hesk_settings['email_piping']=0;

// --> POP3 Fetching
$hesk_settings['pop3']=0;
$hesk_settings['pop3_job_wait']=15;
$hesk_settings['pop3_host_name']='mail.example.com';
$hesk_settings['pop3_host_port']=110;
$hesk_settings['pop3_tls']=0;
$hesk_settings['pop3_keep']=0;
$hesk_settings['pop3_user']='';
$hesk_settings['pop3_password']='';

// --> IMAP Fetching
$hesk_settings['imap']=getenv_number('HESK_IMAP') ?? 0;
$hesk_settings['imap_job_wait']=getenv_number('HESK_IMAP_JOB_WAIT') ?? 15;
$hesk_settings['imap_host_name']=getenv_string('HESK_IMAP_HOST_NAME') ?? 'mail.example.com';
$hesk_settings['imap_host_port']=getenv_number('HESK_IMAP_HOST_PORT') ?? 993;
$hesk_settings['imap_enc']=getenv_string('HESK_IMAP_ENC') ?? 'ssl';
$hesk_settings['imap_noval_cert']=getenv_number('HESK_IMAP_NOVAL_CERT') ?? 0;
$hesk_settings['imap_keep']=getenv_number('HESK_IMAP_KEEP') ?? 0;
$hesk_settings['imap_user']=getenv_string('HESK_IMAP_USER') ?? '';
$hesk_settings['imap_password']=getenv_string('HESK_IMAP_PASSWORD') ?? '';

// --> Email loops
$hesk_settings['loop_hits']=5;
$hesk_settings['loop_time']=300;

// --> Detect email typos
$hesk_settings['detect_typos']=1;
$hesk_settings['email_providers']=array('aim.com','aol.co.uk','aol.com','att.net','bellsouth.net','blueyonder.co.uk','bt.com','btinternet.com','btopenworld.com','charter.net','comcast.net','cox.net','earthlink.net','email.com','facebook.com','fastmail.fm','free.fr','freeserve.co.uk','gmail.com','gmx.at','gmx.ch','gmx.com','gmx.de','gmx.fr','gmx.net','gmx.us','googlemail.com','hotmail.be','hotmail.co.uk','hotmail.com','hotmail.com.ar','hotmail.com.mx','hotmail.de','hotmail.es','hotmail.fr','hushmail.com','icloud.com','inbox.com','laposte.net','lavabit.com','list.ru','live.be','live.co.uk','live.com','live.com.ar','live.com.mx','live.de','live.fr','love.com','lycos.com','mac.com','mail.com','mail.ru','me.com','msn.com','nate.com','naver.com','neuf.fr','ntlworld.com','o2.co.uk','online.de','orange.fr','orange.net','outlook.com','pobox.com','prodigy.net.mx','qq.com','rambler.ru','rocketmail.com','safe-mail.net','sbcglobal.net','t-online.de','talktalk.co.uk','tiscali.co.uk','verizon.net','virgin.net','virginmedia.com','wanadoo.co.uk','wanadoo.fr','yahoo.co.id','yahoo.co.in','yahoo.co.jp','yahoo.co.kr','yahoo.co.uk','yahoo.com','yahoo.com.ar','yahoo.com.mx','yahoo.com.ph','yahoo.com.sg','yahoo.de','yahoo.fr','yandex.com','yandex.ru','ymail.com');

// --> Notify customer when
$hesk_settings['notify_new']=getenv_number('HESK_NOTIFY_NEW') ?? 1;
$hesk_settings['notify_skip_spam']=getenv_number('HESK_NOTIFY_SKIP_SPAM') ?? 1;
$hesk_settings['notify_spam_tags']=array('Spam?}','***SPAM***','[SPAM]','SPAM-LOW:','SPAM-MED:');
$hesk_settings['notify_closed']=getenv_number('HESK_NOTIFY_CLOSED') ?? 1;

// --> Other
$hesk_settings['strip_quoted']=1;
$hesk_settings['eml_req_msg']=0;
$hesk_settings['save_embedded']=1;
$hesk_settings['multi_eml']=0;
$hesk_settings['confirm_email']=0;
$hesk_settings['open_only']=1;


// ==> TICKET LIST

$hesk_settings['ticket_list']=array('trackid','lastchange','name','subject','status','lastreplier');

// --> Other
$hesk_settings['submittedformat']=2;
$hesk_settings['updatedformat']=2;


// ==> MISC

// --> Date & Time
$hesk_settings['timezone']=getenv_string('HESK_TIMEZONE') ?? 'UTC';
$hesk_settings['timeformat']='Y-m-d H:i:s';
$hesk_settings['time_display']='1';

// --> Other
$hesk_settings['ip_whois']='https://whois.domaintools.com/{IP}';
$hesk_settings['maintenance_mode']=0;
$hesk_settings['alink']=1;
$hesk_settings['submit_notice']=0;
$hesk_settings['online']=0;
$hesk_settings['online_min']=10;
$hesk_settings['check_updates']=1;


#############################
#     DO NOT EDIT BELOW     #
#############################
$hesk_settings['hesk_version']='3.2.3';
if ($hesk_settings['debug_mode'])
{
    error_reporting(E_ALL);
}
else
{
    error_reporting(0);
}
if (!defined('IN_SCRIPT')) {die('Invalid attempt!');}
