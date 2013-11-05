XsolveBootstrapCrudBundle
=================

By [Piotr Pasich](http://xsolve.pl)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/6ed75282-7e0a-4fbd-a86a-13fe209e2509/big.png)](https://insight.sensiolabs.com/projects/6ed75282-7e0a-4fbd-a86a-13fe209e2509)

[![knpbundles.com](http://knpbundles.com/xsolve-pl/xsolve-bootstrap-crud-bundle/badge)](http://knpbundles.com/xsolve-pl/xsolve-bootstrap-crud-bundle)


About
-----

XsolveBootstrapCrudBundle is for preparing CRUD action from console to [Bootstrap, from Twitter](http://twitter.github.com/bootstrap/).

Also, there is prepared example layout to make beggining with project faster.


Installation
------------

First you need to add `braincrafted/bootstrap-bundle` to `composer.json`:

    {
       "require": {
            "xsolve/xsolve-bootstrap-crud-bundle": "dev-master"
        }
    }


You can configure your assets inside config.yml file.
You should have installed less and node libraries with less for node module (sudo npm -g install less)

assetic:
    debug:          %kernel.debug%
    use_controller: false
    bundles:        [ 'XsolveBootstrapCrudBundle' ]
    filters:
        cssrewrite: ~
        less:
            node: /usr/local/bin/node
            node_paths: [/usr/local/lib/node_modules]
            apply_to: "\.less$"


You also have to add `XsolveBootstrapCrudBundle` and `BcBootstrapBundle` to your `AppKernel.php`:

    // app/AppKernel.php
    ...
    class AppKernel extends Kernel
    {
        ...
        public function registerBundles()
        {
            $bundles = array(
                ...
                new Bc\Bundle\BootstrapBundle\BcBootstrapBundle(),
                new Xsolve\BootstrapCrudBundle\(),
            );
            ...

            return $bundles;
        }
        ...
    }

Example layout
------------

There is created example layout using twitter bootstrap styles in resources.
After successful installation you can start with prepared example layout based on bootstrap's home page.

To do this, you need to extend your base layotu file in app/Resources/views/base.html.twig by:

```
    {% extends 'XsolveBootstrapCrudBundle::examplelayout.html.twig' %}
```

And that's it.


CRUD generator
------------

Because CRUD generator in Symfony framework has own structure and after generating a developer should always change some classes and code inside the code there is created new generator command in command line.

It works in the same way as the oryginal enerator in Symfony, but generates templates dedicated for twitter bootstrap.


```
    xsolve:doctrine:crud
    xsolve:generate:crud
```

License
-------

- The bundle is licensed under the [MIT License](http://opensource.org/licenses/MIT)
- The CSS and Javascript from the Twitter Bootstrap are licensed under the [Apache License 2.0](http://www.apache.org/licenses/LICENSE-2.0)
