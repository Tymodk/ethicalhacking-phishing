#!/bin/bash
#THESCRIPT
cat template.html | sendEmail -f notifications@instructure.com -t tymo.dekock@student.kdg.be -s uit.telenet.be -u "Canvas notification"
echo "EOF"