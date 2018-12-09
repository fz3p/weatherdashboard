#!/bin/sh
#
#### BEGIN INIT INFO
# Provides:          xplanet
# Required-Start:    $remote_fs $syslog
# Required-Stop:     $remote_fs $syslog
# Should-Start:      $portmap
# Should-Stop:       $portmap
# X-Start-Before:    nis
# X-Stop-After:      nis
# Default-Start:     2 3 4 5
# Default-Stop:      0 1 6
# X-Interactive:     true
# Short-Description: Example initscript
# Description:       This file should be used to construct scripts to be
#                    placed in /etc/init.d.
### END INIT INFO

# TERRE
xplanet -conf /var/www/xplanet/xplanet/xplanet.conf -output /var/www/xplanet/xplanet/img/xplanet_earth.png -wait 120 -body earth -latitude 40 -longitude 10 -geometry 500x500 &

# LUNE
xplanet -conf /var/www/xplanet/xplanet/xplanet.conf -output /var/www/xplanet/xplanet/img/xplanet_moon.png -wait 600 -body moon -geometry 250x250 &