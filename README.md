# `craft-dev`

```sh
git clone --recurse-submodules git@github.com:timkelty/craft-dev.git'
cd craft-dev.test
nitro add
nitro composer install
```

### Change PHP version

```sh
nitro composer config platform.php 7.4
nitro composer update
nitro edit
```

### Hack on a composer package

```sh
git submodule add git@github.com:craftcms/aws-s3.git submodules/aws-s3
composer config repositories.aws-s3 path submodules/aws-s3
composer require craftcms/aws-s3 "*"
```
