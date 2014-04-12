<?php

namespace app\models\persistence\daos;

use framework\persistence\Dao;

interface UsuarioDao extends Dao {

    public function findAllRoles();

    public function findById($id);

    public function findRolById($id);
}
