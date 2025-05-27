<?php
$site = [
    'https://videos-sooty-three.vercel.app/max.mp4',
    'https://videos-sooty-three.vercel.appopeninglesh.mp4',
   
];

$destino = rand(0, count($site) - 1);

echo $site[$destino];
?>
