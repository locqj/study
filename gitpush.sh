#!/bin/bash
echo 'start'
git add .
git status
git commit -m 'tag+date'
git push
echo 'end'