<?php
/**
* Language file for user error/success messages
*
*/

return [

    'staff_exists'              => 'Staff already exists!',
    'staff_not_found'           => 'Staff [:id] does not exist.',
    'insufficient_permissions' => 'Insufficient Permissions.',
    'banned'              => 'banned',
    'suspended'             => 'suspended',

    'success' => [
        'create'    => 'Staff was successfully created.',
        'update'    => 'Staff was successfully updated.',
        'delete'    => 'Staff was successfully deleted.',
        'ban'       => 'Staff was successfully banned.',
        'unban'     => 'Staff was successfully unbanned.',
        'suspend'   => 'Staff was successfully suspended.',
        'unsuspend' => 'Staff was successfully unsuspended.',
        'restored'  => 'Staff was successfully restored.'
    ],

    'error' => [
        'create'    => 'There was an issue creating the staff. Please try again.',
        'update'    => 'There was an issue updating the staff. Please try again.',
        'delete'    => 'There was an issue deleting the staff. Please try again.',
        'unsuspend' => 'There was an issue unsuspending the staff. Please try again.',
        'file_type_error'   => 'Only jpg, jpeg, bmp, png extensions are allowed.',
    ],

];

