# Codespace PHP

This repository is ment to help you get started with PHP development environment in GitHub Codespaces or as local [DevContainer](https://containers.dev/). The environment will provide a PHP server, a running MySQL server, a database web admin tool [adminer](https://www.adminer.org/) running and tasks, launchers and setting setup for Code. DB credentials are to be found in the .env file and also used in the sample index.php to connect to the DB as a test.

Push the button below to create a new GitHub Codespace with this repository as template.

[![Open in GitHub Codespaces](https://github.com/codespaces/badge.svg)](https://github.com/codespaces/new?template_repository=hilli/codespace-php)

You can instantly start hacking on your site and view it at http://localhost:8080 after starting either the raw PHP serve mode or Apache 2, see below.

You can [manage your Codespaces](https://github.com/codespaces/) so you can stop the Codespaces when you stop your work and delete the Codespace when you have committed and pushed your code.

[LiveShare extension for VSCode](https://marketplace.visualstudio.com/items?itemName=MS-vsliveshare.vsliveshare) is also installed to make it possible for multiple users to hack on the same code at the same time.

## DevContainer PHP

Alternatively you can pull this code or take a release of this repo and run VSCode on top of these files to do the same locally. This requires VSCode and a local [Docker](https://www.docker.com/) installed.

## Tips and Tricks

### The DB: MariaDB

All possible values are configured to be `mariadb` - Hostname, username, password and the database itself.

### Starting the PHP Server

Launch it with the Run & Debug (shift+cmd+D) sidebar. There you can select either `Launch My Site` or `Debug My Site`. The first skips breakpoints in the code, the second doesn't.

The PHP files are located beneath the [site](site) directory.

Apache 2 is also configured to point at the [site](site) directory. It can be started with `apache2-foreground` in the Code terminal or in the background with `apache2ctl start` if you don't care about logs. 

### Adminer

Should be available at [localhost:8082](http://localhost:8082).

### Database schema and data dumps

There is defined tasks for this. Press `shift+cmd+P` (Or `shift+ctrl+P` if you are on a not Mac or just the `F1` button) to get to the Command Palette. Type `>Tasks: Run Task` to get to `Save DB Schema` and `Save DB Data`. This will dump schema and data to the files `database/schema.sql` and `database/data_dump.sql` making the database portable. You should commit at least the `schema.sql` files to git. Your site will possible be prettier with some data as well.

The dumps are as safe as possibly; There is no inserted `DROP TABLE` statements in the schema. So run explicit `drop_tables.sql` (And keep it manually updated with new tables) to clear tables in your database first if needed.

### SQLTools

The VS Code extension `SQLTools` is also installed and configured to use the build in MariaDB. There is a "storage" icon in the VSCode sidebar, where you can connect to the database (Just click trough the tree until there is a connection identified by a green marker in the tree and a 1 on the SQLTools icon in the sidebar). When connected you can open `.sql` files and do a `Run on Active Connection` to apply them. I.e. an easy way to import schema and data to the database.


