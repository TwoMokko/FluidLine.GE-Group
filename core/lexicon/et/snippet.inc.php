<?php
/**
 * Snippet English lexicon topic
 *
 * @language en
 * @package modx
 * @subpackage lexicon
 */
$_lang['example_tag_snippet_name'] = 'NameOfSnippet';
$_lang['snippet'] = 'Snippet';
$_lang['snippets_available'] = 'Snippetid, mis on teile saadaval teie lehtedel kasutamiseks';
$_lang['snippet_category_desc'] = 'Use to group Snippets within the Elements tree.';
$_lang['snippet_code'] = 'Snippet Code (PHP)';
$_lang['snippet_delete_confirm'] = 'Olete kindel, et soovite kustutada selle snippeti?';
$_lang['snippet_description_desc'] = 'Usage information for this Snippet shown in search results and as a tooltip in the Elements tree.';
$_lang['snippet_duplicate_confirm'] = 'Olete kindel, et soovite dubleerida seda snippeti?';
$_lang['snippet_duplicate_error'] = 'Tekkis viga snippeti dubleerimisel.';
$_lang['snippet_err_create'] = 'Tekkis viga snippeti loomisel.';
$_lang['snippet_err_delete'] = 'Tekkis viga snippeti kustutamisel.';
$_lang['snippet_err_duplicate'] = 'Tekkis viga snippeti dubleerimisel.';
$_lang['snippet_err_ae'] = 'Snippet nimega "[[+name]]" juba eksisteerib.';
$_lang['snippet_err_invalid_name'] = 'Snippeti nimi ei ole kehtiv.';
$_lang['snippet_err_locked'] = 'See snippet on lukustatud.';
$_lang['snippet_err_nf'] = 'Snippeti ei leitud!';
$_lang['snippet_err_ns'] = 'Snippeti olenud määratud.';
$_lang['snippet_err_ns_name'] = 'Palun määrake snippeti nimi.';
$_lang['snippet_err_remove'] = 'An error occurred while trying to delete the snippet.';
$_lang['snippet_err_save'] = 'Tekkis viga snippeti salvestamisel.';
$_lang['snippet_execonsave'] = 'Käivita snippet pärast salvestamist.';
$_lang['snippet_lock'] = 'Lukusta snippet muutmisteks';
$_lang['snippet_lock_desc'] = 'Only users with “edit_locked” permissions can edit this Snippet.';
$_lang['snippet_management_msg'] = 'Siit saate valida, milliseid snippeteid soovite muuta.';
$_lang['snippet_name_desc'] = 'Place the content generated by this Snippet in a Resource, Template, or Chunk using the following MODX tag: [[+tag]]';
$_lang['snippet_new'] = 'Create Snippet';
$_lang['snippet_properties'] = 'Tava Omadused';
$_lang['snippet_tab_general_desc'] = 'Here you can enter the basic attributes for this <em>Snippet</em> as well as its content. The content must be PHP, either placed in the <em>Snippet Code</em> field below or in a static external file. To receive output from your Snippet at the point where it is called (within a Template or Chunk), a value must be returned from within the code.';
$_lang['snippet_tag_copied'] = 'Snippet tag copied!';
$_lang['snippets'] = 'Snippetid';

// Temporarily match old keys to new ones to ensure compatibility
// --fields
$_lang['snippet_desc_category'] = $_lang['snippet_category_desc'];
$_lang['snippet_desc_description'] = $_lang['snippet_description_desc'];
$_lang['snippet_desc_name'] = $_lang['snippet_name_desc'];
$_lang['snippet_lock_msg'] = $_lang['snippet_lock_desc'];

// --tabs
$_lang['snippet_msg'] = $_lang['snippet_tab_general_desc'];
