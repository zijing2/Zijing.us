#!/bin/sh
sudo kill -9 $(sudo netstat -tlnp|grep 6553|awk '{print $7}'|awk -F '/' '{print $1}');
