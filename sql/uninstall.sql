TRUNCATE TABLE `mc_gmapconnect`;
DROP TABLE `mc_gmapconnect`;

DELETE FROM `mc_admin_access` WHERE `id_module` IN (
    SELECT `id_module` FROM `mc_module` as m WHERE m.name = 'gmapconnect'
);