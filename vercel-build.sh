#!/bin/bash
set -e

echo "Installing Node dependencies..."
npm ci

echo "Building frontend..."
npm run build

echo "Vercel build completed!"