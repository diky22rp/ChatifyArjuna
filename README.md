# ChatifyArjuna Laravel Package 

A package for Laravel PHP Framework to add a complete real-time chat system. Custom package from chatify (munafio/chatify/) for Internal Company

Requirements:
  - PHP >=5.3.2.
  - Laravel >=5.4
  - Pusher Api Account.

### Installation

1. Install the package in your Laravel app
```sh
$ composer require diky22rp/ChatifyArjuna
```

2. Pusher Api Settings
This package using Pusher Api, so you need to :
- Create account and modify .env file of your Laravel app with your api credentials.
- This package used a Pusher client events, and client events must be enabled for the application. You can do this in the Settings tab for your app within the Channels dashboard.

3. Publishing Assets
Packages' assets to be published :
The Important assets:
- config
- assets
- migrations
- controllers
- views

to pusblish the assets, do the following command line with changing the tag value .. that means after --tag= write chatify- + asset name as mentioned above.
Example :
```sh
$ php artisan vendor:publish --tag=chatify-config
```
- NOTE: Publishing assets means (e.g. config) that creating a copy of the package's config file into the config folder of your Laravel applications and like so with the other asstes (Package's Views, controllers, migrations ...).

4. Migrate the new migrations that added by the previous step
```sh
$ php artisan migrate
```
5. Storage Symlink
```sh
$ php artisan storage:link
```

### Custom Package from https://github.com/munafio/chatify

 - Thank u for munafio
