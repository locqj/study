#!/bin/bash
echo 'start'
date1=$(date +%Y-%m-%d %H:%M:%S)
#dated=`date '+%Y-%m-%d %H:%M:%S'`
echo $date
git add .
git status
git commit -m $date1'study tag'
git push
