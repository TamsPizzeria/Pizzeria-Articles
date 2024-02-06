#!/bin/sh
cd D:\WEBSERVER2\htdocs\articles
git stash
git pull
sleep 3
git stash pop
git stash clear
git add --all
timestamp() {
  date +"at %H:%M:%S on %d/%m/%Y"
}
git commit -am "Regular auto-commit $(timestamp)"
git push origin master
sleep 3s
git fetch origin
git reset --hard origin/master
git pull