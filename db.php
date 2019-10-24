<?php
class plugins_gmapconnect_db
{
    /**
     * @param $config
     * @param bool $params
     * @return mixed|null
     * @throws Exception
     */
    public function fetchData($config, $params = false)
    {
        if (!is_array($config)) return '$config must be an array';

        $sql = '';

        if($config['context'] === 'all') {
            switch ($config['type']) {

            }

            return $sql ? component_routing_db::layer()->fetchAll($sql,$params) : null;
        }
        elseif($config['context'] === 'one') {
            switch ($config['type']) {
                case 'root':
                    $sql = 'SELECT * FROM mc_gmapconnect ORDER BY id_gconnect DESC LIMIT 0,1';
                    break;
                case 'page':
                    $sql = 'SELECT * FROM `mc_gmapconnect` WHERE `id_gconnect` = :id_gconnect';
                    break;
            }

            return $sql ? component_routing_db::layer()->fetch($sql,$params) : null;
        }
    }

    /**
     * @param $config
     * @param array $params
     * @return bool|string
     */
    public function insert($config,$params = array())
    {
        if (!is_array($config)) return '$config must be an array';

        $sql = '';

        switch ($config['type']) {
            case 'newConfig':
                $sql = 'INSERT INTO mc_gmapconnect (key_gconnect) VALUE(:key_gconnect)';

                break;
        }

        if($sql === '') return 'Unknown request asked';

        try {
            component_routing_db::layer()->insert($sql,$params);
            return true;
        }
        catch (Exception $e) {
            return 'Exception reçue : '.$e->getMessage();
        }
    }

    /**
     * @param $config
     * @param array $params
     * @return bool|string
     */
    public function update($config,$params = array())
    {
        if (!is_array($config)) return '$config must be an array';

        $sql = '';

        switch ($config['type']) {
            case 'content':
            case 'config':
                $sql = 'UPDATE mc_gmapconnect
                    SET 
                        key_gconnect=:key_gconnect
                    WHERE id_gconnect=:id';
                break;
        }

        if($sql === '') return 'Unknown request asked';

        try {
            component_routing_db::layer()->update($sql,$params);
            return true;
        }
        catch (Exception $e) {
            return 'Exception reçue : '.$e->getMessage();
        }
    }
}
?>