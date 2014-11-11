TOCAT skeleton module
-----

This is skeleton module for tocat platform, but it compatible with any ZF2 modules


### Replacement templates

 * [Company] - Company name or Vendor name
 * [ModuleName] - Module name in folders, in config string, in php code (namespaces)
 * [modulename] - lowercase module name for use in routes and templates folder
 * [My] - Name for main Entity, also this part (prefix) names for Services, Repositories, View helpers and it factories
 * [my] - lovarcase entity or profix usage in variable (in camelCase)
 * [Index] - name for main controller which creating without factory (invokable)
 * [Other] - another "Other" controller creating through factory with inject MyService object
 * [index|other] - lowercase for controlers OR it actions + template folders. Also this part naming for routers 