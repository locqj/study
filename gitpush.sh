#!/bin/bash
echo 'start'
git add .
git status
git commit -m 'tag'
git push
echo 'end'