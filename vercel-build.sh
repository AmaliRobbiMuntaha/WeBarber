#!/bin/bash
set -e

echo "Installing PHP dependencies..."
composer install --no-dev --prefer-dist --optimize-autoloader

echo "Installing Node dependencies..."
npm ci

echo "Building frontend..."
npm run build

echo "Vercel build completed!"