tuto récuperé sur http://www.magdiblog.fr/boa-pi-homedashscreen/4-module-1-date-et-heure/

## installer xplanet
`apt-get install xplanet`

## rendre xplanet_cloud.sh executable
`chmod 755 xplanet_cloud.sh`

## tache cron 
`crontab -e`
`0 */4 * * *     /var/wwww/xplanet/xplanet/xplanet_cloud.sh`


## excuter xplanet.sh 
`mv xplanet.sh /etc/init.d/xplanet.sh`
puis
`update-rc.d xplanet.sh defaults`