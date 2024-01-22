<?php

return [
    'guard' => 'web',
    'passwords' => 'users',
    'limiters' => [
        'login' => null,
    ],
    'features' => [
        // 'registration', // Décommentez si vous voulez activer l'enregistrement
        // 'reset-passwords', // Décommentez si vous voulez activer la réinitialisation de mot de passe
        'email-verification' => true, // Active la vérification par e-mail
        // 'update-profile-information', // Décommentez si vous voulez activer la mise à jour du profil
        // 'update-passwords', // Décommentez si vous voulez activer la mise à jour du mot de passe
        // 'two-factor-authentication', // Décommentez si vous voulez activer l'authentification à deux facteurs
    ],
    'views' => true,
];
