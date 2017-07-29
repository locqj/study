#!/bin/bash
echo 'start'
time=`date '+%Y-%m-%d %H:%M:%S'`
echo $time
#date1=$(date +%Y-%m-%d %H%M%S)
git add .
git status
git commit -m 'study tagl ${time}'
git push
