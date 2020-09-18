#!/bin/bash

if grep -q "autoindex on" etc/nginx/sites-available/semery
then
	sed -i 's/autoindex on;/autoindex off;/' etc/nginx/sites-available/semery
	service nginx restart
elif grep -q "autoindex off" etc/nginx/sites-available/semery
then
	sed -i 's/autoindex off;/autoindex on;/' etc/nginx/sites-available/semery
	service nginx restart
fi
