CREATE TABLE IF NOT EXISTS `mc_gmapconnect` (
  `id_gconnect` smallint(3) UNSIGNED NOT NULL AUTO_INCREMENT,
  `key_gconnect` varchar(125) NOT NULL,
  PRIMARY KEY (`id_gconnect`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

INSERT INTO `mc_admin_access` (`id_role`, `id_module`, `view`, `append`, `edit`, `del`, `action`)
  SELECT 1, m.id_module, 1, 1, 1, 1, 1 FROM mc_module as m WHERE name = 'gmapconnect';