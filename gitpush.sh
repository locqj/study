#!/bin/bash
echo 'start'
git add .
git status
TIME = time
git commit -m 'tag$TIME'
git push
echo 'end'