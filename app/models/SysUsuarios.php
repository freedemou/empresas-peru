<?php

use Phalcon\Validation;
use Phalcon\Validation\Validator\Email as EmailValidator;

class SysUsuarios extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $idusuario;

    /**
     *
     * @var string
     */
    public $token;

    /**
     *
     * @var string
     */
    public $password;

    /**
     *
     * @var string
     */
    public $nombre;

    /**
     *
     * @var string
     */
    public $apellidos;

    /**
     *
     * @var string
     */
    public $email;

    /**
     *
     * @var string
     */
    public $sexo;

    /**
     *
     * @var string
     */
    public $estado;

    /**
     *
     * @var string
     */
    public $cambio_clave;

    /**
     *
     * @var string
     */
    public $idfacebook;

    /**
     *
     * @var integer
     */
    public $idperfil;

    /**
     *
     * @var string
     */
    public $esadmin;

    /**
     *
     * @var integer
     */
    public $telefono;

    /**
     *
     * @var string
     */
    public $usuario;

    /**
     *
     * @var integer
     */
    public $idcargos;

    /**
     *
     * @var string
     */
    public $direccion;

    /**
     *
     * @var integer
     */
    public $idareas;

    /**
     * Validations and business logic
     *
     * @return boolean
     */
    public function validation()
    {
        $validator = new Validation();

        $validator->add(
            'email',
            new EmailValidator(
                [
                    'model'   => $this,
                    'message' => 'Please enter a correct email address',
                ]
            )
        );

        return $this->validate($validator);
    }

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("db_linostoy");
        $this->setSource("sys_usuarios");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'sys_usuarios';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return SysUsuarios[]|SysUsuarios|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return SysUsuarios|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
