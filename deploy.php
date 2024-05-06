<?php
name: Deploy to Hosting Server

on:
push:
branches:
- master

jobs:
deploy:
runs-on: ubuntu-latest

steps:
- name: Checkout repository
uses: actions/checkout@v2

- name: Install Composer dependencies
run: composer install --no-interaction --prefer-dist

- name: Deploy to Hosting Server
run: php vendor/bin/dep deploy ServerHostingku branch=master