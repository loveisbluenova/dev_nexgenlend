<?php
/**
* Language file for staff error/success messages
*
*/

return array(

    'staff_exists'              => 'Staff déja existant!',
    'staff_not_found'           => "Staff [:id] n'existe pas.",
    'insufficient_permissions' => 'Permissions insuffisantes.',
    'banned'              => 'bannis',
    'suspended'             => 'suspendu',

    'success' => array(
        'create'    => "Staff a bien été crée.",
        'update'    => "Staff a bien été mis à jour.",
        'delete'    => "Staff a bien été supprimé.",
        'ban'       => "Staff a bien été banni.",
        'unban'     => "Staff a bien été rétabli.",
        'suspend'   => "Staff a bien été suspendu.",
        'unsuspend' => "Staff a bien été rétabli.",
        'restored'  => "Staff a bien été restauré."
    ),

    'error' => array(
        'create'    => "Il y a eu un problème lors de la création de staff. Merci de réessayer.",
        'update'    => "Il y a eu un problème lors de la mise à jour de staff. Merci de réessayer.",
        'delete'    => "Il y a eu un problème lors de la suppression de staff. Merci de réessayer.",
        'unsuspend' => "Il y a eu un problème lors du rétablissement de staff. Merci de réessayer."
    ),

);
