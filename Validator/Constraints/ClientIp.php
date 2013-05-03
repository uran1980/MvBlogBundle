<?php
/**
 * Description of NoTmpMail
 *
 * @author michael
 */
namespace tabernicola\BlogBundle\Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 */
class ClientIp extends Constraint {
    public $message = "Une erreur est survenue."; 
}

?>
