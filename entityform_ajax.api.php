<?php

/**
 * Provide access to form, called by AJAX.
 *
 * @param array $form
 */
function hook_EFORM_ID_entityform_ajax_alter($form) {
  // Hide entityform intro text.
  hide($form['intro']);
}
