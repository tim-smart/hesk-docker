#!/usr/bin/env sh

if [ "$INSTALL_MODE" != "true" ]; then
	rm -rf /srv/install
fi

exec docker-php-entrypoint apache2-foreground
