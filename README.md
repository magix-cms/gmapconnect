# Gmap Connect
Plugin Gmap Connect for [magixcms 3](https://www.magix-cms.com)

### version 

[![release](https://img.shields.io/github/release/magix-cms/apifootball.svg)](https://github.com/magix-cms/apifootball/releases/latest)

Authors
-------

* Gerits Aurelien (aurelien[at]magix-cms[point]com)

## Description
Connexion à GoogleMap pour vous permettre de développer vos propres outils

## Installation
 * Décompresser l'archive dans le dossier "plugins" de magix cms
 * Connectez-vous dans l'administration de votre site internet
 * Cliquer sur l'onglet plugins du menu déroulant pour sélectionner apifootball.
 * Une fois dans le plugin, laisser faire l'auto installation
 * Il ne reste que la configuration du plugin pour correspondre avec vos données.
   
### Exemple d'utilisation dans vos plugins

```php
$gmapConnect = new plugins_gmapconnect_public();
$apiKey = $gmapConnect->setItemData();
if($apiKey != null) {
    $gmapApiKey =  $apiKey['key_gconnect'];
}else{
    $gmapApiKey = NULL;
}
$template->assign('gmapApiKey', $gmapApiKey);
````
Ressources
 -----
  * https://developers.google.com/maps/documentation/?hl=fr
  * https://www.magix-cms.com
