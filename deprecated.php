<?php

// 2.0
if ( ! isset($frm_vars['pro_is_installed']) ) {
    $frm_vars['pro_is_installed'] = false;
}

// Instansiate Models
global $frmdb;
global $frm_field;
global $frm_form;
global $frm_entry;
global $frm_entry_meta;

$frmdb              = new FrmDbDeprecated();
$frm_field          = new FrmFieldDeprecated();
$frm_form           = new FrmFormDeprecated();
$frm_entry          = new FrmEntryDeprecated();
$frm_entry_meta     = new FrmEntryMetaDeprecated();
