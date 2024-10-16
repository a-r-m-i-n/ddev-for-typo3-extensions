# DDEV for TYPO3 extensions

This is an example configuration for DDEV to provide a development environment
for a single TYPO3 CMS extension.

It also provides a very basic skeleton of a TYPO3 extension, which automatically gets 
installed in all TYPO3 versions.

Currently, the following TYPO3 CMS versions are supported (using PHP 8.2):

- TYPO3 11.5 LTS
- TYPO3 12.4 LTS
- TYPO3 13.4 LTS

If you are looking for older TYPO3 CMS versions, you can check out and use those tags:

- [TYPO3 CMS 9.5 & 10.4 LTS](https://github.com/a-r-m-i-n/ddev-for-typo3-extensions/tree/v9-support)
- [TYPO3 CMS 8.7 LTS](https://github.com/a-r-m-i-n/ddev-for-typo3-extensions/tree/v8-support)

## Setup

1. Copy the entire ``.ddev`` folder to your project's root
2. Search and replace in all files within ``.ddev``
    - search for ``my_ext`` and replace with your **extension key** 
    - search for ``my-ext`` and replace with your **DDEV sitename** (used in URL)
3. Change the package name ``vendor/my-ext`` in root ``composer.json`` as well as 
   in environment section in ``.ddev/docker-compose.web.yaml`` file (variable ``PACKAGE_NAME``).
4. Also adjust the autoload section in root ``composer.json``.

When done with renaming, the following files have been touched:

- ``.ddev/apache/apache-site.conf`` to set ServerAlias in vhost
- ``.ddev/web-build/Dockerfile`` creates initial index.html files
- ``.ddev/docker-compose.web.yaml`` to define environment variables and Docker volumes 
- ``.ddev/config.yaml`` to set DDEV sitename and additional hostnames
- ``composer.json`` the package name of your extension, the autoload and extra section

You can check the final result in your version control system and share it with your
collaborators, which can use it instantly.


## Usage

### Requirements

The following software is required to be installed on the host machine:

- Docker
- Docker Compose
- DDEV

Also, an internet connection is required, to fetch containers and packages. 
Once the environment is installed, no internet connection is required anymore. 


### Start DDEV 

Check out your project, with ``.ddev `` folder in it and perform a

```
$ ddev start
```

on CLI. This will start the containers, but will not install anything automatically.


### Install TYPO3 environments

This environment offers several DDEV commands, to provision the web container, supporting
the following TYPO3 versions:

```
$ ddev install-v11
$ ddev install-v12
$ ddev install-v13
```

To install all at once, you can also use

```
$ ddev install-all
```

When the installation is done, you can access an overview here:

- https://my-ext.ddev.site/

The TYPO3 installations are available here:

- https://v11.my-ext.ddev.site/typo3/
- https://v12.my-ext.ddev.site/typo3/
- https://v13.my-ext.ddev.site/typo3/

As well as an entry-point to the rendered HTML documentation:

- https://docs.my-ext.ddev.site/ (you need to perform ``ddev docs`` first)

*Note: Replace ``my-ext`` with your DDEV sitename*


### Credentials

All versions got the same credentials set:

- Username: ``admin``
- Password: ``Password:joh316`` (also in install tool)


### TYPO3 CLI / typo3_console

To access TYPO3's CLI tools you can utilize ``ddev exec`` like that:
```
$ ddev exec v12/vendor/bin/typo3
$ ddev exec v13/vendor/bin/typo3
```

In TYPO3 v11 you can still use the binary of typo3_console:
```
$ ddev exec v11/vendor/bin/typo3cms
```


### Render and view documentation

Every extension should have proper documentation, which can get hosted on
https://docs.typo3.org. To render and view the documentation locally, you can use: 

```
$ ddev docs
$ ddev launch-docs
```

### Remove DDEV project

To remove a DDEV project you can use the following command on CLI
```
$ ddev delete -Oy
```


## Support

### Questions, feature requests, bugs

Feel free to open new issues on Github:

https://github.com/a-r-m-i-n/ddev-for-typo3-extensions/issues


### Donate

If you like this project, feel free to [donate](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=2DCCULSKFRZFU) 
some funds to support further development.


### Known problems

#### The package "__root__" depends on "t3/cms" which is not present in the system

When composer gives you this issue, you need to self-update composer.
This issue occured in Composer 2.5.6.

#### Wrong line endings

When you get the following error

> bash: ./install-v13: /bin/bash^M: bad interpreter: No such file or directory

your host system is probably Windows based. This issue occurs, when the shell
scripts got wrong line endings (wrong: CRLF, correct: LF). On Windows, Git changes
the line-endings by default, if `git config core.autocrlf` is not set to ``false``.


### Contribute

If you are a developer, and you want to submit improvements as code, you can fork this repo
and make a pull request to the master branch.

Thanks!
