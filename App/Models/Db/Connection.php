<?php


namespace App\Models\Db;


class Connection
{
    protected $dbh;

    public function __construct()
    {

        $config = Config::getInstance();

        $dsn = 'mysql:host=' . $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'];
        $username = $config->data['db']['username'];
        $password = $config->data['db']['password'];
        $this->dbh = new \PDO($dsn, $username, $password);
    }

    public function query(string $sql, array $params = [], $class = '')
    {
        $sth = $this->dbh->prepare($sql); //prepare — Подготавливает запрос к выполнению и возвращает связанный с этим запросом объект
        $sth->execute($params); // Выполняет операцию удаления

        if (empty($class)) {
            return $sth->fetchAll(\PDO::FETCH_ASSOC);
        } else {
            return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
        }
    }

    public function execute(string $sql, array $params = [])
    {
        $sth = $this->dbh->prepare($sql);
        return $sth->execute($params);
    }
}
