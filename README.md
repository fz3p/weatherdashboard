## Source
http://www.magdiblog.fr/boa-pi-homedashscreen/4-module-1-date-et-heure/

## installer xplanet
`apt-get install xplanet`

## installer les paquets suivants
`apt-get install imagemagick polkit-kde-1`

## rendre xplanet_cloud.sh executable
`chmod 755 xplanet_cloud.sh`

## tache cron 
`crontab -e`
`0 */4 * * *     /var/wwww/xplanet/xplanet/xplanet_cloud.sh`

## excuter xplanet.sh 
`mv xplanet.sh /etc/init.d/xplanet.sh`
`chmod 755 xplanet.sh`
puis
`sudo update-rc.d xplanet.sh defaults`

## conf apache 
https://httpd.apache.org/docs/2.2/fr/vhosts/examples.html


## changement dans le script
nouvelle url pour le téléchargement de l'image cloud_map
=> http://xplanetclouds.com/free/

## Image de la lune non présente dans xplanet : 
`cd /usr/share/xplanet/images`
`sudo cp /var/www/xplanet/xplanet/img/moonmap2k.jpg moon.jpg`

