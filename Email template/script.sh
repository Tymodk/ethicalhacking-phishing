#!/bin/bash
#THESCRIPT
cat template.html | sendEmail -f notifications@instructure.com -t fill -s uit.telenet.be -u "Canvas notification"
echo "EOF"