EUROPE CHAUFFEUR - RENDER FILES

Put these files in the ROOT of your Laravel project:

1. Dockerfile
2. .dockerignore
3. render.yaml

Then commit and push:

git add Dockerfile .dockerignore render.yaml
git commit -m "Add Render deployment"
git push origin main

On Render:
- New > Blueprint if using render.yaml
  OR
- New > Web Service > select the GitHub repo > Runtime: Docker

Required secret environment variables:
APP_KEY
APP_URL
MAIL_HOST
MAIL_USERNAME
MAIL_PASSWORD
MAIL_FROM_ADDRESS

Generate APP_KEY locally:
php artisan key:generate --show

IMPORTANT:
Do not push .env to GitHub.
Rotate any Gmail app password that has already been exposed/shared.
