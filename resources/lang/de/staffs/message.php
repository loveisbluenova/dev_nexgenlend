<?php
/**
* Language file for staff error/success messages
*
*/

return array(

    'user_exists'              => 'Mitarbeiter existiert bereits!',
    'user_not_found'           => 'Mitarbeiter [:id] ist nicht vorhanden.',
    'insufficient_permissions' => 'Unzureichende Berechtigungen.',
    'banned'              => 'Gesperrt',
    'suspended'             => 'Suspendiert',

    'success' => array(
        'create'    => 'Mitarbeiter wurde erfolgreich erstellt.',
        'update'    => 'Mitarbeiter wurde erfolgreich aktualisiert.',
        'delete'    => 'Mitarbeiter wurde erfolgreich gelöscht.',
        'ban'       => 'Mitarbeiter wurde erfolgreich gesperrt.',
        'unban'     => 'Mitarbeiter wurde erfolgreich entsperrt.',
        'suspend'   => 'Mitarbeiter wurde erfolgreich suspendet.',
        'unsuspend' => 'Mitarbeiter wurde erfolgreich unsuspended.',
        'restored'  => 'Mitarbeiter wurde erfolgreich wiederhergestellt.'
    ),

    'error' => array(
        'create'    => 'Es gab ein Problem beim Erstellen des Mitarbeiter. Bitte versuchen Sie es noch einmal.',
        'update'    => 'Es gab ein Problem beim Aktualisieren des Mitarbeiter. Bitte versuchen Sie es noch einmal.',
        'delete'    => 'Es gab ein Problem beim Löschen des Mitarbeiter. Bitte versuchen Sie es nocheinmal.',
        'unsuspend' => 'Es gab ein Problem beim Unsuspending des Mitarbeiter. Bitte versuchen Sie es nocheinmal.'
    ),

);
