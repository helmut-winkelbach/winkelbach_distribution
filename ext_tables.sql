#
# Table structure for table 'tt_content'
#
CREATE TABLE tt_content (
    tx_bootstrappackage_timeline_item int(11) unsigned DEFAULT '0',
    tx_bootstrappackage_accordion_item int(11) unsigned DEFAULT '0',
);

# Table structure for table 'tx_bootstrappackage_timeline_item'
#
CREATE TABLE tx_bootstrappackage_timeline_item (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    datum varchar(30) DEFAULT '' NOT NULL,
    tt_content int(11) unsigned DEFAULT '0',
    date date,
    header varchar(255) DEFAULT '' NOT NULL,
    bodytext text,
    icon_file int(11) unsigned DEFAULT '0',
#    image int(11) unsigned DEFAULT '0',

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted tinyint(4) unsigned DEFAULT '0' NOT NULL,
    hidden tinyint(4) unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,

    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) unsigned DEFAULT '0' NOT NULL,
    l10n_diffsource mediumblob NULL,

    t3ver_oid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_id int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_wsid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_state smallint DEFAULT '0' NOT NULL,
    t3ver_stage int(11) DEFAULT '0' NOT NULL,
    t3ver_count int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY t3ver_oid (t3ver_oid,t3ver_wsid),
    KEY language (l10n_parent,sys_language_uid)
);

# Table structure for table 'tx_bootstrappackage_accordion_item'
#
CREATE TABLE tx_bootstrappackage_accordion_item (
    uid int(11) unsigned NOT NULL auto_increment,
    pid int(11) DEFAULT '0' NOT NULL,

    tt_content int(11) unsigned DEFAULT '0',
    header varchar(255) DEFAULT '' NOT NULL,
    bodytext text,
    media int(11) unsigned DEFAULT '0',
    mediaorient varchar(60) DEFAULT 'left' NOT NULL,
    imagecols tinyint(4) unsigned DEFAULT '1' NOT NULL,
    image_zoom tinyint(3) unsigned DEFAULT '0' NOT NULL,

    tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    crdate int(11) unsigned DEFAULT '0' NOT NULL,
    cruser_id int(11) unsigned DEFAULT '0' NOT NULL,
    deleted smallint unsigned DEFAULT '0' NOT NULL,
    hidden smallint unsigned DEFAULT '0' NOT NULL,
    starttime int(11) unsigned DEFAULT '0' NOT NULL,
    endtime int(11) unsigned DEFAULT '0' NOT NULL,
    sorting int(11) DEFAULT '0' NOT NULL,

    sys_language_uid int(11) DEFAULT '0' NOT NULL,
    l10n_parent int(11) unsigned DEFAULT '0' NOT NULL,
    l10n_diffsource mediumblob NULL,

    t3ver_oid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_id int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_wsid int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_label varchar(255) DEFAULT '' NOT NULL,
    t3ver_state smallint DEFAULT '0' NOT NULL,
    t3ver_stage int(11) DEFAULT '0' NOT NULL,
    t3ver_count int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_tstamp int(11) unsigned DEFAULT '0' NOT NULL,
    t3ver_move_id int(11) unsigned DEFAULT '0' NOT NULL,
    t3_origuid int(11) unsigned DEFAULT '0' NOT NULL,

    PRIMARY KEY (uid),
    KEY parent (pid),
    KEY t3ver_oid (t3ver_oid,t3ver_wsid),
    KEY language (l10n_parent,sys_language_uid)
);

