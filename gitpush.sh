#!/bin/bash
echo 'start'
date=`date '+%Y-%m-%d %H:%M:%S'`
echo $date
git add .
git status
git commit -m '${date}'
git push
