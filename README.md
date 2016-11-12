# gtm_website
Website for learning advanced web analytics implementation with Google Tag Manager

```
cd /var/www
rm -Rf html
git clone https://github.com/joseramoncajide/gtm_website.git html

```


```
git stash save "Changes I don't want to commit yet"
git pull
git stash pop
```


Installing composer
```
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === 'aa96f26c2b67226a324c27919f1eb05f21c248b987e6195cad9690d5c1ff713d53020a02ac8c217dbf90a7eacc9d141d') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

Installing Google PHP api client library
```
php composer.phar require google/apiclient:^2.0
```


https://developers.google.com/sheets/quickstart/php

Use this wizard to create or select a project in the Google Developers Console and automatically turn on the API. Click Continue, then Go to credentials.
On the Add credentials to your project page, click the Cancel button.
At the top of the page, select the OAuth consent screen tab. Select an Email address, enter a Product name if not already set, and click the Save button.
Select the Credentials tab, click the Create credentials button and select OAuth client ID.
Select the application type Other, enter the name "Google Sheets API Quickstart", and click the Create button.
Click OK to dismiss the resulting dialog.
Click the file_download (Download JSON) button to the right of the client ID.
Move this file to your working directory and rename it client_secret.json.


Service account example: https://github.com/google/google-api-php-client/blob/master/examples/service-account.php



# Give access to the new sheet to: sheets@gtm-website.iam.gserviceaccount.com