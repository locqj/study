#!/bin/bash
echo 'start'
time=`date '+%Y-%m-%d %H:%M:%S'`
git add .
git status
git commit -m $date'->every day finish tag'
git push
